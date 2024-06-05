<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //Show Login Page Customer
    public function index(){
        // return view('login');        
        if(Auth::check()){
            return redirect()->route('account.dashboard');
        } else{
            return view('login');
        }
    }

    // Authenticate User
    public function authenticate(Request $request){
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if($validator->passes()){

            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){

                // if(Auth::guard('customer')->user()->role != "customer"){
                //     Auth::guard('customer')->logout();
                //     return redirect()->route('account.login')->with('error','You are not authorized to access this page.');
                // }
                return redirect()->route('account.dashboard');
            } else{
                return redirect()->route('account.login')->with('error','Either email or password is incorrect.');
            }
            
        } else{
            return redirect()->route('account.login')
            ->withInput()
            ->withErrors($validator);
        }
    }

    //Show Register Page
    public function register(){
        // return view('register');
        if(Auth::check()){
            return redirect()->route('account.dashboard');
        } else{
            return view('register');
        }
    }

    public function processRegister(Request $request){
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
            'phone' => 'required|min:10',
            'name' => 'required|string|max:255',
            'password_confirmation' => 'required'
        ]);
        
        if($validator->passes()){

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->role = 'customer';
            $user->save();

            return redirect()->route('account.login')->with('success','You have successfully registered.');
            
        } else{
            return redirect()->route('account.register')
            ->withInput()->withErrors($validator);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('account.login');
    }
}