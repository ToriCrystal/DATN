<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('page.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);
    
        $credentials = $request->only('email');
    
        $user = User::where('email', $credentials['email'])->first();
    
        if (!$user) {
            return back()->withInput($credentials)->withErrors(['email' => '* Địa chỉ email không tồn tại trong hệ thống.']);
        }
    
        $recentlySent = Cache::has('password_reset_sent_' . $user->id);
    
        if ($recentlySent) {
            $remainingTime = Cache::get('password_reset_sent_' . $user->id)->addMinutes(1)->diffForHumans(now(), true); // Retry allowed after 1 minute
            return back()->withInput($credentials)->withErrors(['email' => "* Đã gửi yêu cầu đặt lại mật khẩu. Vui lòng đợi $remainingTime trước khi thử lại."]);
        }
    
        $status = Password::sendResetLink($credentials);
    
        if ($status == Password::RESET_LINK_SENT) {
            $expirationTime = Carbon::now()->addMinutes(30);
            Cache::put('password_reset_sent_' . $user->id, $expirationTime, $expirationTime);
        }

        return $status == Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withInput($credentials)->withErrors(['email' => '* Xin lỗi, đã xảy ra lỗi. Vui lòng thử lại sau.']);
    }
    
}
