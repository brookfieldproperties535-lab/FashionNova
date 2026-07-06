@extends('users.layouts.master')

@section('content')

@php
  use App\Models\Funds;
  $uid          = auth()->id();
  $totalFunds   = Funds::where('user_id', $uid)->whereIn('type', ['deposit','commission'])->whereIn('status', ['active','deactive'])->sum('amount')
                - Funds::where('user_id', $uid)->where('type', 'withdrawal')->whereIn('status', ['active','deactive'])->sum('amount');
  $transactions = Funds::where('user_id', $uid)->orderBy('created_at', 'desc')->take(10)->get();
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
        <h5 class="text-uppercase ls fw-black font-secondary">Wallet</h5>
      </div>

      {{-- Balance card --}}
      <div class="row justify-content-center mb-4">
        <div class="col-sm-10 col-md-7 col-lg-5">
          <div class="border rounded p-4"
            data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">
            <div class="d-flex justify-content-between align-items-start mb-1">
              <span class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Total Balance</span>
              <span class="font-secondary fs-10 text-body-tertiary">USD</span>
            </div>
            <h2 class="fw-bold mb-3">$ {{ number_format($totalFunds, 2) }}</h2>
            <div class="row g-2">
              <div class="col-6">
                <a href="{{ route('user.recharge') }}"
                  class="btn btn-dark w-100 text-uppercase ls fw-black font-secondary btn-sm py-2">
                  Deposit
                </a>
              </div>
              <div class="col-6">
                <a href="{{ route('user.redemption') }}"
                  class="btn btn-outline-dark w-100 text-uppercase ls fw-black font-secondary btn-sm py-2">
                  Withdraw
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Recent Transactions --}}
      <div class="border rounded"
        data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">

        <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
          <h6 class="fw-bold font-secondary mb-0">Recent Transactions</h6>
          <div class="d-flex gap-2">
            <a href="{{ route('user.recharge-history') }}"
              class="btn btn-outline-dark btn-sm font-secondary fs-10 text-uppercase ls">
              Deposits
            </a>
            <a href="{{ route('user.redemption-history') }}"
              class="btn btn-outline-dark btn-sm font-secondary fs-10 text-uppercase ls">
              Withdrawals
            </a>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-borderless mb-0">
            <thead class="border-bottom">
              <tr>
                <th class="text-uppercase ls font-secondary fs-10 text-body-tertiary ps-3">Type</th>
                <th class="text-uppercase ls font-secondary fs-10 text-body-tertiary">Amount</th>
                <th class="text-uppercase ls font-secondary fs-10 text-body-tertiary pe-3">Date</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($transactions as $tx)
                <tr class="border-bottom">
                  <td class="ps-3">
                    <span class="font-secondary fs-10"
                      style="{{ in_array($tx->type, ['deposit','commission']) ? 'color:#b45309;' : 'color:#0d6efd;' }}">
                      {{ $tx->type === 'commission' ? 'Credit' : ($tx->type === 'deposit' ? 'Credit' : 'Debit') }}
                    </span>
                  </td>
                  <td class="fw-bold font-secondary">$ {{ number_format($tx->amount ?? 0, 2) }}</td>
                  <td class="font-secondary fs-10 text-body-tertiary pe-3">
                    {{ optional($tx->created_at)->format('Y-m-d H:i') ?? '—' }}
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="3" class="text-center py-5">
                    <span class="fas fa-inbox fa-2x text-body-tertiary d-block mb-2"></span>
                    <p class="font-secondary fs-10 text-body-tertiary mb-0">No transactions yet.</p>
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
