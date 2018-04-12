<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time_track extends Model
{
    public $timestamps = true;

    const CREATED_AT = 'start_time';
    const UPDATED_AT = 'end_time';

    protected $fillable = [
        'start_time',
        'end_time',
        'employee_id',
        'job_process_id'
    ];

    public function employee () {
        return $this->belongsTo('App\Employee');
    }
    public function job_process () {
        return $this->belongsTo('App\Job_process');
    }
    public function materials() {
        return $this->belongsToMany('App\Material')->withPivot('quantity', 'material_status');
    }

}
