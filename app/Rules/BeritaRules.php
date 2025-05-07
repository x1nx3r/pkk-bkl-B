<?php

namespace App\Rules;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BeritaRules
{
    public static function create(User $user): Response
    {
        // Just check for authentication since management is handled in Filament now
        return Response::allow();
    }

    public static function update(User $user, Berita $berita): Response
    {
        // Only allow the author to edit their own posts
        return $user->id === $berita->user_id
            ? Response::allow()
            : Response::deny(
                "You do not have permission to edit this news article."
            );
    }

    public static function delete(User $user, Berita $berita): Response
    {
        // Only allow the author to delete their own posts
        return $user->id === $berita->user_id
            ? Response::allow()
            : Response::deny(
                "You do not have permission to delete this news article."
            );
    }
}
