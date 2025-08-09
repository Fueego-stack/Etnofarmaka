@extends('layouts.admin')
@section('title', 'Tambah Tanaman')

@section('content')
<form action="{{ route('tanaman.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('admin.tanaman.form')
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
