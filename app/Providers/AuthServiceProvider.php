<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\user ;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\product' => 'App\Policies\ProductPolicy',
        'App\Models\categories' => 'App\Policies\CategoryPolicy',
        'App\Models\User' => 'App\Policies\UserPolicy',
        'App\Models\role' => 'App\Policies\RolePolicy',
        'App\Models\permission' => 'App\Policies\PermissionPolicy',
        'App\Models\type_attribute' => 'App\Policies\TypeAttributePolicy',
        'App\Models\attribute' => 'App\Policies\AttributePolicy',
        'App\Models\category_post' => 'App\Policies\CategoryPostPolicy',
        'App\Models\post' => 'App\Policies\PostPolicy',
        'App\Models\invioces' => 'App\Policies\InviocePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // product
        $this->defineGateProduct() ;
        // category
        $this->defineGateCategory() ;
        // user
        $this->defineGateUser() ;
        // role
        $this->defineGateRole() ;
        // permissions
        $this->defineGatePermission() ;
        // permissions
        $this->defineGateTypeAttribute() ;
        // attribute
        $this->defineGateAttribute() ;
        // category_post
        $this->defineGateCategoryPost() ;
        //post
        $this->defineGatePost() ;
        //invioce
        $this->defineGateInvioce() ;
    }
    public function defineGateProduct(){
        Gate::define('product_list','App\Policies\ProductPolicy@view');
        Gate::define('product_add','App\Policies\ProductPolicy@create');
        Gate::define('product_edit','App\Policies\ProductPolicy@update');
        Gate::define('product_delete','App\Policies\ProductPolicy@delete');
    }
    public function defineGateCategory(){
        Gate::define('category_list','App\Policies\CategoryPolicy@view');
        Gate::define('category_add','App\Policies\CategoryPolicy@create');
        Gate::define('category_edit','App\Policies\CategoryPolicy@update');
        Gate::define('category_delete','App\Policies\CategoryPolicy@delete');
    }
    public function defineGateUser(){
        Gate::define('user_list','App\Policies\UserPolicy@view');
        Gate::define('user_add','App\Policies\UserPolicy@create');
        Gate::define('user_edit','App\Policies\UserPolicy@update');
        Gate::define('user_delete','App\Policies\UserPolicy@delete');
    }
    public function defineGateRole(){
        Gate::define('role_list','App\Policies\RolePolicy@view');
        Gate::define('role_add','App\Policies\RolePolicy@create');
        Gate::define('role_edit','App\Policies\RolePolicy@update');
        Gate::define('role_delete','App\Policies\RolePolicy@delete');
    }
    public function defineGatePermission(){
        Gate::define('permission_list','App\Policies\PermissionPolicy@view');
        Gate::define('permission_add','App\Policies\PermissionPolicy@create');
        Gate::define('permission_edit','App\Policies\PermissionPolicy@update');
        Gate::define('permission_delete','App\Policies\PermissionPolicy@delete');
    }
    public function defineGateTypeAttribute(){
        Gate::define('type_attribute_list','App\Policies\TypeAttributePolicy@view');
        Gate::define('type_attribute_add','App\Policies\TypeAttributePolicy@create');
        Gate::define('type_attribute_edit','App\Policies\TypeAttributePolicy@update');
        Gate::define('type_attribute_delete','App\Policies\TypeAttributePolicy@delete');
    }
    public function defineGateAttribute(){
        Gate::define('attribute_list','App\Policies\AttributePolicy@view');
        Gate::define('attribute_add','App\Policies\AttributePolicy@create');
        Gate::define('attribute_edit','App\Policies\AttributePolicy@update');
        Gate::define('attribute_delete','App\Policies\AttributePolicy@delete');
    }
    public function defineGateCategoryPost(){
        Gate::define('category_post_list','App\Policies\CategoryPostPolicy@view');
        Gate::define('category_post_add','App\Policies\CategoryPostPolicy@create');
        Gate::define('category_post_edit','App\Policies\CategoryPostPolicy@update');
        Gate::define('category_post_delete','App\Policies\CategoryPostPolicy@delete');
    }
    public function defineGatePost(){
        Gate::define('post_list','App\Policies\PostPolicy@view');
        Gate::define('post_add','App\Policies\PostPolicy@create');
        Gate::define('post_edit','App\Policies\PostPolicy@update');
        Gate::define('post_delete','App\Policies\PostPolicy@delete');
    }
    public function defineGateInvioce(){
        // Gate::define('invioce_list','App\Policies\InviocePolicy@view');
        // Gate::define('invioce_add','App\Policies\InviocePolicy@create');
        Gate::define('invioce_edit','App\Policies\InviocePolicy@update');
        Gate::define('invioce_delete','App\Policies\InviocePolicy@delete');
    }
}
