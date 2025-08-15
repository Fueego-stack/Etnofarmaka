<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Periksa apakah user sudah login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Ambil data tanaman terbaru
        $tanaman = Tanaman::orderBy('created_at', 'desc')->take(6)->get();

        // Tentukan view berdasarkan role
        $role = Auth::user()->role;

        if ($role === "user") {
            return view('user.dashboard', compact('tanaman'));
        } elseif ($role === "admin") {
            return view('admin.dashboard', compact('tanaman')); 
        } else {
            abort(403, 'Role tidak dikenali.');
        }
    }
}