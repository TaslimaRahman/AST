<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
    protected $fillable = [
        'title',
        'size',
        'qty',
        'rate',
        'quantity',
        'price',
        'tag',
        'barcode'
    ];
    public function time_tracks() {
        return $this->belongsToMany('App\Time_track')->withPivot('quantity', 'material_status');
    }
}
