<?php

namespace App\Rules;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BeritaRules
{
    public static function create(User $user): Response
    {
        return $user->hasAnyRole(["admin", "editor"])
            ? Response::allow()
            : Response::deny(
                "You do not have permission to create news articles."
            );
    }

    public static function update(User $user, Berita $berita): Response
    {
        return $user->hasRole("admin") || $user->id === $berita->user_id
            ? Response::allow()
            : Response::deny(
                "You do not have permission to edit this news article."
            );
    }

    public static function delete(User $user, Berita $berita): Response
    {
        return $user->hasRole("admin") || $user->id === $berita->user_id
            ? Response::allow()
            : Response::deny(
                "You do not have permission to delete this news article."
            );
    }
}
