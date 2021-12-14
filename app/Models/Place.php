<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    //pluralised function
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
