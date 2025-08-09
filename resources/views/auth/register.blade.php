<x-guest-layout>
  <section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <!-- Left: Form Register -->
        <div class="col-sm-6 text-black d-flex flex-column justify-content-center">

          <div class="px-5 ms-xl-4">
            <h2 class="h1 fw-bold mb-3 mt-4 text-success">🌿 TOGA NUSANTARA</h2>
            <p class="text-muted">Gabung dan jelajahi tanaman obat Nusantara</p>
          </div>

          <div class="px-5 ms-xl-4 mt-4">
            <form method="POST" action="{{ route('register') }}" style="width: 100%; max-width: 25rem;">
              @csrf

              <!-- Name -->
              <div class="form-outline mb-4">
                <x-input-label for="name" :value="'Nama Lengkap'" class="form-label" />
                <x-text-input id="name" class="form-control form-control-lg"
                              type="text" name="name" :value="old('name')"
                              required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="text-danger mt-1" />
              </div>

              <!-- Email -->
              <div class="form-outline mb-4">
                <x-input-label for="email" :value="'Email'" class="form-label" />
                <x-text-input id="email" class="form-control form-control-lg"
                              type="email" name="email" :value="old('email')"
                              required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
              </div>

              <!-- Password -->
              <div class="form-outline mb-4">
                <x-input-label for="password" :value="'Kata Sandi'" class="form-label" />
                <x-text-input id="password" class="form-control form-control-lg"
                              type="password" name="password"
                              required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
              </div>

              <!-- Confirm Password -->
              <div class="form-outline mb-4">
                <x-input-label for="password_confirmation" :value="'Konfirmasi Kata Sandi'" class="form-label" />
                <x-text-input id="password_confirmation" class="form-control form-control-lg"
                              type="password" name="password_confirmation"
                              required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-1" />
              </div>

              <!-- Button -->
              <div class="pt-1 mb-4 d-flex justify-content-between align-items-center">
                <a class="text-muted small" href="{{ route('login') }}">Sudah punya akun?</a>
                <x-primary-button class="btn btn-success btn-lg ms-3">
                  Daftar
                </x-primary-button>
              </div>
            </form>
          </div>
        </div>

        <!-- Right: Gambar -->
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="{{ asset('images/login.jpeg') }}"
               alt="Gambar Login" class="w-100 vh-100"
               style="object-fit: cover; object-position: left;">
        </div>
      </div>
    </div>
  </section>
</x-guest-layout>
