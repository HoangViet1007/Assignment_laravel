<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ProductTag extends Model
{
    use SoftDeletes ;
    use HasFactory;
    protected $table = 'product_tag' ;
    protected $fillable = ['product_id','tag_id'] ;
}
