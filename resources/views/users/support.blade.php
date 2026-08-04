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
            <h5 class="text-uppercase ls fw-black font-secondary">Support</h5>
          </div>

          {{-- Session message --}}
          @if (session('blc_message'))
            <div class="alert alert-warning font-secondary fs-10 mb-3">{{ session('blc_message') }}</div>
          @endif

          {{-- Support card --}}
          <div class="border rounded p-4 text-center mb-3"
            data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">

            <span class="fas fa-headset fa-3x text-secondary mb-3 d-block"></span>
            <h6 class="fw-bold mb-2">Expert Investment Support</h6>
            <p class="font-secondary fs-10 text-body-tertiary mb-0">
              Our team is available 24/7 to assist you with deposits, withdrawals,
              evaluations, and account management.
            </p>

          </div>

          {{-- Contact info rows --}}
          <div class="border rounded p-4 mb-3"
            data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">

            <div class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Email</span>
              <span class="fw-bold font-secondary fs-10">fashionnova.supportfn@gmail.com</span>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Live Chat</span>
              <span class="fw-bold font-secondary fs-10" style="color:#0d6efd;">Instant Response</span>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Response Time</span>
              <span class="fw-bold font-secondary fs-10">Within 2 Hours</span>
            </div>

          </div>

          {{-- Live chat button --}}
          <div class="d-grid"
            data-zanim-xs='{"delay":0.6}' data-zanim-trigger="scroll">
            <button type="button"
              class="btn btn-dark py-3 text-uppercase ls fw-black font-secondary"
              onclick="if(window.LC_API){window.LC_API.open_chat_window();}else{alert('Chat is currently unavailable. Please email fashionnova.supportfn@gmail.com');}">
              Start Live Chat
            </button>
          </div>

          {{-- FAQ link --}}
          <div class="text-center mt-3">
            <a href="{{ route('user.faqs') }}"
              class="font-secondary fs-10 text-body-tertiary">
              View frequently asked questions →
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>

@endsection
