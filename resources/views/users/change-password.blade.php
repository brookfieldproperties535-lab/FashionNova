@extends('users.layouts.master')

@section('content')

  {{-- Preloader --}}
  <div class="preloader" id="preloader">
    <div class="loader">
      <div class="line-scale-pulse-out-rapid">
        <div></div><div></div><div></div><div></div><div></div>
      </div>
    </div>
  </div>

  <section class="py-7">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-10 col-md-7 col-lg-5">

          {{-- Title --}}
          <div class="text-center mb-4"
            data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll">
            <h5 class="text-uppercase ls fw-black font-secondary">Change Password</h5>
          </div>

          {{-- Tab bar --}}
          <div class="text-center mb-4"
            data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">
            <ul class="nav nav-pills d-inline-flex border rounded-pill p-1 font-secondary" id="pwdTabs">
              <li class="nav-item">
                <a class="nav-link active fw-black ls text-uppercase fs-10 rounded-pill px-4 text-dark"
                  data-bs-toggle="pill" href="#pwd-account">Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-black ls text-uppercase fs-10 rounded-pill px-4 text-dark"
                  data-bs-toggle="pill" href="#pwd-wallet">Wallet</a>
              </li>
            </ul>
          </div>

          <div class="tab-content">

            {{-- ── Account Password ── --}}
            <div class="tab-pane fade show active" id="pwd-account">

              @if (session('pass_status') && old('_form') !== 'wallet')
                <div class="alert alert-success font-secondary fs-10 mb-3">{{ session('pass_status') }}</div>
              @endif
              @if ($errors->hasAny(['current_password','new_password','new_password_confirmation']) && old('_form') !== 'wallet')
                <div class="alert alert-danger font-secondary fs-10 mb-3">Please fix the errors below.</div>
              @endif

              <div class="border rounded p-4"
                data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">

                <form method="POST" action="{{ route('user.password.update') }}">
                  @csrf
                  @method('PUT')
                  <input type="hidden" name="_form" value="account">

                  <div class="mb-3">
                    <label class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block mb-2">
                      Current Password
                    </label>
                    <input type="password" name="current_password"
                      class="form-control font-secondary @error('current_password') is-invalid @enderror"
                      placeholder="Enter current password"
                      autocomplete="current-password">
                    @error('current_password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block mb-2">
                      New Password
                    </label>
                    <input type="password" name="new_password"
                      class="form-control font-secondary @error('new_password') is-invalid @enderror"
                      placeholder="Min. 8 characters"
                      autocomplete="new-password">
                    @error('new_password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="mb-4">
                    <label class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block mb-2">
                      Confirm New Password
                    </label>
                    <input type="password" name="new_password_confirmation"
                      class="form-control font-secondary"
                      placeholder="Repeat new password"
                      autocomplete="new-password">
                  </div>

                  <div class="d-grid">
                    <button type="submit"
                      class="btn btn-dark py-3 text-uppercase ls fw-black font-secondary">
                      Update Account Password
                    </button>
                  </div>

                </form>
              </div>
            </div>

            {{-- ── Wallet Password ── --}}
            <div class="tab-pane fade" id="pwd-wallet">

              @if (session('pass_status') && old('_form') === 'wallet')
                <div class="alert alert-success font-secondary fs-10 mb-3">{{ session('pass_status') }}</div>
              @endif
              @if ($errors->hasAny(['current_wallet_password','new_wallet_password','new_wallet_password_confirmation']))
                <div class="alert alert-danger font-secondary fs-10 mb-3">Please fix the errors below.</div>
              @endif

              <div class="border rounded p-4"
                data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">

                <p class="font-secondary fs-10 text-body-tertiary mb-3">
                  Your wallet password is required to authorize all withdrawals. Keep it different from your account password.
                </p>

                <form method="POST" action="{{ route('user.wallet-password.update') }}">
                  @csrf
                  @method('PUT')
                  <input type="hidden" name="_form" value="wallet">

                  <div class="mb-3">
                    <label class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block mb-2">
                      Current Wallet Password
                    </label>
                    <input type="password" name="current_wallet_password"
                      class="form-control font-secondary @error('current_wallet_password') is-invalid @enderror"
                      placeholder="Enter current wallet password"
                      autocomplete="current-password">
                    @error('current_wallet_password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block mb-2">
                      New Wallet Password
                    </label>
                    <input type="password" name="new_wallet_password"
                      class="form-control font-secondary @error('new_wallet_password') is-invalid @enderror"
                      placeholder="Min. 8 characters"
                      autocomplete="new-password">
                    @error('new_wallet_password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="mb-4">
                    <label class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block mb-2">
                      Confirm New Wallet Password
                    </label>
                    <input type="password" name="new_wallet_password_confirmation"
                      class="form-control font-secondary"
                      placeholder="Repeat new wallet password"
                      autocomplete="new-password">
                  </div>

                  <div class="d-grid">
                    <button type="submit"
                      class="btn btn-dark py-3 text-uppercase ls fw-black font-secondary">
                      Update Wallet Password
                    </button>
                  </div>

                </form>
              </div>
            </div>

          </div>{{-- /tab-content --}}

          {{-- Back link --}}
          <div class="text-center mt-4">
            <a href="{{ route('user.profile') }}"
              class="font-secondary fs-10 text-body-tertiary">
              ← Back to Profile
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>

  {{-- Auto-activate wallet tab if wallet errors exist --}}
  @if ($errors->hasAny(['current_wallet_password','new_wallet_password','new_wallet_password_confirmation']) || (session('pass_status') && old('_form') === 'wallet'))
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var walletTab = document.querySelector('[href="#pwd-wallet"]');
        if (walletTab) walletTab.click();
      });
    </script>
  @endif

@endsection
