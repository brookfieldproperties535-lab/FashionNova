@extends('users.layouts.master')

@section('content')

@php
  $user        = auth()->user();
  $balance     = $adjustedTotalFunds ?? 0;
  $minWithdraw = $user->min_withdraw ?? 50;
  $maxWithdraw = min($user->max_withdraw ?? 2000, $balance);
@endphp

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
            <h5 class="text-uppercase ls fw-black font-secondary">Withdrawal / Redemption</h5>
          </div>

          {{-- Session alerts --}}
          @include('partials.funds-success-alert')
          @if (session('error'))
            <div class="alert alert-danger font-secondary fs-10 mb-3">{{ session('error') }}</div>
          @endif

          {{-- Balance card --}}
          <div class="border rounded p-4 mb-4"
            data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">
            <div class="d-flex justify-content-between align-items-start mb-1">
              <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Total Balance</span>
              <span class="font-secondary fs-10 text-body-tertiary">USD</span>
            </div>
            <h2 class="fw-bold mb-0">$ {{ number_format($balance, 2) }}</h2>
          </div>

          {{-- Withdrawal form --}}
          <form method="POST" action="{{ route('user.redemption.store') }}"
            data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">
            @csrf

            {{-- Amount --}}
            <div class="mb-3">
              <label class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block mb-2">
                Withdrawal Amount
              </label>
              <input type="number"
                name="amount"
                class="form-control font-secondary @error('amount') is-invalid @enderror"
                placeholder="Enter amount (min ${{ number_format($minWithdraw, 2) }}, max ${{ number_format($maxWithdraw, 2) }})"
                min="{{ $minWithdraw }}"
                max="{{ $maxWithdraw }}"
                step="0.01"
                value="{{ old('amount') }}"
                required>
              @error('amount')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            {{-- Wallet password --}}
            <div class="mb-4">
              <label class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block mb-2">
                Wallet Info
              </label>
              <input type="password"
                name="password"
                class="form-control font-secondary @error('password') is-invalid @enderror"
                placeholder="Enter wallet/payment details"
                required>
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            {{-- Submit --}}
            <div class="d-grid">
              <button type="submit"
                class="btn btn-dark py-3 text-uppercase ls fw-black font-secondary">
                Request Withdrawal
              </button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </section>

@endsection
