<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $fillable = ['program_id', 'user_id', 'program_file' , 'version_number', 'release_date'];

    public function program() {
        return $this->belongsTo(Program::class);
    }

    public function uploader(){
        return BelongsTo(User::class);
    }

}
