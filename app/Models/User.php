<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamp=false;
    

    public function department()
    {
        return $this->hasOne(Department::class);
    }



}

