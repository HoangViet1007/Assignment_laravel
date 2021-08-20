<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Factory;
use App\Models\Role;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;
    use SoftDeletes ;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'phone',
        'address',
        'gender',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany(Role::class,'user_role','user_id','role_id') ;
    }

    public function checkPermissionAccess($permissionCheck){
        // lấy được tất cả các quyền của user
        $roles = auth()->user()->roles;
        foreach ($roles as $role){
            $permission = $role->permissions;
            // lấy za tất cả permission và check xem cái $permissionCheck có trong đó hay ko . Nếu có thì retuen true
            if($permission->contains('key_code',$permissionCheck) == true){
                return true ;
            }

        }
        return false ;
        // so sách giá trị đụa vào của route hiện tại xem có tồn tại trong các quyền lấy được hay ko

    }

}
