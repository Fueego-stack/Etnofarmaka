@extends('layouts.user')

@section('title', 'Dashboard User')

@section('content')

<div class="container-fluid px-4 py-3">
    <!-- Welcome Banner -->
    <div class="welcome-banner bg-gradient-primary rounded-4 shadow-sm p-4 mb-4 text-white">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2 class="mb-1">Selamat Datang, {{ auth()->user()->name }} 👋</h2>
                <p class="mb-0 opacity-75">Senang melihatmu kembali! Jelajahi tanaman herbal berkhasiat kami.</p>
            </div>
            <div class="d-none d-md-block">
                <i class="fas fa-seedling fa-3x opacity-25"></i>
            </div>
        </div>
    </div>

    <!-- Search & Filter Section -->
    <div class="search-filter mb-4">
        <form action="{{ route('home') }}" method="GET">
            <div class="row g-3">
                <div class="col-md-8">
                    <div class="input-group shadow-sm">
                        <span class="input-group-text bg-white border-0">
                            <i class="fas fa-search text-muted"></i>
                        </span>
                        <input type="text" name="search" class="form-control border-0 py-3" 
                            placeholder="Cari tanaman herbal..." value="{{ request('search') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <select class="form-select py-3 shadow-sm border-0" name="kategori">
                        <option value="">Semua Kategori</option>
                        <option value="Obat Demam" {{ request('kategori') == 'Obat Demam' ? 'selected' : '' }}>Obat Demam</option>
                        <option value="Pereda Nyeri" {{ request('kategori') == 'Pereda Nyeri' ? 'selected' : '' }}>Pereda Nyeri</option>
                        <option value="Kecantikan" {{ request('kategori') == 'Kecantikan' ? 'selected' : '' }}>Kecantikan</option>
                        <option value="Pencernaan" {{ request('kategori') == 'Pencernaan' ? 'selected' : '' }}>Pencernaan</option>
                    </select>
                </div>
            </div>
            <div class="mt-3 text-end">
                <button type="submit" class="btn btn-primary px-4 py-2">
                    <i class="fas fa-search me-2"></i>Cari
                </button>
                @if(request()->has('search') || request()->has('kategori'))
                    <a href="{{ route('home') }}" class="btn btn-outline-secondary px-4 py-2 ms-2">
                        Reset
                    </a>
                @endif
            </div>
        </form>
    </div>

    <!-- Tanaman Terbaru Section -->
    <div class="section-header mb-4">
        <h3 class="fw-bold mb-2">Tanaman Terbaru</h3>
        <p class="text-muted">Jelajahi koleksi tanaman herbal terbaru kami</p>
    </div>

    <div class="row g-4">
        @if($tanaman->count() > 0)
            @foreach($tanaman as $item)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm overflow-hidden position-relative">
                    <!-- Image -->
                    @if($item->foto)
                    <div class="card-img-top position-relative overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('storage/' . $item->foto) }}" 
                            class="img-fluid w-100 h-100 object-fit-cover"
                            alt="{{ $item->nama }}">
                        <div class="card-img-overlay d-flex flex-column justify-content-end p-3" 
                            style="background: linear-gradient(transparent 40%, rgba(0,0,0,0.7))">
                            <span class="badge bg-success bg-opacity-75 mb-2">
                                {{ $item->asal_daerah }}
                            </span>
                        </div>
                    </div>
                    @else
                    <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                        <i class="fas fa-leaf fa-4x text-muted opacity-25"></i>
                    </div>
                    @endif

                    <!-- Card Body -->
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="card-title fw-bold mb-1">{{ $item->nama }}</h5>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="rating">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                    </div>
                                    <span class="ms-2 small text-muted">(42)</span>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-outline-secondary rounded-circle favorite-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        
                        <p class="card-text text-muted small mb-3">
                            {{ Str::limit($item->deskripsi, 120) }}
                        </p>
                        
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div class="d-flex">
                                <span class="badge bg-light text-dark me-2">
                                    <i class="fas fa-tag me-1"></i> {{ $item->kategori ?: 'Obat' }}
                                </span>
                            </div>
                            <button class="btn btn-sm btn-primary view-detail"
                                    data-bs-toggle="modal"
                                    data-bs-target="#detailModal"
                                    data-id="{{ $item->id }}"
                                    data-nama="{{ $item->nama }}"
                                    data-deskripsi="{{ $item->deskripsi }}"
                                    data-manfaat="{{ $item->manfaat }}"
                                    data-asal_daerah="{{ $item->asal_daerah }}"
                                    data-foto="{{ $item->foto ? asset('storage/' . $item->foto) : '' }}"
                                    data-kategori="{{ $item->kategori }}">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-12">
                <div class="text-center py-5 bg-light rounded-3">
                    <i class="fas fa-seedling fa-4x text-muted mb-4"></i>
                    <h4 class="mb-3">Belum ada tanaman tersedia</h4>
                    <p class="text-muted mb-4">Admin belum menambahkan tanaman herbal. Silakan cek kembali nanti.</p>
                </div>
            </div>
        @endif
    </div>

    <!-- Pagination -->
    @if($tanaman->count() > 0)
    <div class="d-flex justify-content-center mt-5">
        {{ $tanaman->appends(request()->query())->links() }}
    </div>
    @endif

    <!-- Toga Favorit Section -->
    <div class="section-header mt-5 mb-4">
        <h3 class="fw-bold mb-2">Toga Favoritmu</h3>
        <p class="text-muted">Tanaman yang sering kamu lihat</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="text-center py-4">
                        <i class="fas fa-heart fa-3x text-danger mb-3"></i>
                        <h5 class="fw-bold mb-2">Tanaman Favorit</h5>
                        <p class="text-muted mb-4">Tambahkan tanaman ke favorit untuk melihatnya di sini</p>
                        <button class="btn btn-outline-primary">
                            Jelajahi Tanaman
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="text-center py-4">
                        <i class="fas fa-history fa-3x text-info mb-3"></i>
                        <h5 class="fw-bold mb-2">Riwayat</h5>
                        <p class="text-muted mb-4">Lihat tanaman yang pernah kamu kunjungi</p>
                        <button class="btn btn-outline-primary">
                            Lihat Riwayat
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="text-center py-4">
                        <i class="fas fa-bookmark fa-3x text-warning mb-3"></i>
                        <h5 class="fw-bold mb-2">Koleksi</h5>
                        <p class="text-muted mb-4">Kelompokkan tanaman sesuai kebutuhanmu</p>
                        <button class="btn btn-outline-primary">
                            Buat Koleksi
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Detail Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-4 overflow-hidden">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title">Detail Tanaman</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <div class="position-relative" style="height: 300px; overflow: hidden; border-radius: 16px;">
                            <img id="detailModalImage" src="" class="img-fluid w-100 h-100 object-fit-cover" alt="Tanaman">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="fw-bold mb-3" id="detailModalName"></h4>
                        
                        <div class="mb-3">
                            <h6 class="text-muted mb-2">Asal Daerah</h6>
                            <p id="detailModalAsal" class="mb-0"></p>
                        </div>
                        
                        <div class="mb-3">
                            <h6 class="text-muted mb-2">Kategori</h6>
                            <p id="detailModalKategori" class="mb-0"></p>
                        </div>
                        
                        <div class="mb-3">
                            <h6 class="text-muted mb-2">Deskripsi</h6>
                            <p id="detailModalDeskripsi" class="mb-0"></p>
                        </div>
                        
                        <div class="mb-3">
                            <h6 class="text-muted mb-2">Manfaat</h6>
                            <p id="detailModalManfaat" class="mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<style>
    .welcome-banner {
        background: linear-gradient(135deg, #38b2ac, #319795);
    }
    
    .card {
        transition: all 0.3s ease;
        border-radius: 16px;
        overflow: hidden;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 20px rgba(0,0,0,0.1);
    }
    
    .card-img-top {
        transition: transform 0.5s ease;
    }
    
    .card:hover .card-img-top {
        transform: scale(1.05);
    }
    
    .favorite-btn {
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .favorite-btn:hover {
        background-color: #f8d7da;
        color: #dc3545;
    }
    
    .rating {
        font-size: 0.9rem;
    }
    
    .section-header {
        position: relative;
        padding-bottom: 10px;
    }
    
    .section-header::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #38b2ac, #319795);
        border-radius: 2px;
    }
    
    .pagination .page-item .page-link {
        border-radius: 10px;
        margin: 0 5px;
        border: none;
        color: #4a5568;
    }
    
    .pagination .page-item.active .page-link {
        background: linear-gradient(135deg, #38b2ac, #319795);
        color: white;
    }

    .pagination {
        display: flex;
        padding-left: 0;
        list-style: none;
        border-radius: 0.375rem;
    }

    .page-item:first-child .page-link {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .page-item:last-child .page-link {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .page-item.active .page-link {
        background: linear-gradient(135deg, #38b2ac, #319795);
        color: white;
        border-color: #38b2ac;
    }

    .page-link {
        position: relative;
        display: block;
        padding: 0.5rem 0.75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #38b2ac;
        background-color: #fff;
        border: 1px solid #dee2e6;
        transition: all 0.3s ease;
    }

    .page-link:hover {
        color: #2c7a7b;
        background-color: #e6fffa;
        border-color: #dee2e6;
    }

    /* Modal Styles */
    .modal-content {
        border: none;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }
    
    .modal-header {
        border-bottom: none;
        padding: 1.5rem;
    }
    
    .modal-body {
        padding: 2rem;
    }
    
    .modal-footer {
        border-top: none;
        padding: 1.5rem;
    }
</style>

<script>
    // Favorite button interaction
    document.querySelectorAll('.favorite-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const icon = this.querySelector('i');
            
            if (icon.classList.contains('far')) {
                icon.classList.remove('far');
                icon.classList.add('fas', 'text-danger');
                this.classList.remove('btn-outline-secondary');
                this.classList.add('btn-danger');
            } else {
                icon.classList.remove('fas', 'text-danger');
                icon.classList.add('far');
                this.classList.remove('btn-danger');
                this.classList.add('btn-outline-secondary');
            }
        });
    });

    // Fungsi untuk menampilkan modal detail
    document.getElementById('detailModal').addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const nama = button.getAttribute('data-nama');
        const deskripsi = button.getAttribute('data-deskripsi');
        const manfaat = button.getAttribute('data-manfaat');
        const asal_daerah = button.getAttribute('data-asal_daerah');
        const foto = button.getAttribute('data-foto');
        const kategori = button.getAttribute('data-kategori');
        
        // Isi data ke dalam modal
        document.getElementById('detailModalName').textContent = nama;
        document.getElementById('detailModalDeskripsi').textContent = deskripsi;
        document.getElementById('detailModalManfaat').textContent = manfaat;
        document.getElementById('detailModalAsal').textContent = asal_daerah;
        document.getElementById('detailModalKategori').textContent = kategori;
        
        // Set gambar
        const imgElement = document.getElementById('detailModalImage');
        if (foto) {
            imgElement.src = foto;
            imgElement.style.display = 'block';
        } else {
            imgElement.style.display = 'none';
        }
    });
</script>
@endsection