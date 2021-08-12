<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Websetting extends Model
{
    use SoftDeletes ;
    use HasFactory;
    protected $table = 'websettings' ;
    protected $fillable = ['name','slug','image','email','address','phone','description','status'] ;
}
