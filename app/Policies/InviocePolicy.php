<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Invioce;
use Illuminate\Auth\Access\HandlesAuthorization;

class InviocePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Invioce  $invioces
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user)
    {

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Invioce  $invioces
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.acsess.invioce.invioce_edit')) ;

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Invioce  $invioces
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.acsess.invioce.invioce_delete')) ;

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Invioce  $invioces
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Invioce $invioces)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Invioce  $invioces
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Invioce $invioces)
    {
        //
    }
}
