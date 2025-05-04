<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AdminGatewayController extends Controller
{
    public function show()
    {
        return view("admin.gateway");
    }

    public function verify(Request $request)
    {
        $request->validate([
            "cf-turnstile-response" => "required",
        ]);

        $response = Http::asForm()->post(
            "https://challenges.cloudflare.com/turnstile/v0/siteverify",
            [
                "secret" => config("services.turnstile.secret_key"),
                "response" => $request->input("cf-turnstile-response"),
                "remoteip" => $request->ip(),
            ]
        );

        if ($response->json("success")) {
            // Store in session that CAPTCHA has been completed
            Session::put("admin_captcha_verified", true);
            Session::put("admin_captcha_verified_at", now());

            // Redirect to the actual admin login
            return redirect("/admin");
        }

        return back()->withErrors([
            "captcha" => "CAPTCHA verification failed.",
        ]);
    }
}
