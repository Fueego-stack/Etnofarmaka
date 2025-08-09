<div class="mb-4">
    <label class="form-label fw-bold text-dark">Nama Tanaman</label>
    <input type="text" name="nama" 
        class="form-control border-2 border-dark bg-light py-2 px-3" 
        value="{{ old('nama', $tanaman->nama ?? '') }}"
        placeholder="Masukkan nama tanaman"
        required>
</div>

<div class="mb-4">
    <label class="form-label fw-bold text-dark">Deskripsi</label>
    <textarea name="deskripsi" 
            class="form-control border-2 border-dark bg-light py-2 px-3" 
            placeholder="Deskripsikan tanaman secara detail"
            rows="4"
            required>{{ old('deskripsi', $tanaman->deskripsi ?? '') }}</textarea>
</div>

<div class="mb-4">
    <label class="form-label fw-bold text-dark">Manfaat</label>
    <input type="text" name="manfaat" 
        class="form-control border-2 border-dark bg-light py-2 px-3" 
        value="{{ old('manfaat', $tanaman->manfaat ?? '') }}"
        placeholder="Contoh: Obat demam, pereda nyeri"
        required>
</div>

<div class="mb-4">
    <label class="form-label fw-bold text-dark">Asal Daerah</label>
    <input type="text" name="asal_daerah" 
        class="form-control border-2 border-dark bg-light py-2 px-3" 
        value="{{ old('asal_daerah', $tanaman->asal_daerah ?? '') }}"
        placeholder="Contoh: Jawa Barat"
        required>
</div>

<div class="mb-4">
    <label class="form-label fw-bold text-dark">Foto (Opsional)</label>
    <input type="file" name="foto" 
        class="form-control border-2 border-dark bg-light py-2 px-3">
    
    @if(isset($tanaman) && $tanaman->foto)
        <div class="mt-3">
            <img src="{{ asset('storage/' . $tanaman->foto) }}" 
                width="150" 
                class="img-thumbnail border-dark">
            <p class="text-muted mt-1 mb-0">Foto saat ini</p>
        </div>
    @endif
</div>