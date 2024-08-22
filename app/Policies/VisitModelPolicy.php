<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\VisitModel;
use App\Models\User;

class VisitModelPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, VisitModel $visitModel): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, VisitModel $visitModel): bool
    {

        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, VisitModel $visitModel): bool
    {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, VisitModel $visitModel): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, VisitModel $visitModel): bool
    {
        //
    }
}
