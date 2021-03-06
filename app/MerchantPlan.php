<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MerchantPlan extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'oollah_merchant_plans';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

}