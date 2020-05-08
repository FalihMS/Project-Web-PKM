<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pkm extends Model
{

    public $fillable = [
        'user_id',
        'title',
        'type',
        'lecturer_id',
        'class',
        'member_1_nim',
        'member_1_nama',
        'member_1_email',
        'member_1_phone',
        'member_2_nim',
        'member_2_nama',
        'member_2_email',
        'member_2_phone'
    ];
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function lecturer()
    {
        return $this->belongsTo('App\lecturer');
    }
}
