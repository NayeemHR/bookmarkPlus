<?php

namespace App\Policies;

use App\Models\Bookmark;
use App\Models\User;

class BookmarkPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {

    }

    public function update(User $user, Bookmark $bookmark)
    {
        return $user->id === $bookmark->user_id;
    }

    public function delete(User $user, Bookmark $bookmark)
    {
        return $user->id === $bookmark->user_id;
    }

}
