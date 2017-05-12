<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        if ((bool)$user->admin->admin == true) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the all admin user list.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function list(User $user)
    {
        return (bool)$user->admin->admin == true;
    }

    /**
     * Determine whether the user can view the admin.
     *
     * @param  \App\User  $user
     * @param  \App\User  $admin
     * @return mixed
     */
    public function view(User $user, User $admin)
    {
        return $user->admin->username === $admin->admin->username;
    }

    /**
     * Determine whether the user can create admins.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return (bool)$user->admin->admin == true;
    }

    /**
     * Determine whether the user can update the admin.
     *
     * @param  \App\User  $user
     * @param  \App\User  $admin
     * @return mixed
     */
    public function update(User $user, User $admin)
    {
        return $user->admin->username === $admin->admin->username;
    }

    /**
     * Determine whether the user can delete the admin.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function delete(User $user)
    {
        return (bool)$user->admin->admin == true;
    }
}
