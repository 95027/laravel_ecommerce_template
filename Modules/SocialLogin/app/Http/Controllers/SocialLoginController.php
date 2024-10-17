<?php

namespace Modules\SocialLogin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Modules\SocialLogin\Models\SocialLogin;

class SocialLoginController extends Controller
{

    public function googleRedirect()
    {

        return Socialite::driver("google")->redirect();
    }

    public function googleCallback(Request $request)
    {

        $googleUser = Socialite::driver("google")->user();

        $user = User::where("email", $googleUser->email)->first();

        if (!$user) {
            $user = User::create([
                "name" => $googleUser->name,
                "email" => $googleUser->email,
                "password" => Str::random(15),
            ]);
        }

        $socialLogin = SocialLogin::where("user_id", $user->id)->where('provider', 'google')->first();

        if (!$socialLogin) {
            $socialLogin = SocialLogin::create([
                "user_id" => $user->id,
                "provider" => 'google',
                "providerId" => $googleUser->id,
                "token" => $googleUser->token,
                "avatar" => $googleUser->avatar,
            ]);
        } else {
            $socialLogin->update([
                "token" => $googleUser->token,
                "avatar" => $googleUser->avatar,
            ]);
        }

        Auth::login($user);

        return redirect()->route('home');
    }
}
