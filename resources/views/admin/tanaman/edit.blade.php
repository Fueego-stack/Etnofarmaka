@extends('layouts.admin')
@section('title', 'Edit Tanaman')

@section('content')
<form action="{{ route('tanaman.update', $tanaman->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Tanaman</label>
        <input type="text" class="form-control" id="nama" name="nama" 
            value="{{ old('nama', $tanaman->nama) }}" required>
    </div>
    
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" 
                rows="3" required>{{ old('deskripsi', $tanaman->deskripsi) }}</textarea>
    </div>
    
    <div class="mb-3">
        <label for="manfaat" class="form-label">Manfaat</label>
        <textarea class="form-control" id="manfaat" name="manfaat" 
                rows="3" required>{{ old('manfaat', $tanaman->manfaat) }}</textarea>
    </div>
    
    <div class="mb-3">
        <label for="asal_daerah" class="form-label">Asal Daerah</label>
        <input type="text" class="form-control" id="asal_daerah" name="asal_daerah" 
            value="{{ old('asal_daerah', $tanaman->asal_daerah) }}" required>
    </div>
    
    <div class="mb-3">
        <label for="kategori" class="form-label">Kategori</label>
        <select class="form-select" id="kategori" name="kategori" required>
            <option value="">Pilih Kategori</option>
            <option value="Obat Demam" {{ $tanaman->kategori == 'Obat Demam' ? 'selected' : '' }}>Obat Demam</option>
            <option value="Pereda Nyeri" {{ $tanaman->kategori == 'Pereda Nyeri' ? 'selected' : '' }}>Pereda Nyeri</option>
            <option value="Kecantikan" {{ $tanaman->kategori == 'Kecantikan' ? 'selected' : '' }}>Kecantikan</option>
            <option value="Pencernaan" {{ $tanaman->kategori == 'Pencernaan' ? 'selected' : '' }}>Pencernaan</option>
        </select>
    </div>
    
    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
        
        @if($tanaman->foto)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $tanaman->foto) }}" alt="Foto tanaman" width="100">
                <p class="text-muted mt-1">Foto saat ini</p>
            </div>
        @endif
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection