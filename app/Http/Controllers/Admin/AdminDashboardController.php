<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {

        $totalUsers = User::count();
        

        $totalRamuan = 0; 
        $totalKunjungan = 0; 
        
        return view('admin.dashboard', [
            'totalUsers' => $totalUsers,
            'totalRamuan' => $totalRamuan,
            'totalKunjungan' => $totalKunjungan
        ]);
    }
}