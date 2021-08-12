<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ProductOption extends Model
{
    use SoftDeletes ;
    use HasFactory;
    protected $table = 'product_options' ;
    protected $fillable = ['option_name','option_value','image','price','sale','amount','is_main','product_id'] ;

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
