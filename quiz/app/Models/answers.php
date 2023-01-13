<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answers extends Model
{
    use HasFactory;

    public function answer() {
        return $this->belongsTo(questions::class,'idOfQuestion');
    }
    protected $fillable = ['answer','correct_question'];
    protected $table = 'answers';
}