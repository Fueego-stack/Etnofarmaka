<x-guest-layout>
    <section class="vh-100 d-flex align-items-center justify-content-center bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-5">

                            <h2 class="text-center text-success fw-bold mb-3">🔒 Konfirmasi Kata Sandi</h2>
                            <p class="text-muted text-center mb-4">
                                Ini adalah area aman aplikasi. Harap masukkan kata sandi Anda sebelum melanjutkan.
                            </p>

                            <!-- Form -->
                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf

                                <!-- Password -->
                                <div class="mb-4">
                                    <x-input-label for="password" :value="'Kata Sandi'" class="form-label" />
                                    <x-text-input id="password" type="password" name="password" class="form-control" required autocomplete="current-password" />
                                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
                                </div>

                                <!-- Button -->
                                <div class="d-flex justify-content-end">
                                    <x-primary-button class="btn btn-success">
                                        Konfirmasi
                                    </x-primary-button>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="text-center mt-3">
                        <a href="{{ route('login') }}" class="text-success small">Kembali ke halaman masuk</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
