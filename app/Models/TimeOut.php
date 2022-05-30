<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Time;

class TimeOut extends Model
{
    use HasFactory;
    protected $table = 'time_outs';

    public function time_rec(){
        return $this->hasMany(Time::class, 'time_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
