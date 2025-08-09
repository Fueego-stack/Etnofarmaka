<x-guest-layout>
  <section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <!-- Left: Login Form -->
        <div class="col-sm-6 text-black d-flex flex-column justify-content-center">

          <div class="px-5 ms-xl-4">
            <h2 class="h1 fw-bold mb-3 mt-4 text-success">🌿 TOGA NUSANTARA</h2>
            <p class="text-muted">Jelajahi khasiat tanaman obat keluarga Indonesia</p>
          </div>

          <div class="px-5 ms-xl-4 mt-4">
            <!-- Session Status -->
            <x-auth-session-status class="mb-3" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" style="width: 100%; max-width: 25rem;">
              @csrf

              <!-- Email -->
              <div class="form-outline mb-4">
                <x-input-label for="email" :value="'Email'" class="form-label" />
                <x-text-input id="email" type="email" name="email" class="form-control form-control-lg" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
              </div>

              <!-- Password -->
              <div class="form-outline mb-4">
                <x-input-label for="password" :value="'Kata Sandi'" class="form-label" />
                <x-text-input id="password" type="password" name="password" class="form-control form-control-lg" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
              </div>

              <!-- Remember Me -->
              <div class="form-check mb-3">
                <input type="checkbox" name="remember" id="remember_me" class="form-check-input" />
                <label for="remember_me" class="form-check-label">Ingat saya</label>
              </div>

              <div class="pt-1 mb-4 d-flex justify-content-between align-items-center">
                @if (Route::has('password.request'))
                  <a class="text-muted small" href="{{ route('password.request') }}">Lupa kata sandi?</a>
                @endif

                <x-primary-button class="btn btn-success btn-lg ms-3">
                  Masuk
                </x-primary-button>
              </div>

              <p>Belum punya akun? <a href="{{ route('register') }}" class="link-success">Daftar sekarang</a></p>
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
