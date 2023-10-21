<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;


class GoogleLoginController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            return response()->json($user);
        } catch (Exception $e) {
            return $e;
        }

    }
}
