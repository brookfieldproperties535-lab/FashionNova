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

  <section class="py-7">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-10 col-md-7 col-lg-5">

          {{-- Page title --}}
          <div class="text-center mb-4"
            data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll">
            <h5 class="text-uppercase ls fw-black font-secondary">Action Required</h5>
          </div>

          {{-- Notice card --}}
          <div class="border rounded p-4 text-center"
            data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">

            <span class="fas fa-exclamation-triangle fa-3x text-warning mb-3 d-block"></span>

            <h6 class="fw-bold mb-2">Pending Order</h6>

            <p class="font-secondary fs-10 text-body-tertiary mb-4">
              {{ $message ?? 'Please complete your current pending order before proceeding.' }}
            </p>

            <hr class="text-body-secondary text-opacity-25 my-3" />

            {{-- Countdown --}}
            <p class="font-secondary fs-10 text-body-tertiary mb-3">
              Redirecting in <span id="countdown" class="fw-bold text-dark">4</span> seconds…
            </p>

          </div>

          {{-- CTA button --}}
          <div class="d-grid mt-3"
            data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">
            <a href="{{ $redirect_url ?? route('history') }}"
              class="btn btn-dark py-3 text-uppercase ls fw-black font-secondary">
              View Pending Order
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>

  <script>
    (function () {
      var seconds = 4;
      var el = document.getElementById('countdown');
      var interval = setInterval(function () {
        seconds--;
        if (el) el.textContent = seconds;
        if (seconds <= 0) {
          clearInterval(interval);
          window.location.href = '{{ $redirect_url ?? route("history") }}';
        }
      }, 1000);
    })();
  </script>

@endsection
