<?php

namespace Mia\Billing\Handler\Info;

use Mia\Core\Exception\MiaException;

/**
 * Description of FetchHandler
 * 
 * @OA\Get(
 *     path="/mia_billing_info/fetch/{id}",
 *     summary="MiaBillingInfo Fetch",
 *     tags={"MiaBillingInfo"},
 *     @OA\Parameter(
 *         name="id",
 *         description="Id of Item",
 *         required=true,
 *         in="path"
 *     ),
 *     @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/MiaBillingInfo")
 *     ),
 *     security={
 *         {"bearerAuth": {}}
 *     }
 * )
 *
 * @author matiascamiletti
 */
class FetchHandler extends \Mia\Auth\Request\MiaAuthRequestHandler
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
        // Obtenemos ID si fue enviado
        $itemId = $this->getParam($request, 'id', '');
        // Buscar si existe el tour en la DB
        $item = \Mia\Billing\Model\MiaBillingInfo::where('id', $itemId)->where('user_id', $user->id)->first();
        // verificar si existe
        if($item === null){
            throw new MiaException('Not exist item');
        }
        // Devolvemos respuesta
        return new \Mia\Core\Diactoros\MiaJsonResponse($item->toArray());
    }
}