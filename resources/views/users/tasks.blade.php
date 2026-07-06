@extends('users.layouts.master')

@section('content')

@php
  $completed     = $completedOrders    ?? collect();
  $onHold        = $onHoldOrders       ?? collect();
  $oneIncomplete = $oneIncompleteOrder ?? null;
  $membershipObj = $membership         ?? null;
  $commRate      = ($membershipObj->commission ?? 0) / 100;
  $userFunds     = $funds              ?? 0;

  $pendingCount   = $oneIncomplete ? 1 : 0;
  $completedCount = count($completed);
  $allCount       = $pendingCount + $completedCount;
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

  <section class="py-6">
    <div class="container">

      {{-- Page title --}}
      <div class="text-center mb-4"
        data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll">
        <h1 class="text-uppercase ls fw-black font-secondary">Evaluation History</h1>
      </div>

      {{-- Segmented tab bar --}}
      <div class="text-center mb-4"
        data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">
        <ul class="nav nav-pills d-inline-flex border rounded-pill p-1 font-secondary" id="historyTabs">
          <li class="nav-item">
            <a class="nav-link active fw-black ls text-uppercase fs-10 rounded-pill px-4 text-dark"
              data-bs-toggle="pill" href="#tk-all">All</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-black ls text-uppercase fs-10 rounded-pill px-4 text-dark"
              data-bs-toggle="pill" href="#tk-pending">Pending</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-black ls text-uppercase fs-10 rounded-pill px-4 text-dark"
              data-bs-toggle="pill" href="#tk-completed">Completed</a>
          </li>
        </ul>
      </div>

      {{-- Evaluate Now button --}}
      <div class="text-center mb-5"
        data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">
        <a href="{{ route('generate.order') }}"
          class="btn btn-dark px-5 py-3 text-uppercase ls fw-black font-secondary">
          Evaluate Now
        </a>
      </div>

      {{-- Tab panes --}}
      <div class="tab-content">

        {{-- ── ALL ─────────────────────────────────────────────── --}}
        <div class="tab-pane fade show active" id="tk-all">

          @if ($allCount === 0)
            <div class="border rounded p-6 text-center">
              <span class="fas fa-inbox fa-3x text-body-tertiary mb-3 d-block"></span>
              <p class="text-body-tertiary font-secondary fs-10 mb-0">No evaluations yet. Start your first evaluation now.</p>
            </div>
          @endif

          {{-- Pending item --}}
          @if ($oneIncomplete)
            @php
              $price = $oneIncomplete->orderList->price ?? 0;
              $comm  = $oneIncomplete->commission_amount ?? round($price * $commRate, 2);
            @endphp
            <div class="border rounded p-3 mb-3"
              data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
              <div class="row g-0 align-items-center">
                <div class="col-auto me-3">
                  @if (!empty($oneIncomplete->orderList->image))
                    <img class="rounded"
                      src="{{ asset('OrderImages/' . $oneIncomplete->orderList->image) }}"
                      alt="{{ $oneIncomplete->orderList->title }}"
                      width="90" height="90"
                      style="object-fit:cover;" />
                  @else
                    <div class="rounded bg-light d-flex align-items-center justify-content-center"
                      style="width:90px;height:90px;">
                      <span class="fas fa-image fa-2x text-body-tertiary"></span>
                    </div>
                  @endif
                </div>
                <div class="col">
                  <span class="badge rounded-pill fw-bold font-secondary ls text-uppercase fs-10 mb-1"
                    style="background:rgba(255,193,7,0.15);color:#b45309;">Pending</span>
                  <p class="font-secondary fs-10 text-body-tertiary mb-1">
                    {{ $oneIncomplete->created_at->format('d/m/y, H:i:s') }}
                  </p>
                  <h6 class="fw-bold mb-2">{{ $oneIncomplete->orderList->title ?? 'Task' }}</h6>
                  <div class="row g-0">
                    <div class="col-6">
                      <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block">Data Value</span>
                      <span class="fw-bold font-secondary">$ {{ number_format($price, 2) }}</span>
                    </div>
                    <div class="col-6">
                      <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block">Commission</span>
                      <span class="fw-bold font-secondary">$ {{ number_format($comm, 2) }}</span>
                    </div>
                  </div>
                  <form method="POST" class="mt-3"
                    action="{{ ($oneIncomplete->orderList->price > $userFunds) ? route('support') : route('submit.order') }}">
                    @csrf
                    <input type="hidden" name="order_id" value="{{ $oneIncomplete->order_id }}">
                    <input type="hidden" name="commission" value="{{ $comm }}">
                    <div class="d-grid">
                      <button type="submit"
                        class="btn btn-dark btn-sm text-uppercase ls fw-black font-secondary">
                        Submit Task
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          @endif

          {{-- Completed items --}}
          @foreach ($completed as $task)
            @php
              $price = $task['price']      ?? 0;
              $comm  = $task['commission'] ?? 0;
            @endphp
            <div class="border rounded p-3 mb-3"
              data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
              <div class="row g-0 align-items-center">
                <div class="col-auto me-3">
                  @if (!empty($task['image']))
                    <img class="rounded"
                      src="{{ asset('OrderImages/' . $task['image']) }}"
                      alt="{{ $task['title'] }}"
                      width="90" height="90"
                      style="object-fit:cover;" />
                  @else
                    <div class="rounded bg-light d-flex align-items-center justify-content-center"
                      style="width:90px;height:90px;">
                      <span class="fas fa-image fa-2x text-body-tertiary"></span>
                    </div>
                  @endif
                </div>
                <div class="col">
                  <span class="badge rounded-pill fw-bold font-secondary ls text-uppercase fs-10 mb-1"
                    style="background:rgba(13,110,253,0.1);color:#0d6efd;">Completed</span>
                  <p class="font-secondary fs-10 text-body-tertiary mb-1">{{ $task['created_at'] ?? '—' }}</p>
                  <h6 class="fw-bold mb-2">{{ $task['title'] ?? 'Task' }}</h6>
                  <div class="row g-0">
                    <div class="col-6">
                      <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block">Data Value</span>
                      <span class="fw-bold font-secondary">$ {{ number_format($price, 2) }}</span>
                    </div>
                    <div class="col-6">
                      <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block">Commission</span>
                      <span class="fw-bold font-secondary">$ {{ number_format($comm, 2) }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

        </div>{{-- /tk-all --}}

        {{-- ── PENDING ──────────────────────────────────────────── --}}
        <div class="tab-pane fade" id="tk-pending">
          @if ($oneIncomplete)
            @php
              $price = $oneIncomplete->orderList->price ?? 0;
              $comm  = $price * $commRate;
            @endphp
            <div class="border rounded p-3 mb-3">
              <div class="row g-0 align-items-center">
                <div class="col-auto me-3">
                  @if (!empty($oneIncomplete->orderList->image))
                    <img class="rounded"
                      src="{{ asset('OrderImages/' . $oneIncomplete->orderList->image) }}"
                      alt="{{ $oneIncomplete->orderList->title }}"
                      width="90" height="90"
                      style="object-fit:cover;" />
                  @else
                    <div class="rounded bg-light d-flex align-items-center justify-content-center"
                      style="width:90px;height:90px;">
                      <span class="fas fa-image fa-2x text-body-tertiary"></span>
                    </div>
                  @endif
                </div>
                <div class="col">
                  <span class="badge rounded-pill fw-bold font-secondary ls text-uppercase fs-10 mb-1"
                    style="background:rgba(255,193,7,0.15);color:#b45309;">Pending</span>
                  <p class="font-secondary fs-10 text-body-tertiary mb-1">
                    {{ $oneIncomplete->created_at->format('d/m/y, H:i:s') }}
                  </p>
                  <h6 class="fw-bold mb-2">{{ $oneIncomplete->orderList->title ?? 'Task' }}</h6>
                  <div class="row g-0">
                    <div class="col-6">
                      <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block">Data Value</span>
                      <span class="fw-bold font-secondary">$ {{ number_format($price, 2) }}</span>
                    </div>
                    <div class="col-6">
                      <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block">Commission</span>
                      <span class="fw-bold font-secondary">$ {{ number_format($comm, 2) }}</span>
                    </div>
                  </div>
                  <form method="POST" class="mt-3"
                    action="{{ ($oneIncomplete->orderList->price > $userFunds) ? route('support') : route('submit.order') }}">
                    @csrf
                    <input type="hidden" name="order_id" value="{{ $oneIncomplete->order_id }}">
                    <input type="hidden" name="commission" value="{{ $comm }}">
                    <div class="d-grid">
                      <button type="submit"
                        class="btn btn-dark btn-sm text-uppercase ls fw-black font-secondary">
                        Submit Task
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          @else
            <div class="border rounded p-6 text-center">
              <span class="fas fa-check-circle fa-3x text-body-tertiary mb-3 d-block"></span>
              <p class="text-body-tertiary font-secondary fs-10 mb-0">No pending evaluations.</p>
            </div>
          @endif
        </div>{{-- /tk-pending --}}

        {{-- ── COMPLETED ────────────────────────────────────────── --}}
        <div class="tab-pane fade" id="tk-completed">
          @forelse ($completed as $task)
            @php
              $price = $task['price']      ?? 0;
              $comm  = $task['commission'] ?? 0;
            @endphp
            <div class="border rounded p-3 mb-3">
              <div class="row g-0 align-items-center">
                <div class="col-auto me-3">
                  @if (!empty($task['image']))
                    <img class="rounded"
                      src="{{ asset('OrderImages/' . $task['image']) }}"
                      alt="{{ $task['title'] }}"
                      width="90" height="90"
                      style="object-fit:cover;" />
                  @else
                    <div class="rounded bg-light d-flex align-items-center justify-content-center"
                      style="width:90px;height:90px;">
                      <span class="fas fa-image fa-2x text-body-tertiary"></span>
                    </div>
                  @endif
                </div>
                <div class="col">
                  <span class="badge rounded-pill fw-bold font-secondary ls text-uppercase fs-10 mb-1"
                    style="background:rgba(13,110,253,0.1);color:#0d6efd;">Completed</span>
                  <p class="font-secondary fs-10 text-body-tertiary mb-1">{{ $task['created_at'] ?? '—' }}</p>
                  <h6 class="fw-bold mb-2">{{ $task['title'] ?? 'Task' }}</h6>
                  <div class="row g-0">
                    <div class="col-6">
                      <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block">Data Value</span>
                      <span class="fw-bold font-secondary">$ {{ number_format($price, 2) }}</span>
                    </div>
                    <div class="col-6">
                      <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block">Commission</span>
                      <span class="fw-bold font-secondary">$ {{ number_format($comm, 2) }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @empty
            <div class="border rounded p-6 text-center">
              <span class="fas fa-history fa-3x text-body-tertiary mb-3 d-block"></span>
              <p class="text-body-tertiary font-secondary fs-10 mb-0">No completed evaluations yet.</p>
            </div>
          @endforelse
        </div>{{-- /tk-completed --}}

      </div>{{-- /tab-content --}}

    </div>
  </section>

@endsection
