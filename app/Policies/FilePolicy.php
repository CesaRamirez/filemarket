<?php

namespace App\Policies;

use App\File;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FilePolicy
{
    use HandlesAuthorization;

    /**
     * Touch policy.
     *
     * @param \App\User $user
     *
     * @return bool
     */
    public function touch(User $user, File $file)
    {
        return $user->id === $file->user_id;
    }
}
