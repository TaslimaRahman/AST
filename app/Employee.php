<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //

    public $timestamps = false;
    protected $fillable = [
        'identification',
        'first_name',
        'middle_name',
        'last_name',
        'street',
        'city','province',
        'postal_code',
        'phone_number',
        'email',
        'position'
    ];
    public function time_tracks() {
        return $this->hasMany('App\Time_Track');
    }
    public function job_processes() {
        return $this->hasManyThrough('App\Job_process','App\Time_track');
    }
}
