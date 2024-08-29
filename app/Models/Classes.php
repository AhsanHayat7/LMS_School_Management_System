<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $fillable = ['class','student_id','section','teacher_id'];


    public function students(){
        return $this->belongsTo(Student::class);
    }

    public function teachers(){
        return $this->belongsTo(Teacher::class);
    }
}
