@extends('users.layouts.master')

@section('content')

  {{-- action button styles moved to public/user/assets/css/custom.css --}}
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

  <section class="py-7">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-10 col-md-7 col-lg-5">

          {{-- Page title --}}
          <div class="text-center mb-4"
            data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll">
            <h5 class="text-uppercase ls fw-black font-secondary">Your Account</h5>
          </div>

          {{-- Session messages --}}
          @if (session('order_success_message'))
            <div class="alert alert-success font-secondary fs-10 mb-3">{{ session('order_success_message') }}</div>
          @endif
          @if (session('order_message'))
            <div class="alert alert-warning font-secondary fs-10 mb-3">{{ session('order_message') }}</div>
          @endif
          @if (session('account_message'))
            <div class="alert alert-danger font-secondary fs-10 mb-3">{{ session('account_message') }}</div>
          @endif

          {{-- Account card --}}
          <div class="border rounded p-4"
            data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">

            {{-- Avatar + greeting --}}
            <div class="d-flex align-items-center mb-3">
              <span class="fas fa-user-circle fa-3x text-secondary me-3"></span>
              <div>
                <p class="font-secondary fs-10 text-body-tertiary fw-bold mb-0">Hi,</p>
                <h5 class="fw-bold mb-0">{{ $userData['user']->name }}</h5>
              </div>
            </div>

            <hr class="text-body-secondary text-opacity-25 my-3" />

            {{-- Balance --}}
            <div class="d-flex justify-content-between align-items-start mb-1">
              <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Total Balance</span>
              <span class="font-secondary fs-10 text-body-tertiary">USD</span>
            </div>
            <h2 class="fw-bold mb-4">$ {{ number_format($userData['total_funds'] ?? 0, 2) }}</h2>

            {{-- Stat rows --}}
            <div class="d-flex justify-content-between align-items-center bg-dark text-white px-3 py-3 rounded mb-2">
              <span class="text-uppercase ls font-secondary fs-10">Total Products</span>
              <span class="fw-bold font-secondary">{{ $userData['order_limit'] ?? 0 }}</span>
            </div>

            <div class="d-flex justify-content-between align-items-center bg-dark text-white px-3 py-3 rounded mb-2">
              <span class="text-uppercase ls font-secondary fs-10">Completed Today</span>
              <span class="fw-bold font-secondary">{{ $userData['total_today_orders'] ?? 0 }}</span>
            </div>

            <div class="d-flex justify-content-between align-items-center bg-dark text-white px-3 py-3 rounded">
              <span class="text-uppercase ls font-secondary fs-10">Today's Commission</span>
              <span class="fw-bold font-secondary">$ {{ number_format($userData['today_commission'] ?? 0, 2) }}</span>
            </div>

          </div>

          {{-- Evaluate Now button --}}
          <div class="d-grid mt-3"
            data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">
            <a href="{{ route('generate.order') }}"
              class="btn btn-dark py-3 text-uppercase ls fw-black font-secondary">
              Evaluate Now
            </a>
          </div>

          {{-- Action buttons - Row 1 --}}
            <div class="row g-2 mt-3"
            data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">
            <div class="col-4">
              <a href="{{ route('user.wallet') }}" class="btn btn-outline-dark w-100 font-secondary fs-10">
                <span class="action-label">Wallet</span>
              </a>
            </div>
            <div class="col-4">
              <a href="{{ route('user.recharge') }}" class="btn btn-outline-dark w-100 font-secondary fs-10">
                <span class="action-label">Deposit</span>
              </a>
            </div>
            <div class="col-4">
              <a href="{{ route('user.redemption') }}" class="btn btn-outline-dark w-100 font-secondary fs-10">
                <span class="action-label">Withdraw</span>
              </a>
            </div>
          </div>

          {{-- Quick links - Row 2 --}}
            <div class="row g-2 mt-2"
            data-zanim-xs='{"delay":0.6}' data-zanim-trigger="scroll">
            <div class="col-4">
              <a href="{{ route('user.profile') }}" class="btn btn-outline-dark w-100 font-secondary fs-10">
                <span class="action-label">Profile</span>
              </a>
            </div>
            <div class="col-4">
              <a href="{{ route('user.tasks') }}" class="btn btn-outline-dark w-100 font-secondary fs-10">
                <span class="action-label">History</span>
              </a>
            </div>
            <div class="col-4">
              <a href="{{ route('user.support') }}" class="btn btn-outline-dark w-100 font-secondary fs-10">
                <span class="action-label">Support</span>
              </a>
            </div>
          </div>

          {{-- Support links - Row 3 --}}
            <div class="row g-2 mt-2"
            data-zanim-xs='{"delay":0.7}' data-zanim-trigger="scroll">
            <div class="col-4">
              <a href="{{ route('user.faqs') }}" class="btn btn-outline-dark w-100 font-secondary fs-10">
                <span class="action-label">FAQs</span>
              </a>
            </div>
            <div class="col-4">
              <a href="{{ route('user.company') }}" class="btn btn-outline-dark w-100 font-secondary fs-10">
                <span class="action-label">Company</span>
              </a>
            </div>
            <div class="col-4">
              <a href="{{ route('user.terms') }}" class="btn btn-outline-dark w-100 font-secondary fs-10">
                <span class="action-label">Terms</span>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

@endsection
