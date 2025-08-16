@extends('layouts.user')

@section('title', 'Tanaman Favorit')

@section('content')
<div class="container-fluid px-4 py-3">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0">Tanaman Favorit</h2>
        <a href="{{ route('home') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Kembali ke Dashboard
        </a>
    </div>

    @if($favorites->count() > 0)
        <div class="row g-4">
            @foreach($favorites as $item)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm overflow-hidden position-relative">
                    <!-- ... (sama seperti card di dashboard) ... -->
                    @include('user.partials.plant-card', ['item' => $item])
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="d-flex justify-content-center mt-5">
            {{ $favorites->links() }}
        </div>
    @else
        <div class="text-center py-5 bg-light rounded-3">
            <i class="fas fa-heart-broken fa-4x text-danger mb-4"></i>
            <h4 class="mb-3">Belum ada tanaman favorit</h4>
            <p class="text-muted mb-4">Tambahkan tanaman ke favorit untuk melihatnya di sini</p>
            <a href="{{ route('home') }}" class="btn btn-primary">
                Jelajahi Tanaman
            </a>
        </div>
    @endif
</div>
@endsection