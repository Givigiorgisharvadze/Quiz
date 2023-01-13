<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    use HasFactory;
    public function quiz() {
        return $this->belongsTo(quizs::class,'idOfQuiz');
    }




    
    public function answers() {
        return $this->hasMany(answers::class,'idOfQuestion');
    }

    protected $fillable = ['question',"image"];
    protected $table = 'questions';
}