<div class="card-img-top position-relative overflow-hidden" style="height: 200px;">
    @if($item->foto)
        <img src="{{ asset('storage/' . $item->foto) }}" 
            class="img-fluid w-100 h-100 object-fit-cover"
            alt="{{ $item->nama }}">
        <div class="card-img-overlay d-flex flex-column justify-content-end p-3" 
            style="background: linear-gradient(transparent 40%, rgba(0,0,0,0.7))">
            <span class="badge bg-success bg-opacity-75 mb-2">
                {{ $item->asal_daerah }}
            </span>
        </div>
    @else
        <div class="bg-light d-flex align-items-center justify-content-center h-100">
            <i class="fas fa-leaf fa-4x text-muted opacity-25"></i>
        </div>
    @endif
</div>

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
        @php
            // PERBAIKAN DI SINI: ganti $tanaman dengan $item
            $isFavorited = auth()->check() && auth()->user()->favorites->contains($item->id);
        @endphp
        <button class="btn btn-sm {{ $isFavorited ? 'btn-danger' : 'btn-outline-secondary' }} rounded-circle favorite-btn" data-id="{{ $item->id }}">
            <i class="{{ $isFavorited ? 'fas' : 'far' }} fa-heart"></i>
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