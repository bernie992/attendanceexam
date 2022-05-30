<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamList extends Model
{
    use HasFactory;

    public function exam_title(){
        return $this->belongsTo(ExamTitle::class);
    }
}
