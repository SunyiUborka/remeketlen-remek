<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $primaryKey = "name";
    protected $fillable = ['name'];
    public $timestamps = false;

    public function programs() {
        return $this->hasMany(Program::class , 'program_id');
        
        }

}
