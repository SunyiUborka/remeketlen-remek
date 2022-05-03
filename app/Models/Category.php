<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = "name";
    protected $fillable = ['name'];
    public $timestamps = false;

    public function programs() {
        return $this->belongsToMany(Program::class , 'program_categories');



        }

}
