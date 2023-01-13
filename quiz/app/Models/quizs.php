<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quizs extends Model
{
    use HasFactory;



    public function answers() {
        return $this->hasMany(answers::class,'idOfQuiz');
    }
    public function questions() {
        return $this->hasMany(questions::class,'idOfQuiz');
    }
    protected $fillable = ['name','quizInfo','image','private_quiz'];
    protected $table = 'quizzes';
}