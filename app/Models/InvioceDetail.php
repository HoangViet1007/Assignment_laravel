<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class InvioceDetail extends Model
{
    use HasFactory;
    use SoftDeletes ;
    protected $table = 'invioce_details';
    protected $fillable = ['invioce_id','product_id','image','price','quantity','option_id','attribute_id'];

    public function product_options(){
        return $this->belongsTo(ProductOption::class,'option_id','id') ;
    }
    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }

    public function attributes(){
        return $this->belongsTo(Attribute::class,'attribute_id') ;
    }
    public function invioces(){
        return $this->belongsTo(Invioce::class,'invioce_id');
    }

}
