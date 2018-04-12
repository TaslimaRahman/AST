<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_process extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'title'
    ];
    public function time_tracks () {
        return $this->hasMany('App\Time_track');
    }
}
