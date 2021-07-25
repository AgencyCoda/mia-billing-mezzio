<?php

namespace Mia\Billing\Model;

/**
 * Description of Model
 * @property int $id ID of item
 * @property mixed $user_id Description for variable
 * @property mixed $type Description for variable
 * @property mixed $company Description for variable
 * @property mixed $firstname Description for variable
 * @property mixed $lastname Description for variable
 * @property mixed $legal_number Description for variable
 * @property mixed $address Description for variable
 * @property mixed $city Description for variable
 * @property mixed $zip_code Description for variable
 * @property mixed $state Description for variable
 * @property mixed $country Description for variable
 * @property mixed $phone Description for variable
 * @property mixed $email Description for variable
 * @property mixed $status Description for variable
 * @property mixed $created_at Description for variable
 * @property mixed $updated_at Description for variable
 * @property mixed $deleted Description for variable

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
 *  property="type",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="company",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="firstname",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="lastname",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="legal_number",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="address",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="city",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="zip_code",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="state",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="country",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="phone",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="email",
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
 * @OA\Property(
 *  property="deleted",
 *  type="integer",
 *  description=""
 * )

 *
 * @author matiascamiletti
 */
class MiaBillingInfo extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'mia_billing_info';
    
    //protected $casts = ['data' => 'array'];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    //public $timestamps = false;

    

    /**
    * Configurar un filtro a todas las querys
    * @return void
    */
    protected static function boot(): void
    {
        parent::boot();
        
        static::addGlobalScope('exclude', function (\Illuminate\Database\Eloquent\Builder $builder) {
            $builder->where('mia_billing_info.deleted', 0);
        });
    }
}