<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function classes(){
        return $this->belongsTo(Classes::class, 'teacher_id');
    }

    protected $fillable = [
        "name",
        "cnic",
        "email",
        "images",
        "mobile",
        "user_id",
    ];

        public function users(){
            return $this->belongsTo(User::class);
        }


}
