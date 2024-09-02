<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $fillable = ['class','student_id','section','teacher_id'];


    public function students(){
        return $this->hasMany(Student::class, 'role_id');
    }

    public function teachers(){
        return $this->hasMany(Teacher::class, 'role_id');
    }
}
