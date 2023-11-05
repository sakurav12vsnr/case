<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stamp extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'clock_in',
        'clock_out',
        'work_hour'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function rests()
    {
        return $this->hasMany('App\Models\Rest');
    }
}
