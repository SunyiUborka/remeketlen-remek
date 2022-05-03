<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['id' , 'thread_id' , 'user_id' , 'title' , 'description'];


    public function comments() {
        return HasMany(Comment::class , 'post_id');
        
        }

        public function userpost() {
            return $this->belongsTo(User::class);
            
            }

}
