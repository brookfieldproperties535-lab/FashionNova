@extends('users.layouts.master')

@section('content')

@php
  $user       = $userData['user'];
  $membership = $userData['membership_level'];
  $totalFunds = $userData['total_funds']       ?? 0;
  $commission = $userData['today_commission']  ?? 0;
  $totalComm  = $userData['total_commission']  ?? 0;
  $credibility = $user->credibility            ?? 100;
@endphp

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
            <h5 class="text-uppercase ls fw-black font-secondary">Profile</h5>
          </div>

          {{-- Profile card --}}
          <div class="border rounded p-4"
            data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">

            {{-- Avatar --}}
            <div class="text-center mb-2">
              <span class="fas fa-user-circle fa-5x text-secondary"></span>
            </div>

            {{-- Name --}}
            <h5 class="fw-bold text-center mb-1">{{ $user->name }}</h5>

            {{-- Reference code + copy --}}
            <p class="font-secondary fs-10 text-body-tertiary text-center mb-3">
              <span id="ref-code-text">{{ $user->reference_code }}</span>
              <button type="button"
                class="btn btn-link p-0 ms-1 text-body-tertiary fs-10 align-baseline"
                id="copy-ref-btn"
                onclick="
                  navigator.clipboard.writeText(document.getElementById('ref-code-text').innerText);
                  var btn = document.getElementById('copy-ref-btn');
                  btn.innerHTML = '<i class=\'fas fa-check\'></i>';
                  setTimeout(function(){ btn.innerHTML = '<i class=\'fas fa-copy\'></i>'; }, 1500);
                ">
                <i class="fas fa-copy"></i>
              </button>
            </p>

            <hr class="text-body-secondary text-opacity-25 my-3" />

            {{-- Total Balance --}}
            <div class="d-flex justify-content-between align-items-start mb-2">
              <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Total Balance</span>
              <div class="text-end">
                <span class="fw-bold font-secondary fs-6 mb-0">$ {{ number_format($totalFunds, 2) }}</span>
                <span class="d-block font-secondary fs-10 text-body-tertiary">USD</span>
              </div>
            </div>

            {{-- Credibility progress bar --}}
            <div class="progress mb-3" style="height:8px;">
              <div class="progress-bar bg-dark" role="progressbar"
                style="width:{{ $credibility }}%;"
                aria-valuenow="{{ $credibility }}" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
            <p class="font-secondary fs-10 text-end text-body-tertiary mb-3">{{ $credibility }}%</p>

            {{-- Membership --}}
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Membership</span>
              <span class="badge rounded-pill bg-dark text-white font-secondary fs-10 px-3 py-2">
                {{ $membership->level_name ?? 'Member' }}
              </span>
            </div>

            {{-- Commission --}}
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Commission</span>
              <span class="badge rounded-pill bg-dark text-white font-secondary fs-10 px-3 py-2">
                $ {{ number_format($commission, 2) }}
              </span>
            </div>

            {{-- Total Commission --}}
            <div class="d-flex justify-content-between align-items-center">
              <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Total Commission</span>
              <span class="badge rounded-pill bg-dark text-white font-secondary fs-10 px-3 py-2">
                $ {{ number_format($totalComm, 2) }}
              </span>
            </div>

          </div>

          {{-- Membership button --}}
          <div class="d-grid mt-3"
            data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">
            <a href="{{ route('user.change-password') }}"
              class="btn btn-dark py-3 text-uppercase ls fw-black font-secondary">
              Change Password
            </a>
          </div>

          {{-- Logout button --}}
          <div class="d-grid mt-2"
            data-zanim-xs='{"delay":0.6}' data-zanim-trigger="scroll">
            <a href="{{ route('logout') }}"
              class="btn btn-outline-dark py-3 text-uppercase ls fw-black font-secondary"
              onclick="event.preventDefault(); document.getElementById('profile-logout-form').submit();">
              Logout
            </a>
            <form id="profile-logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>

@endsection
