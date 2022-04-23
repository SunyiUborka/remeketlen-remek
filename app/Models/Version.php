<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{

    public function program() {
        return BelgonsTo(Program::class);
    }

public function uploader() {
    return BelongsTo(User::class);
}

}
