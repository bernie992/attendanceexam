<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamTitle extends Model
{
    use HasFactory;

    public function exam_list(){
        return $this->hasMany(ExamList::class, 'exam_title_id');
    }
}
