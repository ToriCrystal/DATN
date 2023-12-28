<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use App\Models\Admin;

class AdminLoginController extends Controller
{

    public function showLoginForm()
    {
        // Check if admin is already authenticated
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.loginAdmin');
    }

    public function login_store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput($request->only('email'));
        }

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }

        // Check if the email exists in the database
        $user = Admin::where('email', $credentials['email'])->first();

        if (!$user) {
            // Email does not exist
            return back()->withErrors(['email' => '* Email không tồn tại.'])
                ->withInput($request->only('email'));
        }

        // Email exists, check if the password is incorrect without using Hash::check
        if ($credentials['password'] !== $user->password) {
            // Incorrect password
            return back()->withErrors(['password' => '* Mật khẩu không đúng.'])
                ->withInput($request->only('email'));
        }

        // Default error message if none of the above conditions are met
        return back()->withErrors(['email' => '* Email không đúng.'])
            ->withInput($request->only('email'));
    }




    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
