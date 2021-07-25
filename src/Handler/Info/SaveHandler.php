<?php

namespace Mia\Billing\Handler\Info;

/**
 * Description of SaveHandler
 * 
 * @OA\Post(
 *     path="/mia_billing_info/save",
 *     summary="MiaBillingInfo Save",
 *     tags={"MiaBillingInfo"},
*      @OA\RequestBody(
 *         description="Object",
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/MiaBillingInfo")
 *         )
 *     ),
 *     @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/MiaBillingInfo")
 *     ),
 *     security={
 *         {"bearerAuth": {}}
 *     },
 * )
 *
 * @author matiascamiletti
 */
class SaveHandler extends \Mia\Auth\Request\MiaAuthRequestHandler
{
    /**
     * 
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function handle(\Psr\Http\Message\ServerRequestInterface $request): \Psr\Http\Message\ResponseInterface 
    {
        // Obtener item a procesar
        $item = $this->getForEdit($request);
        // Guardamos data
        $item->type = intval($this->getParam($request, 'type', '0'));
        $item->company = $this->getParam($request, 'company', '');
        $item->firstname = $this->getParam($request, 'firstname', '');
        $item->lastname = $this->getParam($request, 'lastname', '');
        $item->legal_number = $this->getParam($request, 'legal_number', '');
        $item->address = $this->getParam($request, 'address', '');
        $item->city = $this->getParam($request, 'city', '');
        $item->zip_code = $this->getParam($request, 'zip_code', '');
        $item->state = $this->getParam($request, 'state', '');
        $item->country = $this->getParam($request, 'country', '');
        $item->phone = $this->getParam($request, 'phone', '');
        $item->email = $this->getParam($request, 'email', '');
        $item->status = intval($this->getParam($request, 'status', '0'));        
        
        try {
            $item->save();
        } catch (\Exception $exc) {
            return new \Mia\Core\Diactoros\MiaJsonErrorResponse(-2, $exc->getMessage());
        }

        // Devolvemos respuesta
        return new \Mia\Core\Diactoros\MiaJsonResponse($item->toArray());
    }
    
    /**
     * 
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @return \App\Model\MiaBillingInfo
     */
    protected function getForEdit(\Psr\Http\Message\ServerRequestInterface $request)
    {
        // Get Current User
        $user = $this->getUser($request);
        // Obtenemos ID si fue enviado
        $itemId = $this->getParam($request, 'id', '');
        // Buscar si existe el item en la DB
        $item = \Mia\Billing\Model\MiaBillingInfo::where('id', $itemId)->where('user_id', $user->id)->first();
        // verificar si existe
        if($item === null){
            return new \Mia\Billing\Model\MiaBillingInfo();
        }
        // Devolvemos item para editar
        return $item;
    }
}