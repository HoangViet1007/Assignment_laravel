<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Permission extends Model
{
    use HasFactory;
    use SoftDeletes ;
    protected $table = 'permissions';
    protected $fillable = ['name','display_name','key_code','parent_id'] ;

    public function permissionsChildrens(){
        return $this->hasMany(Permission::class,'parent_id') ;
    }
}
