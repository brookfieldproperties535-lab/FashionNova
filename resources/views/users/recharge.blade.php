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
            <h5 class="text-uppercase ls fw-black font-secondary">Deposit</h5>
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
            <h2 class="fw-bold mb-3">$ {{ number_format($totalBalance ?? 0, 2) }}</h2>
            <div class="d-grid">
              <a href="{{ route('user.recharge-history') }}"
                class="btn btn-dark btn-sm text-uppercase ls fw-black font-secondary">
                Deposit History
              </a>
            </div>
          </div>

          {{-- Deposit form --}}
          <form method="POST" action="{{ route('user.recharge.store') }}"
            data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">
            @csrf
            <input type="hidden" name="payment_method" value="direct">

            {{-- Amount input --}}
            <div class="mb-3">
              <label class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block mb-2">
                Deposit Amount
              </label>
              <input type="number"
                id="depositAmount"
                name="amount"
                class="form-control font-secondary @error('amount') is-invalid @enderror"
                placeholder="Enter the deposit amount"
                min="10"
                max="5000"
                step="0.01"
                value="{{ old('amount') }}"
                required>
              @error('amount')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            {{-- Preset amounts — 3×2 grid --}}
            <div class="row g-2 mb-4">
              @foreach ([50, 100, 300, 1000, 3000] as $preset)
                <div class="col-4">
                  <button type="button"
                    class="btn btn-outline-dark w-100 font-secondary fs-10 fw-bold"
                    onclick="document.getElementById('depositAmount').value='{{ $preset }}'">
                    $ {{ number_format($preset, 2) }}
                  </button>
                </div>
              @endforeach
              <div class="col-4">
                <button type="button"
                  class="btn btn-outline-dark w-100 font-secondary fs-10 fw-bold"
                  onclick="document.getElementById('depositAmount').value='';document.getElementById('depositAmount').focus();">
                  Others
                </button>
              </div>
            </div>

            {{-- Submit --}}
            <div class="d-grid">
              <button type="button"
                class="btn btn-dark py-3 text-uppercase ls fw-black font-secondary"
                onclick="openChatWidgetFromDeposit()">
                Deposit
              </button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </section>

<script>
  function openChatWidgetFromDeposit() {
    var launcher = document.querySelector('.launcher-default-open-icon, .launcher-icon');
    if (launcher) {
      launcher.click();
      return;
    }

    if (window.Chatway && typeof window.Chatway.open === 'function') {
      window.Chatway.open();
      return;
    }

    if (window.chatway && typeof window.chatway.open === 'function') {
      window.chatway.open();
      return;
    }

    var iframe = document.querySelector('iframe[src*="chatway"]');
    if (iframe && iframe.contentWindow) {
      iframe.contentWindow.postMessage({ type: 'open' }, '*');
      return;
    }

    alert('Chat is currently unavailable. Please email fashionnova.supportfn@gmail.com');
  }
</script>

@endsection
