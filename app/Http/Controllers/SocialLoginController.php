<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SocialLoginController extends Controller
{
    //

    public function redirectToProvider(Request $request, $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleCallback(Request $request, $provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
            $finduser = User::where($provider  . "_id", $user->id)->orWhere('email', $user->email)->first();

            if ($finduser) {
                Auth::login($finduser);
                if (is_null($finduser->google_id)) {
                    if ($provider == 'google')
                        $finduser->google_id = $user->id;
                    else
                        $finduser->facebook_id = $user->id;

                    $finduser->save();
                }
                return redirect()->intended('/');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('123456dummy'),
                    'profile_picture' => $user->getAvatar(),
                    'email_verified_at' => now()
                ]);

                Auth::login($newUser);
                return redirect()->intended('/');
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
