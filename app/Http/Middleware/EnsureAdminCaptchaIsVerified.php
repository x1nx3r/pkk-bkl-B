<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EnsureAdminCaptchaIsVerified
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the CAPTCHA has been verified
        if (!Session::has("admin_captcha_verified")) {
            return redirect()->route("admin.gateway");
        }

        // Optional: Check if verification has expired (e.g., after 30 minutes)
        $verifiedAt = Session::get("admin_captcha_verified_at");
        if ($verifiedAt && now()->diffInMinutes($verifiedAt) > 30) {
            Session::forget([
                "admin_captcha_verified",
                "admin_captcha_verified_at",
            ]);
            return redirect()->route("admin.gateway");
        }

        return $next($request);
    }
}
