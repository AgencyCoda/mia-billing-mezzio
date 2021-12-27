<?php

namespace Mia\Billing\Model;

use Mia\Auth\Model\MIAUser;

/**
 * Description of Model
 * @property int $id ID of item
 * @property mixed $user_id Description for variable
 * @property mixed $plan_id Description for variable
 * @property mixed $frecuency Description for variable
 * @property mixed $amount Description for variable
 * @property mixed $start Description for variable
 * @property mixed $end Description for variable
 * @property mixed $provider_id Description for variable
 * @property mixed $data Description for variable
 * @property mixed $status Description for variable
 * @property mixed $created_at Description for variable
 * @property mixed $updated_at Description for variable

 *
 * @OA\Schema()
 * @OA\Property(
 *  property="id",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="user_id",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="plan_id",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="frecuency",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="amount",
 *  type="number",
 *  description=""
 * )
 * @OA\Property(
 *  property="start",
 *  type="",
 *  description=""
 * )
 * @OA\Property(
 *  property="end",
 *  type="",
 *  description=""
 * )
 * @OA\Property(
 *  property="provider_id",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="data",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="status",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="created_at",
 *  type="",
 *  description=""
 * )
 * @OA\Property(
 *  property="updated_at",
 *  type="",
 *  description=""
 * )

 *
 * @author matiascamiletti
 */
class MiaUserPlan extends \Illuminate\Database\Eloquent\Model
{
    const STATUS_PENDING = 0;
    const STATUS_PAYOUT = 1;

    protected $table = 'mia_user_plan';
    
    //protected $casts = ['data' => 'array'];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    //public $timestamps = false;

    /**
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function plan()
    {
        return $this->belongsTo(MiaPlan::class, 'plan_id');
    }
    /**
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    /*public function mia_provider()
    {
        return $this->belongsTo(MiaProvider::class, 'provider_id');
    }*/
    /**
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function user()
    {
        return $this->belongsTo(MIAUser::class, 'user_id');
    }


    
}