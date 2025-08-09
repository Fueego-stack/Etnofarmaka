<x-guest-layout>
    <section class="vh-100 d-flex align-items-center justify-content-center bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-5">

                            <h2 class="text-center text-success mb-3 fw-bold">🌿 Verifikasi Email Anda</h2>

                            <p class="text-muted text-center mb-4">
                                Terima kasih telah mendaftar! Sebelum memulai, mohon verifikasi alamat email Anda
                                dengan mengeklik tautan yang baru saja kami kirim. Jika belum menerima email, kami dapat mengirim ulang.
                            </p>

                            @if (session('status') == 'verification-link-sent')
                                <div class="alert alert-success text-sm mb-4">
                                    Tautan verifikasi baru telah dikirim ke email Anda.
                                </div>
                            @endif

                            <div class="d-flex justify-content-between align-items-center">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <x-primary-button class="btn btn-success">
                                        Kirim Ulang Email Verifikasi
                                    </x-primary-button>
                                </form>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-secondary text-sm">
                                        Keluar
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <small class="text-muted">Pastikan email yang Anda gunakan aktif dan periksa folder spam jika belum menerima email.</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
