<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;

use App\Http\Controllers\Controller;

// class AdminDashboardController extends Controller
// {
//     public function index()
//     {
//         return view('admin.dashboard'); // Pastikan view ini ada
//     }
// }

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Hitung jumlah pengguna
        $totalUsers = User::count();
        
        return view('admin.dashboard', [
            'totalUsers' => $totalUsers
        ]);
    }
}