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
            <h5 class="text-uppercase ls fw-black font-secondary">Link Wallet</h5>
          </div>

          {{-- Session alerts --}}
          @if (session('success'))
            <div class="alert alert-success font-secondary fs-10 mb-3">{{ session('success') }}</div>
          @endif

          @if ($errors->any())
            <div class="alert alert-danger font-secondary fs-10 mb-3">
              @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
              @endforeach
            </div>
          @endif

          @if (isset($wallet) && $wallet)

            {{-- Already linked — show details --}}
            <div class="border rounded p-4"
              data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">

              <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="fw-bold font-secondary">Linked Wallet</span>
                <span class="badge rounded-pill bg-dark text-white font-secondary fs-10 px-3 py-2">Active</span>
              </div>

              <hr class="text-body-secondary text-opacity-25 my-3" />

              <div class="mb-3">
                <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block mb-1">Wallet Address</span>
                <div class="d-flex align-items-center gap-2">
                  <span class="fw-bold font-secondary text-break flex-grow-1" id="linked-addr">{{ $wallet->vallet_address }}</span>
                  <button type="button"
                    class="btn btn-outline-dark btn-sm font-secondary fs-10"
                    onclick="navigator.clipboard.writeText(document.getElementById('linked-addr').innerText);this.textContent='Copied!';">
                    <i class="fas fa-copy"></i>
                  </button>
                </div>
              </div>

              <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Type / Network</span>
                <span class="fw-bold font-secondary">{{ $wallet->type }}</span>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Phone</span>
                <span class="fw-bold font-secondary">{{ $wallet->phone }}</span>
              </div>

              <hr class="text-body-secondary text-opacity-25 my-3" />

              <p class="font-secondary fs-10 text-body-tertiary mb-0 text-center">
                <span class="fas fa-lock me-1"></span>
                Wallet details are locked. Contact support to update your linked wallet.
              </p>

            </div>

          @else

            {{-- Link wallet form --}}
            <div class="border rounded p-4"
              data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">

              <form method="POST" action="{{ route('wallet-information.save') }}">
                @csrf

                {{-- Full Name (read-only) --}}
                <div class="mb-3">
                  <input type="text"
                    class="form-control font-secondary text-uppercase"
                    placeholder="FULL NAME"
                    value="{{ auth()->user()->name }}"
                    readonly>
                </div>

                {{-- Phone Number --}}
                <div class="mb-3">
                  <input type="tel"
                    name="phone-number"
                    class="form-control font-secondary text-uppercase @error('phone-number') is-invalid @enderror"
                    placeholder="PHONE NUMBER"
                    value="{{ old('phone-number') }}"
                    required>
                  @error('phone-number')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                {{-- Wallet Address + Paste button --}}
                <div class="mb-4">
                  <div class="input-group">
                    <input type="text"
                      name="vallet-address"
                      id="wallet-address-input"
                      class="form-control font-secondary text-uppercase @error('vallet-address') is-invalid @enderror"
                      placeholder="WALLET ADDRESS"
                      value="{{ old('vallet-address') }}"
                      required>
                    <button type="button"
                      class="btn btn-outline-danger font-secondary fs-10 fw-bold"
                      onclick="navigator.clipboard.readText().then(function(t){document.getElementById('wallet-address-input').value=t;});">
                      Paste
                    </button>
                  </div>
                  @error('vallet-address')
                    <div class="text-danger font-secondary fs-10 mt-1">{{ $message }}</div>
                  @enderror
                </div>

                {{-- Currency --}}
                <div class="mb-3">
                  <label class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block mb-2">Currency</label>
                  <div class="d-flex gap-3 flex-wrap">
                    @foreach (['USDT', 'USDC', 'ETH', 'BTC'] as $cur)
                      <div class="form-check">
                        <input class="form-check-input" type="radio"
                          name="currency" value="{{ $cur }}"
                          id="cur-{{ strtolower($cur) }}"
                          {{ $cur === 'USDT' ? 'checked' : '' }}>
                        <label class="form-check-label font-secondary fs-10" for="cur-{{ strtolower($cur) }}">
                          {{ $cur }}
                        </label>
                      </div>
                    @endforeach
                  </div>
                </div>

                {{-- Network --}}
                <div class="mb-4">
                  <label class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block mb-2">Network</label>
                  <div class="d-flex gap-3 flex-wrap">
                    @foreach (['TRC20', 'ERC20', 'BTC'] as $net)
                      <div class="form-check">
                        <input class="form-check-input" type="radio"
                          name="wallet-type" value="{{ $net }}"
                          id="net-{{ strtolower($net) }}"
                          {{ ($net === 'TRC20' || old('wallet-type') === $net) ? 'checked' : '' }}
                          required>
                        <label class="form-check-label font-secondary fs-10" for="net-{{ strtolower($net) }}">
                          {{ $net }}
                        </label>
                      </div>
                    @endforeach
                  </div>
                  @error('wallet-type')
                    <div class="text-danger font-secondary fs-10 mt-1">{{ $message }}</div>
                  @enderror
                </div>

                {{-- Submit --}}
                <div class="d-grid">
                  <button type="submit"
                    class="btn btn-dark py-3 text-uppercase ls fw-black font-secondary">
                    Link Wallet
                  </button>
                </div>

              </form>

            </div>

          @endif

        </div>
      </div>
    </div>
  </section>

@endsection
