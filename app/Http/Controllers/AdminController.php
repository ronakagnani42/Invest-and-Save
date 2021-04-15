<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('adminDashboard');
        }

        if($request->email && $request->password){
            $email = $request->email;
            $password = $request->password;

            if (Auth::attempt(['email' => $email, 'password' => $password, 'type' => 1])) {
               return redirect()->route('adminDashboard');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        $error = 'Something went wrong!';

        return view('auth.admin-login', compact('error'));
    }

    public function loginPage(Request $request)
    {
        return view('auth.admin-login');
    }

    public function index(Request $request)
    {
        if (Auth::check()) {
            if(Auth::user()->type == 1){
                $users = User::where('type', 2)->count();
                $activeUsers = User::where('type', 2)->where('last_active_at', '>', \Carbon\Carbon::now()->subDays(7))->count();
                $onlineUsers = User::where('type', 2)->where('last_active_at', '>', \Carbon\Carbon::now()->subMinutes(1))->count();
                return view('admin', compact('users', 'activeUsers', 'onlineUsers'));
            }
        }

        return redirect()->route('admin-login');
    }

    public function pingUser()
    {
        if(Auth::check()) {
            if(Auth::user()->type == 2){
                User::where('id', Auth::user()->id)->update(['last_active_at' => \Carbon\Carbon::now()]);
            }
        }
    }
}
