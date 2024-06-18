<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();

            // Check if the user exists by google_id or email
            $user = User::where('google_id', $google_user->getId())
                ->orWhere('email', $google_user->getEmail())
                ->first();

            if (!$user) {
                // Generate a random password
                $random_password = Str::random(16);

                // If user does not exist, create a new user with a random password
                $new_user = User::create([
                    'username' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    'password' => bcrypt($random_password)
                ]);
                Auth::login($new_user);
            } else {
                // If user exists, ensure the password is set
                if (!$user->password) {
                    $user->password = bcrypt(Str::random(16));
                    $user->save();
                }
                // If user exists, update the google_id if it's missing
                if (!$user->google_id) {
                    $user->google_id = $google_user->getId();
                    $user->save();
                }
                Auth::login($user);
            }

            return redirect()->intended('home');
        } catch (\Throwable $th) {
            dd('Ada yang salah!', $th->getMessage());
        }
    }
}