<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Http\Request;
// use App\Http\Controllers\Str;
use Illuminate\Support\Str;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordManager extends Controller
{
    function forgetPassword(){
        return view('forget-password');
    }
    
    function forgetPasswordPost(Request $request){
        $request->validate([
            'email' => "required|email|exists:users"
        ]);

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send("emails.forget-password", ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject("Reset Password");
        });

        return redirect()->to(route("account.forget.password"))->with("success", "If a matching account is found, you'll receive a password reset email soon.
                                                                    Click the link found in that email to reset your password.");
    }
    
    function resetPassword($token){
        return view('new-password', compact('token'));
    }

    function ResetPasswordPost(Request $request){
        $request->validate([
            "email" => "required|email|exists:users",
            "password" => "required|string|confirmed",
            "password_confirmation" => "required",
        ]);

        $updatePassword = DB::table('password_reset_tokens')
            ->where([
                "email" => $request->email,
                "token" => $request->token,
            ])->first();

            if(!$updatePassword){
            return redirect()->to(route('account.reset.password'))->with("error", "Invalid");
            }

        User::where("email", $request->email)
            ->update(["password" => Hash::make($request->password)]);

        DB::table("password_reset_tokens")->where(["email" => $request->email])->delete();

        return redirect()->to(route('account.login'))->with("success", "Password Reset Successfully");
    }
}