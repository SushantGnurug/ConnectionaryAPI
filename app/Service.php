<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'service';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'location', 'city', 'country', 'description', 'open_time', 'end_time', 'support_number', 'price', 'available_spots', 'minimum_interval', 'maximum_interval', 'price_per', 'image'];

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
    protected $dates = [];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}