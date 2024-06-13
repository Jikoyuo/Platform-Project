<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
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

            $user = User::where('google_id',$google_user->getId())->first();

            if(!$user){
                $new_user = User::create([
                    
                ]);
            }
                } catch (\Throwable $th) {
            //throw $th;
        }
        
    }

}
