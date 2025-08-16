<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FavoriteController;

class FavoriteController extends Controller
{
    public function toggleFavorite(Tanaman $tanaman)
    {
        $user = Auth::user();
        $isFavorited = $user->favorites()->where('tanaman_id', $tanaman->id)->exists();

        if ($isFavorited) {
            $user->favorites()->detach($tanaman->id);
            $message = 'Tanaman dihapus dari favorit.';
        } else {
            $user->favorites()->attach($tanaman->id);
            $message = 'Tanaman ditambahkan ke favorit.';
        }

        return response()->json([
            'message' => $message,
            'is_favorited' => !$isFavorited,
            'favorites_count' => $user->favorites()->count()
        ]);
    }

    public function index()
    {
        $favorites = Auth::user()->favorites()->paginate(10);
        return view('user.favorites', compact('favorites'));
    }
}