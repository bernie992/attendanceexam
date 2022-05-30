<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TimeOut;

class Time extends Model
{
    protected $table = 'times';

    public function timeout_res(){
        return $this->belongsTo(TimeOut::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
