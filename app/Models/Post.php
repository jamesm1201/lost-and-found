<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function item(){
        return $this->hasOne(Item::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
    public function place(){
        return $this->hasOne(Place::class);
    }

}
