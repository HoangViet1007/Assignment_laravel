<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes ;
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name','slug','title','short_description','description','status','highlight','category_id','user_id','parent_id'] ;

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id') ;
    }

    public function options(){
        return $this->hasMany(ProductOption::class,'product_id','id') ;
    }

    public function tags(){
        return $this->belongsToMany(Tag::class,'product_tag','product_id','tag_id') ;
    }

    public function attributes(){
        return $this->belongsToMany(Attribute::class,'product_attributes','product_id','attributes_id') ;
    }

    public function products(){
        return $this->hasMany(Product::class,'parent_id','id') ;
    }

    public function product_reviews(){
        return $this->hasMany(ProductReview::class,'product_id','id') ;
    }

}
