<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
{
    if (!Auth::check()) {
        return redirect()->route('login');
    }

    
    $search = request('search');
    $kategori = request('kategori');

    // Query tanaman
    $query = Tanaman::query();

    
    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('nama', 'like', '%' . $search . '%')
            ->orWhere('deskripsi', 'like', '%' . $search . '%')
            ->orWhere('manfaat', 'like', '%' . $search . '%');
        });
    }

    
    if ($kategori && $kategori !== 'Semua Kategori') {
        $query->where('kategori', $kategori);
    }
    
    $tanaman = $query->orderBy('created_at', 'desc')->paginate(8);

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