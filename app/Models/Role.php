<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Role extends Model
{

    use HasFactory;
    use SoftDeletes ;
    protected $table = "roles";
    protected $fillable = ['name','display_name','status'] ;

    public function permissions(){
        return $this->belongsToMany(Permission::class,'permission_role','role_id','permission_id') ;
    }
}
