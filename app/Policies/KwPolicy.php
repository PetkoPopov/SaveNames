<?php

namespace App\Policies;

use App\Models\Kw;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class KwPolicy
{
    use HandlesAuthorization;

//    public function __construct() {
//        dd("IN KW POLICY");
//    }
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
     * @param  \App\Models\Kw  $kw
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Kw $kw)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->id === 2 ; 
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Kw  $kw
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Kw $kw)
    {
        return $user->id === 2;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Kw  $kw
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Kw $kw)
    {
        
        return $user->id === 2;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Kw  $kw
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Kw $kw)
    {
        
        return $user->id === 2;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Kw  $kw
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Kw $kw)
    {
        
        return $user->id === 2;
    }
}
