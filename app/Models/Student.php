<?php

namespace App\Models;

use FFI;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "roll_no",
        "email",
        "photo",
        "address",
        "user_id",
        "class",
        "section"];

        public function  user(){
            return  $this->belongsTo(User::class);
        }

        public function classes(){
             return $this->hasMany(Classes::class);
            }

}
