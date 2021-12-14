<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //after swapping relations check models
    public function item(){
        return $this->belongsTo(Item::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
    public function place(){
        return $this->belongsTo(Place::class);
    }

}
