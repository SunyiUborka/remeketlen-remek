<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['id' , 'post_id' , 'user_id' , 'text'];

    public function usercomment() {
        return BelongsTo(User::class);
        
        }


}
