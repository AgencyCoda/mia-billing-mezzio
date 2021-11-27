<?php

namespace Mia\Billing\Model;

/**
 * Description of Model
 * @property int $id ID of item
 * @property mixed $title Description for variable
 * @property mixed $slug Description for variable
 * @property mixed $caption Description for variable
 * @property mixed $price_month Description for variable
 * @property mixed $price_year Description for variable
 * @property mixed $paypal_plan_id Description for variable
 * @property mixed $paypal_plan_id_year Description for variable
 * @property mixed $data Description for variable
 * @property mixed $is_show Description for variable

 *
 * @OA\Schema()
 * @OA\Property(
 *  property="id",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="title",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="slug",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="caption",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="price_month",
 *  type="number",
 *  description=""
 * )
 * @OA\Property(
 *  property="price_year",
 *  type="number",
 *  description=""
 * )
 * @OA\Property(
 *  property="paypal_plan_id",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="paypal_plan_id_year",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="data",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="is_show",
 *  type="integer",
 *  description=""
 * )

 *
 * @author matiascamiletti
 */
class MiaPlan extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'mia_plan';
    
    protected $casts = ['data' => 'array'];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}