<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Invioce extends Model
{
    use HasFactory;
    use SoftDeletes ;
    protected $table = 'invioces';
    protected $fillable = ['name','user_id','email','phone','address','content','total_price','status'] ;

    public function invioce_details(){
        return $this->hasMany(InvioceDetail::class,'invioce_id','id');
    }
}
