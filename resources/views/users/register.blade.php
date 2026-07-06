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
              style="background-image:url({{ asset('user/assets/img/headers/header-3.jpg') }});"
              data-zanim-trigger="scroll"
              data-zanim-lg='{"animation":"zoom-out-slide-right","delay":0.4}'>
            </div>
          </div>
        </div>

        {{-- Right: sign-up form --}}
        <div class="col-lg-6 py-6">
          <div class="row h-100 align-items-center justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-10 col-xl-8"
              data-zanim-xs='{"delay":0.5,"animation":"slide-right"}'
              data-zanim-trigger="scroll">

              <h3 class="display-4 fs-7">Create Your Account</h3>
              <h6 class="text-danger mt-3">Join thousands of members already earning daily.</h6>

              @if ($errors->any())
                <div class="alert alert-danger mt-3 fs-10">
                  @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                  @endforeach
                </div>
              @endif

              <form class="mt-5" method="POST" action="{{ route('user-registeration') }}">
                @csrf

                <div class="row gy-3 align-items-center mb-4">

                  <div class="col-12">
                    <input class="form-control bg-light @error('name') is-invalid @enderror" type="text" name="name"
                      value="{{ old('name') }}" placeholder="Full Name" required />
                    @error('name')
                      <div class="text-danger fs-10 mt-1">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <input class="form-control bg-light @error('phone') is-invalid @enderror" type="text" name="phone"
                      value="{{ old('phone') }}" placeholder="Phone Number" required />
                    @error('phone')
                      <div class="text-danger fs-10 mt-1">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <input class="form-control bg-light @error('email') is-invalid @enderror" type="email" name="email"
                      value="{{ old('email') }}" placeholder="Email Address" required />
                    @error('email')
                      <div class="text-danger fs-10 mt-1">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="col-6">
                    <input class="form-control bg-light @error('password') is-invalid @enderror" type="password" name="password"
                      placeholder="Password" required />
                    @error('password')
                      <div class="text-danger fs-10 mt-1">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="col-6">
                    <input class="form-control bg-light" type="password" name="password_confirmation"
                      placeholder="Confirm Password" required />
                  </div>

                  <div class="col-12">
                    <input class="form-control bg-light @error('wallet-password') is-invalid @enderror" type="password" name="wallet-password"
                      placeholder="Wallet Password" required />
                    @error('wallet-password')
                      <div class="text-danger fs-10 mt-1">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <input class="form-control bg-light @error('refrence-code') is-invalid @enderror" type="text" name="refrence-code"
                      value="{{ old('refrence-code') }}" placeholder="Reference Code" required />
                    @error('refrence-code')
                      <div class="text-danger fs-10 mt-1">{{ $message }}</div>
                    @enderror
                  </div>

                </div>

                <div class="row mb-4 align-items-center">
                  <div class="col-auto d-grid">
                    <input class="btn btn-dark" type="submit" value="Create an Account" />
                  </div>
                  <div class="col-sm">
                    <p class="fs-10 text-body mb-0 font-secondary mt-2 mt-lg-0">
                      By signing up, you agree to the
                      <a class="text-black" href="#">terms and conditions.</a>
                    </p>
                  </div>
                </div>

              </form>

              <p class="text-center font-secondary fs-10 text-body-tertiary">
                Already have an account?
                <a href="{{ route('user.login') }}" class="fw-bold text-body-emphasis">Sign In →</a>
              </p>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
