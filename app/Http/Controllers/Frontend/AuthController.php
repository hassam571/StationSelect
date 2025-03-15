<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    //
    public function showRegisterForm() {
        return view('frontend.auth.register');
    }

    public function register(Request $request)
{
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:5|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // dd($user);
    // Log in the user after registration if you want
    Auth::guard('web')->login($user);

    return redirect()->route('frontend.index');
}


    public function showLoginForm() {
        return view('frontend.auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:5'
        ]);
        
        $rememberMe = false;
        if (isset($request->remember) && $request->remember == "on"){
            $rememberMe = true;
        }

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $rememberMe)) {

            return redirect()->route('frontend.index');

        }
        else {
            Flash::error("Email and password are invalid!");
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }
    }

    public function logout(Request $request) {
        Auth::guard('web')->logout();
        $request->session()->flush();
        return redirect()->route('frontend.login');
    }
    
    public function showForgetPasswordForm() {
        return view('frontend.auth.forgetPassword');
    }
    
    public function forgetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
    
        $email = $request->email;
        $user = User::where('email', $email)->first();
    
        if ($user) {

            $status = Password::sendResetLink(['email' => $request->email]);
    
            return $status === Password::RESET_LINK_SENT
                ? view('frontend.auth.forgetPassword',['message' => 'Reset link sent to your email.'])
                : view('frontend.auth.forgetPassword',['message' => 'Failed to send reset link.'], 500);
        }
    
        return  view('frontend.auth.forgetPassword',['message' => 'User not found.']);
    }
    
    public function resetPasswordForm($token)
    {
        return view('frontend.auth.resetPassword', ['token' => $token]);
    }

    
   public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|confirmed',
            'token' => 'required',
        ]);

        $email = $request->email;
        $user = User::where('email', $email)->first();

        if ($user) {
            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function ($user, $password) {
                    $user->forceFill([
                        'password' => Hash::make($password),
                    ])->save();
                }
            );

            if ($status === Password::PASSWORD_RESET) {
                return redirect()->route('frontend.login')->with('success', 'Password reset successfully.');
            } else {
                return back()->withErrors(['email' => 'Failed to reset password.']);
            }
        }

        return back()->withErrors(['email' => 'User not found.']);
    }

}
