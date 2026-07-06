@extends('users.layouts.master')

@section('content')

@php
  use App\Models\Funds;
  $uid           = auth()->id();
  $totalDeposit  = Funds::where('user_id', $uid)->where('type', 'deposit')->sum('amount');
  $totalApproved = Funds::where('user_id', $uid)->where('type', 'deposit')->where('status', 'active')->sum('amount');
  $totalPending  = Funds::where('user_id', $uid)->where('type', 'deposit')->where('status', 'pending')->sum('amount');
@endphp

  {{-- Preloader --}}
  <div class="preloader" id="preloader">
    <div class="loader">
      <div class="line-scale-pulse-out-rapid">
        <div></div><div></div><div></div><div></div><div></div>
      </div>
    </div>
  </div>

  <section class="py-6">
    <div class="container">

      {{-- Title --}}
      <div class="text-center mb-4"
        data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll">
        <h5 class="text-uppercase ls fw-black font-secondary">Deposit History</h5>
      </div>

      {{-- Stat row --}}
      <div class="row g-3 mb-4"
        data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">
        <div class="col-4">
          <div class="border rounded p-3 text-center">
            <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block mb-1">Total</span>
            <span class="fw-bold font-secondary">$ {{ number_format($totalDeposit, 2) }}</span>
          </div>
        </div>
        <div class="col-4">
          <div class="border rounded p-3 text-center">
            <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block mb-1">Approved</span>
            <span class="fw-bold font-secondary">$ {{ number_format($totalApproved, 2) }}</span>
          </div>
        </div>
        <div class="col-4">
          <div class="border rounded p-3 text-center">
            <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary d-block mb-1">Pending</span>
            <span class="fw-bold font-secondary">$ {{ number_format($totalPending, 2) }}</span>
          </div>
        </div>
      </div>

      {{-- Transactions card --}}
      <div class="border rounded"
        data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">

        <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
          <h6 class="fw-bold font-secondary mb-0">Recent Transactions</h6>
          <a href="{{ route('user.recharge') }}"
            class="btn btn-dark btn-sm text-uppercase ls fw-black font-secondary">
            + Deposit
          </a>
        </div>

        <div class="table-responsive">
          <table class="table table-borderless mb-0">
            <thead class="border-bottom">
              <tr>
                <th class="text-uppercase ls font-secondary fs-10 text-body-tertiary ps-3">Type</th>
                <th class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Amount</th>
                <th class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Status</th>
                <th class="text-uppercase ls font-secondary fs-10 text-body-tertiary pe-3">Date</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($rechargeHistory as $r)
                @php $status = strtolower($r->status ?? ''); @endphp
                <tr class="border-bottom">
                  <td class="ps-3 font-secondary fs-10">Credit</td>
                  <td class="fw-bold font-secondary">$ {{ number_format($r->amount ?? 0, 2) }}</td>
                  <td>
                    @if ($status === 'active')
                      <span class="badge rounded-pill font-secondary fs-10 px-2 py-1"
                        style="background:rgba(13,110,253,0.1);color:#0d6efd;">Approved</span>
                    @elseif ($status === 'pending')
                      <span class="badge rounded-pill font-secondary fs-10 px-2 py-1"
                        style="background:rgba(255,193,7,0.15);color:#b45309;">Pending</span>
                    @else
                      <span class="badge rounded-pill bg-secondary text-white font-secondary fs-10 px-2 py-1">
                        {{ ucfirst($r->status ?? '—') }}
                      </span>
                    @endif
                  </td>
                  <td class="font-secondary fs-10 text-body-tertiary pe-3">
                    {{ optional($r->created_at)->format('Y-m-d H:i') ?? '—' }}
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="4" class="text-center py-5">
                    <span class="fas fa-inbox fa-2x text-body-tertiary d-block mb-2"></span>
                    <p class="font-secondary fs-10 text-body-tertiary mb-0">No deposit records yet.</p>
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

      </div>

    </div>
  </section>

@endsection
