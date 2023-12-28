<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User; // Make sure to import the User model

use Illuminate\Support\Facades\Validator;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('page.login');
    }

    /**
     * Handle an incoming authentication request.
     */

    public function store(Request $request)
    {
        // Define custom validation rules and messages
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Manual authentication
        $credentials = $request->only('email', 'password');

        // Check if the user exists and the status is 1
        $user = User::where('email', $request->email)->first();

        if ($user && $user->status == 1 && Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::HOME);
        }

        // Trường hợp mật khẩu không đúng nhưng email đúng
        if ($user && $user->status == 1) {
            return redirect()->back()->withErrors(['password' => '* Mật khẩu không đúng'])->withInput();
        }

        return redirect()->back()->withErrors(['email' => '* Email không đúng hoặc tài khoản chưa được kích hoạt'])->withInput();
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->back();
    }
}
