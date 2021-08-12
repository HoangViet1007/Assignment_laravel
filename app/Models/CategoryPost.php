<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CategoryPost extends Model
{
    use SoftDeletes ;
    use HasFactory;
    protected $table = 'category_posts';
    protected $fillable = ['name','slug','status'] ;

    public function posts(){
        return $this->hasMany(Post::class, 'category_posts_id','id') ;
    }
}
