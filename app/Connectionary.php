<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connectionary extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'connectionary';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['service_id', 'user_id', 'service_exchange_location', 'service_start_time', 'service_end_time', 'service_provider_gps', 'service_receiver_gps', 'connection_price', 'request'];

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
    protected $casts = ['service_provider_gps' => 'boolean', 'service_receiver_gps' => 'boolean', 'request' => 'boolean'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['service_start_time', 'service_end_time'];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}