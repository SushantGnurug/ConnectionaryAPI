<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kyc extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kyc';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'permanent_district', 'permanent_municipality_vdc', 'permanent_ward_no', 'permanent_street', 'permanent_house_no', 'permanent_landline_no', 'permanent_mobile_no', 'temporary_district', 'temporary_municipality_vdc', 'temporary_ward_no', 'temporary_street', 'temporary_house_no', 'temporary_landline_no', 'temporary_mobile_no', 'citizenship_no', 'citizenship_issued_district', 'citizenship_issued_date', 'grandfather_name', 'father_name', 'mother_name', 'spouse_name', 'identification_image'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['citizenship_issued_date'];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}