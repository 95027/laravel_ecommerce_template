<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Modules\SocialLogin\Models\SocialLogin;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        notify()->success('Laravel Notify is awesome!');
        return redirect()->intended(route('home', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $googleToken = Auth::user()->serviceProvider->where('provider', 'google')->first()->token;

        if ($googleToken) {

            $socialLogin = SocialLogin::where('token', $googleToken)->first();

            if ($socialLogin) {
                $socialLogin->update([
                    'token' => null,
                ]);
            }

            $client = new \GuzzleHttp\Client();

            $client->post('https://accounts.google.com/o/oauth2/revoke', [
                'query' => ['token' => $googleToken],
            ]);
        }

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
