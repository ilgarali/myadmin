<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
    
        return view('admin.auth.login');
    }

    public function login(AuthRequest $request)
    {
        $login = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if ($login) {
            return redirect()->route('admin.dashboard');
        }else {
            return redirect()->back()->with('message','Email və ya şifrə səhvdir')->withInput();
        }
    }
}
