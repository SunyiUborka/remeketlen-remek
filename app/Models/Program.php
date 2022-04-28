<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['','program_file','program_image','type_id' , 'developer' , 'release_date' , 'name' , 'description'];
  
public function tipus() {
    return $this->belongsTo(Type::class);
}


public function categories() {
return $this->belongsToMany(Category::class , 'program_categories');
}




public function maker() {
    return $this->belongsToMany(User::class , 'program_ratings');
}

public function therads() {

return $this->hasMany(Thread::class , 'program_id');

}






}
