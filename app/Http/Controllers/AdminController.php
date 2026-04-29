<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    public function dashboard()
    {
        $totalLaporans = \App\Models\Laporan::count();
        $pending = \App\Models\Laporan::where('status', 'pending')->count();
        $diproses = \App\Models\Laporan::where('status', 'diproses')->count();
        $selesai = \App\Models\Laporan::where('status', 'selesai')->count();
        
        $recentLaporans = \App\Models\Laporan::with('user')->latest()->take(5)->get();
        
        $totalUsers = \App\Models\User::count();
        $adminCount = \App\Models\User::where('role', 'admin')->count();
        $userCount = \App\Models\User::where('role', 'user')->count();
        
        return view('admin.dashboard', compact(
            'totalLaporans', 'pending', 'diproses', 'selesai',
            'recentLaporans', 'totalUsers', 'adminCount', 'userCount'
        ));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }
}

