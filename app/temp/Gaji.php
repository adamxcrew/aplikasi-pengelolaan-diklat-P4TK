<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    protected $table = "gaji";

    protected $fillable = ['user_id','periode_gaji'];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
