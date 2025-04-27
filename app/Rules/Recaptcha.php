<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class Recaptcha implements ValidationRule
{
    public function validate(
        string $attribute,
        mixed $value,
        Closure $fail
    ): void {
        $response = Http::asForm()->post(
            "https://www.google.com/recaptcha/api/siteverify",
            [
                "secret" => env("RECAPTCHA_SECRET_KEY"),
                "response" => $value,
                "remoteip" => request()->ip(),
            ]
        );

        if (!$response->json("success")) {
            $fail("The reCAPTCHA verification failed. Please try again.");
        }
    }
}
