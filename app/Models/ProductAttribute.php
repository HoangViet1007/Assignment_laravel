<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ProductAttribute extends Model
{
    use SoftDeletes ;
    use HasFactory;
    protected $table = 'product_attributes' ;
    protected $fillable = ['product_id','attribute_id'] ;

    public function attribute_product(){
        return $this->belongsTo(Attribute::class, 'attribute_id','id');
    }
}
