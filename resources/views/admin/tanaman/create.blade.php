@extends('layouts.admin')
@section('title', 'Tambah Tanaman')

@section('content')
<form action="{{ route('tanaman.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Tanaman</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
    </div>
    
    <div class="mb-3">
        <label for="manfaat" class="form-label">Manfaat</label>
        <textarea class="form-control" id="manfaat" name="manfaat" rows="3" required></textarea>
    </div>
    
    <div class="mb-3">
        <label for="asal_daerah" class="form-label">Asal Daerah</label>
        <input type="text" class="form-control" id="asal_daerah" name="asal_daerah" required>
    </div>
    
    <div class="mb-3">
        <label for="kategori" class="form-label">Kategori</label>
        <select class="form-select" id="kategori" name="kategori" required>
            <option value="">Pilih Kategori</option>
            <option value="Obat Demam">Obat Demam</option>
            <option value="Pereda Nyeri">Pereda Nyeri</option>
            <option value="Kecantikan">Kecantikan</option>
            <option value="Pencernaan">Pencernaan</option>
        </select>
    </div>
    
    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
    </div>
    
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection