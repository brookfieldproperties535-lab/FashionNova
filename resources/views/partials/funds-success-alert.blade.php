{{-- Shared success alert for the recharge/redemption pages — shows the flash message
     and auto-opens the Chatway support widget so the user can confirm the transaction. --}}
@if (session('success'))
  <div class="funds-success-alert" role="alert">
    <div class="funds-success-alert__icon">
      <i class="fas fa-check-circle"></i>
    </div>
    <div class="funds-success-alert__body">
      <p class="funds-success-alert__title font-secondary">{{ session('success') }}</p>
      <p class="funds-success-alert__hint font-secondary">
        Please confirm this transaction with our chat support to speed up processing.
      </p>
    </div>
  </div>

  <style>
    @keyframes fundsSuccessSlideIn {
      from { opacity: 0; transform: translateY(-8px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .funds-success-alert {
      display: flex;
      align-items: flex-start;
      gap: .75rem;
      background: #f0faf3;
      border: 1px solid #bfe8cc;
      border-radius: .6rem;
      padding: 1rem 1.15rem;
      margin-bottom: 1.25rem;
      animation: fundsSuccessSlideIn .35s ease-out;
    }
    .funds-success-alert__icon {
      color: #1e9e5a;
      font-size: 1.35rem;
      line-height: 1.4;
    }
    .funds-success-alert__title {
      margin: 0 0 .2rem;
      font-weight: 700;
      color: #14532d;
      font-size: .85rem;
    }
    .funds-success-alert__hint {
      margin: 0;
      font-size: .78rem;
      color: #3f6b50;
    }
  </style>

  <script>
    (function () {
      var attempts = 0;
      var timer = setInterval(function () {
        attempts++;
        if (window.$chatway && typeof window.$chatway.openChatwayWidget === 'function') {
          window.$chatway.openChatwayWidget();
          clearInterval(timer);
        } else if (attempts > 20) {
          clearInterval(timer);
        }
      }, 300);
    })();
  </script>
@endif
