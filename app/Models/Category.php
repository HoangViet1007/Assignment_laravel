<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories" ;
    protected $fillable = ['name','slug','status','parent_id'] ;

    public function categoryChils(){
        return $this->hasMany(Category::class,'parent_id','id') ;
    }

    public function products(){
        return $this->hasMany(products::class,'category_id','id') ;
    }
}
