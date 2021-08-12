<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Attribute extends Model
{
    use SoftDeletes ;
    use HasFactory;
    protected $table = 'attributes' ;
    protected $fillable = ['name','slug','value','id_type','status'] ;
}
