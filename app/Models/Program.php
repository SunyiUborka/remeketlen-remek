<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['type_id' , 'author' , 'release_date' , 'title' , 'description'];
  
public function tipus() {
    return BelongsTo(Type::class);
}


public function categories() {
return BelongsToMany(Category::class , 'program_categories');

}

public function version() {
    return HasMany(Version::class , 'program_id');
}
     

public function maker() {
    return BelongsToMany(User::class , 'program_ratings');
}

public function therads() {

return HasMany(Version::class , 'program_id');

}






}
