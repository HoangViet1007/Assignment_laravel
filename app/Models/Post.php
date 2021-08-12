<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use SoftDeletes ;
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['title','slug','short_description','content','image','status','highlight','category_posts_id'] ;

    public function category_posts(){
        return $this->belongsTo(CategoryPost::class,'category_posts_id','id');
    }
}
