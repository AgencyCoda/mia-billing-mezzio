<?php

namespace Mia\Billing\Handler\Plan;

/**
 * Description of SaveHandler
 * 
 * @OA\Post(
 *     path="/mia_plan/save",
 *     summary="MiaPlan Save",
 *     tags={"MiaPlan"},
*      @OA\RequestBody(
 *         description="Object",
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/MiaPlan")
 *         )
 *     ),
 *     @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/MiaPlan")
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
        $item->title = $this->getParam($request, 'title', '');
        $item->slug = $this->getParam($request, 'slug', '');
        $item->caption = $this->getParam($request, 'caption', '');
        $item->price_month = $this->getParam($request, 'price_month', '');
        $item->price_year = $this->getParam($request, 'price_year', '');
        $item->paypal_plan_id = $this->getParam($request, 'paypal_plan_id', '');
        $item->paypal_plan_id_year = $this->getParam($request, 'paypal_plan_id_year', '');
        $item->data = $this->getParam($request, 'data', '');
        $item->is_show = intval($this->getParam($request, 'is_show', ''));
                
        
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
     * @return \App\Model\MiaPlan
     */
    protected function getForEdit(\Psr\Http\Message\ServerRequestInterface $request)
    {
        // Obtenemos ID si fue enviado
        $itemId = $this->getParam($request, 'id', '');
        // Buscar si existe el item en la DB
        $item = \Mia\Billing\Model\MiaPlan::find($itemId);
        // verificar si existe
        if($item === null){
            return new \Mia\Billing\Model\MiaPlan();
        }
        // Devolvemos item para editar
        return $item;
    }
}