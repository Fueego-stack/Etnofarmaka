<x-guest-layout>
    <section class="vh-100 d-flex align-items-center justify-content-center bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-5">

                            <h2 class="text-center text-success mb-3 fw-bold">🔒 Reset Kata Sandi</h2>
                            <p class="text-muted text-center mb-4">Masukkan email dan kata sandi baru Anda.</p>

                            <form method="POST" action="{{ route('password.store') }}">
                                @csrf

                                <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <!-- Email Address -->
                                <div class="mb-3">
                                    <x-input-label for="email" :value="'Email'" class="form-label" />
                                    <x-text-input id="email" class="form-control" type="email" name="email"
                                        :value="old('email', $request->email)" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
                                </div>

                                <!-- New Password -->
                                <div class="mb-3">
                                    <x-input-label for="password" :value="'Kata Sandi Baru'" class="form-label" />
                                    <x-text-input id="password" class="form-control" type="password" name="password"
                                        required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mb-4">
                                    <x-input-label for="password_confirmation" :value="'Konfirmasi Kata Sandi'" class="form-label" />
                                    <x-text-input id="password_confirmation" class="form-control" type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-1" />
                                </div>

                                <!-- Submit Button -->
                                <div class="d-flex justify-content-end">
                                    <x-primary-button class="btn btn-success">
                                        Reset Kata Sandi
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
