@extends('layouts.admin')
@section('title', 'Edit Tanaman')

@section('content')
<form action="{{ route('tanaman.update', $tanaman->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    @include('admin.tanaman.form', ['tanaman' => $tanaman])
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
@extends('layouts.admin')
@section('title', 'Edit Tanaman')

@section('content')
<form action="{{ route('tanaman.update', $tanaman->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    @include('admin.tanaman.form', ['tanaman' => $tanaman])
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
