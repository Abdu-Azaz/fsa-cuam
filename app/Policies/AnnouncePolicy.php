<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Announce;
use App\Models\User;

class AnnouncePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view-any Announce');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Announce $announce): bool
    {
        return $user->can('view Announce');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create Announce');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Announce $announce): bool
    {
        return $user->can('update Announce');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Announce $announce): bool
    {
        return $user->can('delete Announce');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Announce $announce): bool
    {
        return $user->can('{{ restorePermission }}');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Announce $announce): bool
    {
        return $user->can('{{ forceDeletePermission }}');
    }
}
