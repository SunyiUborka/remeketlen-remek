<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = ['id' , 'program_id' , 'title' , 'description'];


    public function program() {
        return BelongsTo(Program::class , 'prog_cat');
        
        }

}
