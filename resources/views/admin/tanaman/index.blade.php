@extends('layouts.admin')
@section('title', 'Daftar Tanaman')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Daftar Tanaman Nusantara</h4>

    {{-- Flash Message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href="{{ route('tanaman.create') }}" class="btn btn-success mb-3">
        <i class="material-symbols-rounded align-middle">add</i> Tambah Tanaman
    </a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-sm">
            <thead class="table-success text-center">
    <tr>
        <th>Nama</th>
        <th style="width: 30%">Manfaat</th>
        <th style="width: 12%; white-space: normal;">Asal Daerah</th> {{-- DIPERKECIL --}}
        <th>Foto</th>
        <th width="15%">Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach($tanamen as $t)
    <tr>
        <td>{{ $t->nama }}</td>
        <td style="white-space: normal;">{{ $t->manfaat }}</td>
        <td style="white-space: normal;">{{ $t->asal_daerah }}</td>
        <td class="text-center">
            @if($t->foto)
            <img src="{{ asset('storage/' . $t->foto) }}" width="80" class="img-thumbnail">
            @else
            <span class="text-muted">-</span>
            @endif
        </td>
        <td class="text-center">
    <div class="d-flex justify-content-center gap-2">
        <a href="{{ route('tanaman.edit', $t->id) }}" class="btn btn-sm btn-warning d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
            <i class="material-symbols-rounded">edit</i>
        </a>
        <form action="{{ route('tanaman.destroy', $t->id) }}" method="POST">
            @csrf @method('DELETE')
            <button onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                <i class="material-symbols-rounded">delete</i>
            </button>
        </form>
    </div>
</td>

    </tr>
    @endforeach
</tbody>

        </table>
    </div>
</div>
@endsection
