<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'experience';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['experience_id', 'user_id', 'organization_name', 'organization_location', 'job_title', 'description', 'start_date', 'job_level', 'end_date', 'currently_working'];

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
    protected $casts = ['currently_working' => 'boolean'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['start_date', 'end_date'];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}