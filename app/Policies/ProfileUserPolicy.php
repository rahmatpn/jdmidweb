<?php

namespace App\Policies;

use App\ProfileUser;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfileUserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any profile users.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the profile user.
     *
     * @param  \App\User  $user
     * @param  \App\ProfileUser  $profileUser
     * @return mixed
     */
    public function view(User $user, ProfileUser $profileUser)
    {
        //
    }

    /**
     * Determine whether the user can create profile users.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the profile user.
     *
     * @param  \App\User  $user
     * @param  \App\ProfileUser  $profileUser
     * @return mixed
     */
    public function update(User $user, ProfileUser $profileUser)
    {
        return $user->id == $profileUser->user_id;
    }

    /**
     * Determine whether the user can delete the profile user.
     *
     * @param  \App\User  $user
     * @param  \App\ProfileUser  $profileUser
     * @return mixed
     */
    public function delete(User $user, ProfileUser $profileUser)
    {
        //
    }

    /**
     * Determine whether the user can restore the profile user.
     *
     * @param  \App\User  $user
     * @param  \App\ProfileUser  $profileUser
     * @return mixed
     */
    public function restore(User $user, ProfileUser $profileUser)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the profile user.
     *
     * @param  \App\User  $user
     * @param  \App\ProfileUser  $profileUser
     * @return mixed
     */
    public function forceDelete(User $user, ProfileUser $profileUser)
    {
        //
    }
}
