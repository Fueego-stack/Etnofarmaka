@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container-fluid">
    <!-- Ucapan Selamat Datang -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="alert alert-success shadow-sm border-0">
                <h4 class="mb-0">Selamat Datang, Admin 👋</h4>
                <small class="text-muted">Semoga harimu menyenangkan!</small>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Pengguna</p>
                                <!-- Tampilkan jumlah pengguna -->
                                <h5 class="font-weight-bolder">{{ $totalUsers ?? 0 }}</h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow text-center rounded-circle">
                                <i class="material-symbols-rounded text-lg">groups</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Ramuan</p>
                                <h5 class="font-weight-bolder">{{ $totalRamuan ?? 0 }}</h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-info shadow text-center rounded-circle">
                                <i class="material-symbols-rounded text-lg">healing</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Kunjungan</p>
                                <h5 class="font-weight-bolder">{{ $totalKunjungan ?? 0 }}</h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-warning shadow text-center rounded-circle">
                                <i class="material-symbols-rounded text-lg">visibility</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection