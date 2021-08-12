<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TypeAttribute extends Model
{
    use SoftDeletes ;
    use HasFactory;
    protected $table = 'type_attributes' ;
    protected $fillable = ['name','slug','status'] ;

    public function atttributes(){
        return $this->hasMany(Attribute::class,'id_type','id') ;
    }
}
