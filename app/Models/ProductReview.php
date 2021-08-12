<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ProductReview extends Model
{
    use HasFactory;
    use SoftDeletes ;
    protected $table = 'product_reviews';
    protected $fillable = ['name','rating','description','email','status','product_id'] ;
}
