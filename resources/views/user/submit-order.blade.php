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
            <h5 class="text-uppercase ls fw-black font-secondary">Evaluation</h5>
          </div>

          {{-- Error alert --}}
          @if (session('error'))
            <div class="alert alert-danger font-secondary fs-10 mb-3">{{ session('error') }}</div>
          @endif

          {{-- Empty state --}}
          @if (!$orderData || count($orderData) === 0)
            <div class="border rounded p-5 text-center">
              <p class="text-body-tertiary font-secondary fs-10 mb-4">No order available at this time.</p>
              <a href="{{ route('user.dashboard') }}"
                class="btn btn-dark btn-sm text-uppercase ls font-secondary fw-black">
                Back to Dashboard
              </a>
            </div>

          @else

            @foreach ($orderData as $data)
              @php
                $order        = $data['order'];
                $price        = $data['price'];
                $commission   = $data['commission'];
                $totalValue   = $data['total_value'];
                $image        = $data['image'] ?? null;
                $overpriced   = $data['overpriced_amount'] ?? 0;
                $isOverpriced = $overpriced > 0;
              @endphp

              {{-- Card --}}
              <div class="border rounded p-4"
                data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">

                {{-- Product image --}}
                <div class="text-center mb-3">
                  @if ($image)
                    <img class="rounded img-fluid"
                      src="{{ asset('OrderImages/' . $image) }}"
                      alt="{{ $order->title }}" />
                  @else
                    <div class="rounded border d-flex align-items-center justify-content-center py-6">
                      <span class="fas fa-image fa-3x text-body-tertiary"></span>
                    </div>
                  @endif
                </div>

                {{-- Title --}}
                <h6 class="fw-bold text-center mb-0">{{ $order->title }}</h6>

                <hr class="text-body-secondary text-opacity-25 my-3" />

                {{-- Remaining evaluations --}}
                <p class="text-center font-secondary fs-10 text-body-tertiary mb-3">
                  Remaining evaluations: {{ $tasksRemaining }}
                </p>

                {{-- Overpriced warning --}}
                @if ($isOverpriced)
                  <div class="alert alert-danger fs-10 mb-3">
                    <strong>Insufficient Balance.</strong>
                    Your account needs an additional
                    <strong>${{ number_format($overpriced, 2) }}</strong>
                    to complete this order. Please recharge first.
                  </div>
                @endif

                {{-- Rating row --}}
                <div class="d-flex justify-content-between align-items-start mb-2">
                  <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Rating</span>
                  <div class="text-end">
                    <span class="font-secondary fs-10 text-body-tertiary d-block">
                      {{ now()->format('m/d/Y') }} Last Updated
                    </span>
                    <span class="font-secondary fs-10 fw-bold">&#9733; 2.1/5</span>
                  </div>
                </div>

                {{-- Stars --}}
                <div class="text-center mb-3">
                  <span class="fas fa-star fs-7"></span>
                  <span class="fas fa-star fs-7"></span>
                  <span class="fas fa-star fs-7"></span>
                  <span class="fas fa-star fs-7"></span>
                  <span class="fas fa-star fs-7"></span>
                </div>

                <hr class="text-body-secondary text-opacity-25 my-3" />

                {{-- Data Value --}}
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Data Value</span>
                  <span class="fw-bold font-secondary">$ {{ number_format($price, 2) }}</span>
                </div>

                {{-- Commission --}}
                <div class="d-flex justify-content-between align-items-center">
                  <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Commission</span>
                  <span class="fw-bold font-secondary">$ {{ number_format($commission, 2) }}</span>
                </div>

              </div>

              {{-- Submit button (outside card) --}}
              <div class="mt-3"
                data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">
                @if ($isOverpriced)
                  <div class="d-grid">
                    <a href="{{ route('user.recharge') }}"
                      class="btn btn-dark py-3 text-uppercase ls fw-black font-secondary">
                      Recharge Account
                    </a>
                  </div>
                @else
                  <form method="POST" action="{{ route('submit.order') }}">
                    @csrf
                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                    <input type="hidden" name="commission" value="{{ $commission }}">
                    <div class="d-grid">
                      <button type="submit"
                        class="btn btn-dark py-3 font-secondary fw-bold">
                        Submit
                      </button>
                    </div>
                  </form>
                @endif
              </div>

              {{-- Remaining below button --}}
              <p class="text-center font-secondary fs-10 text-body-tertiary mt-3 mb-0"
                data-zanim-xs='{"delay":0.6}' data-zanim-trigger="scroll">
                Remaining evaluations: {{ $tasksRemaining }}
              </p>

            @endforeach

          @endif

        </div>
      </div>
    </div>
  </section>

@endsection
