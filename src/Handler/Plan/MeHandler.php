<?php

namespace Mia\Billing\Handler\Plan;

use Mia\Billing\Model\MiaUserPlan;
use Mia\Core\Exception\MiaException;

/**
 * Description of FetchHandler
 * 
 * @OA\Get(
 *     path="/mia_plan/fetch/{id}",
 *     summary="MiaPlan Fetch",
 *     tags={"MiaPlan"},
 *     @OA\Parameter(
 *         name="id",
 *         description="Id of Item",
 *         required=true,
 *         in="path"
 *     ),
 *     @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/MiaPlan")
 *     ),
 *     security={
 *         {"bearerAuth": {}}
 *     }
 * )
 *
 * @author matiascamiletti
 */
class MeHandler extends \Mia\Auth\Request\MiaAuthRequestHandler
{
    /**
     * 
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function handle(\Psr\Http\Message\ServerRequestInterface $request): \Psr\Http\Message\ResponseInterface
    {
        // Get Current User
        $user = $this->getUser($request);
        // Search last plan
        $item = MiaUserPlan::with('plan')
        ->where('user_id', $user->id)
        ->whereRaw('end > NOW()')
        ->where('status', MiaUserPlan::STATUS_PAYOUT)
        ->orderBy('id', 'desc')
        ->first();
        // verificar si existe
        if($item === null){
            throw new MiaException('not exist');
        }
        // Devolvemos respuesta
        return new \Mia\Core\Diactoros\MiaJsonResponse($item->toArray());
    }
}