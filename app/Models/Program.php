<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['type_id' , 'author' , 'release_date' , 'title' , 'description'];
  
public function tipus() {
    return $this->belongsTo(Type::class);
}


public function categories() {
return $this->belongsToMany(Category::class , 'program_categories');
}

public function version() {
    return $this->hasMany(Version::class , 'program_id');
}
     

public function maker() {
    return $this->belongsToMany(User::class , 'program_ratings');
}

public function therads() {

return $this->hasMany(Version::class , 'program_id');

}






}
