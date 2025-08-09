<x-guest-layout>
    <section class="vh-100 d-flex align-items-center justify-content-center bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-5">

                            <h2 class="text-center text-success mb-3 fw-bold">🔑 Lupa Kata Sandi?</h2>
                            <p class="text-muted text-center mb-4">
                                Masukkan email Anda dan kami akan mengirimkan tautan untuk mereset kata sandi Anda.
                            </p>

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4 text-success text-sm text-center" :status="session('status')" />

                            <!-- Form -->
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Email -->
                                <div class="mb-4">
                                    <x-input-label for="email" :value="'Email'" class="form-label" />
                                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
                                </div>

                                <!-- Submit -->
                                <div class="d-flex justify-content-end">
                                    <x-primary-button class="btn btn-success">
                                        Kirim Link Reset
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
