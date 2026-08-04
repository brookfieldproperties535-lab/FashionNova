@extends('users.layouts.master')

@section('content')

  {{-- Preloader --}}
  <div class="preloader" id="preloader">
    <div class="loader">
      <div class="line-scale-pulse-out-rapid">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>

  <section class="py-0">
    <div class="container-fluid">
      <div class="row">

        {{-- Left: background image panel --}}
        <div class="col-lg-6 px-0">
          <div class="sticky-top vh-lg-100 py-9">
            <div class="bg-holder"
              style="background-image:url({{ asset('user/assets/img/headers/header-47.jpg') }});"
              data-zanim-trigger="scroll"
              data-zanim-lg='{"animation":"zoom-out-slide-right","delay":0.4}'>
            </div>
          </div>
        </div>

        {{-- Right: sign-in form --}}
        <div class="col-lg-6 py-6">
          <div class="row h-100 align-items-center justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-10 col-xl-8"
              data-zanim-xs='{"delay":0.5,"animation":"slide-right"}'
              data-zanim-trigger="scroll">

              <h3 class="display-4 fs-7">Welcome Back</h3>
              <h6 class="text-success mt-3">Sign in to access your Fashion Nova account.</h6>

              {{-- Validation errors --}}
              @if ($errors->any())
                <div class="alert alert-danger mt-3 fs-10">
                  @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                  @endforeach
                </div>
              @endif

              <form class="mt-5" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                  <input class="form-control bg-light @error('email') is-invalid @enderror" type="text" name="email"
                    value="{{ old('email') }}" placeholder="Email or Username"
                    required autofocus autocomplete="username" />
                </div>

                <div class="mb-0">
                  <input class="form-control bg-light @error('password') is-invalid @enderror" type="password" name="password"
                    placeholder="Password" required autocomplete="current-password" />
                </div>

                <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label fs-10" for="remember">Remember me</label>
                  </div>
                  @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="fs-10 fw-bold">Forgot password?</a>
                  @endif
                </div>

                <div class="mb-3 d-grid">
                  <button class="btn btn-dark mt-3" type="submit">Sign In</button>
                </div>

                <div class="mb-3 w-100 position-relative text-center mt-4">
                  <hr class="text-body-secondary text-opacity-25" />
                  <div class="absolute-centered px-3 font-secondary fs-10 text-body-tertiary">or sign-in with</div>
                </div>

                <div class="mb-0">
                  <div class="row gx-2">
                    <div class="col-6 d-grid">
                      <a class="btn btn-outline-danger btn-sm mt-2" href="#!">
                        <span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> Google
                      </a>
                    </div>
                    <div class="col-6 d-grid">
                      <a class="btn btn-outline-primary btn-sm mt-2" href="#!">
                        <span class="fab fa-facebook me-2" data-fa-transform="grow-8"></span> Facebook
                      </a>
                    </div>
                  </div>
                </div>

              </form>

              <p class="text-center mt-4 font-secondary fs-10 text-body-tertiary">
                Don't have an account?
                <a href="{{ route('register') }}" class="fw-bold text-body-emphasis">Register Free →</a>
              </p>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
