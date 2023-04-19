<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class UserSessionController extends Controller
{
    public function getAllSession(){
        $sessions = Session::query()->join('users', 'sessions.user_id', '=', 'user_id')
            ->select("sessions.*", 'users.name as username', 'users.email')->get();
        return view('session.index', compact('sessions'));
    }

    public function logoutAll(Request $request){
        auth()->user()->sessions()->delete();
        $request->session()->flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Auth::logout();
        return redirect('login');
//        auth()->user()->logout();

    }

    public function logoutAllNotOne()
    {

    }
}
