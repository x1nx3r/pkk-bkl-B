<?php

namespace App\Rules;

use App\Models\Kegiatan;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class KegiatanRules
{
    public static function view(User $user, Kegiatan $kegiatan): Response
    {
        return Response::allow();
    }

    public static function viewAny(?User $user): Response
    {
        return Response::allow();
    }

    public static function create(User $user): Response
    {
        return $user->hasAnyRole(["admin", "editor"])
            ? Response::allow()
            : Response::deny(
                "You do not have permission to create activity records."
            );
    }

    public static function update(User $user, Kegiatan $kegiatan): Response
    {
        return $user->hasRole("admin") || $user->id === $kegiatan->user_id
            ? Response::allow()
            : Response::deny(
                "You do not have permission to edit this activity."
            );
    }

    public static function delete(User $user, Kegiatan $kegiatan): Response
    {
        return $user->hasRole("admin") || $user->id === $kegiatan->user_id
            ? Response::allow()
            : Response::deny(
                "You do not have permission to delete this activity."
            );
    }
}
