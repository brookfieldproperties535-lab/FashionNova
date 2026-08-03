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

  <section class="py-0">
    <div class="container-fluid">
      <div class="row">

        {{-- Right: background image panel --}}
        <div class="col-lg-6 px-0 order-lg-2">
          <div class="sticky-top vh-lg-100 py-9">
            <div class="bg-holder"
              style="background-image:url({{ asset('user/assets/img/headers/header-3.jpg') }});"
              data-zanim-trigger="scroll"
              data-zanim-lg='{"animation":"zoom-out-slide-left","delay":0.4}'>
            </div>
          </div>
        </div>

        {{-- Left: text content --}}
        <div class="col-lg-6 py-6">
          <div class="row h-100 flex-center">
            <div class="col-lg-10">

              {{-- Title --}}
              <div class="mb-5">
                <div class="overflow-hidden">
                  <h1 class="text-decoration-underline fs-5 fs-md-4 mb-0"
                    data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">Terms of use</h1>
                </div>
              </div>

              {{-- Intro dropcap --}}
              <p class="dropcap" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">
                Welcome to Fashion Nova. By creating an account or using our services you agree to the
                rules set out below. These terms govern your use of FashionNova.com and protect the
                interests of every member of our community. For any questions, please contact
                <a href="mailto:support@fashionnovastore.online" class="text-body-emphasis">support@fashionnovastore.online</a>.
              </p>

              {{-- Rule 1 --}}
              <div class="mt-5" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">1. Account Eligibility</h6>
                </div>
                <p class="text-justify">
                  You must be at least 18 years old to create a Fashion Nova account. Registration is
                  free. A valid email, phone number, and referral code from an existing member are
                  required to complete sign-up.
                </p>
              </div>

              {{-- Rule 2 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">2. Opening Balance</h6>
                </div>
                <p class="text-justify">
                  New accounts receive a $5 welcome credit applied automatically. This credit is
                  non-withdrawable and is intended to let you explore the platform.
                </p>
              </div>

              {{-- Rule 3 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">3. One Account Per Person</h6>
                </div>
                <p class="text-justify">
                  Each phone number and email address may only be used to register one account. If
                  duplicate accounts are detected, Fashion Nova reserves the right to freeze every
                  related account and permanently prohibit the holder from using the platform.
                </p>
              </div>

              {{-- Rule 4 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">4. Account Security</h6>
                </div>
                <p class="text-justify">
                  You are responsible for keeping your account password and wallet password
                  confidential. Fashion Nova will never ask for your password. We cannot compensate
                  for losses caused by your failure to safeguard your credentials.
                </p>
              </div>

              {{-- Rule 5 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">5. Daily Evaluations</h6>
                </div>
                <p class="text-justify">
                  Your membership tier determines how many evaluations you can complete each day.

                </p>
              </div>

              {{-- Rule 6 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">6. Commission Structure</h6>
                </div>
                <p class="text-justify">
                  Commission rates are set by your membership level and are credited to your wallet
                  once an evaluation is submitted and confirmed. Standard items follow your tier's
                  percentage; selected items carry a fixed higher rate as displayed on the
                  evaluation screen.
                </p>
              </div>

              {{-- Rule 7 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">7. Minimum Balance</h6>
                </div>
                <p class="text-justify">
                  A minimum balance of $50 is required in your wallet before you can start a new
                  evaluation. If your balance is below this threshold, please recharge your account
                  first.
                </p>
              </div>

              {{-- Rule 8 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">8. Deposit Verification</h6>
                </div>
                <p class="text-justify">
                  Each deposit must be confirmed with Customer Support using the reference shown on
                  your dashboard. Fashion Nova is not responsible for funds sent to an unverified
                  address. All deposits remain pending until approved by our team.
                </p>
              </div>

              {{-- Rule 9 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">9. Account Suspension</h6>
                </div>
                <p class="text-justify">
                  If an account is suspended, our compliance team will review the case and decide
                  whether to reinstate the account. Repeated violations will result in permanent
                  removal.
                </p>
              </div>

              {{-- Rule 10 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">10. Withdrawals</h6>
                </div>
                <p class="text-justify">
                  You may request a withdrawal once per day after completing all evaluations for
                  that day. Each withdrawal is reviewed by our finance team and processed within
                  one business day.
                </p>
              </div>

              {{-- Rule 11 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">11. Item Allocation</h6>
                </div>
                <p class="text-justify">
                  Fashion items are allocated to your account based on your membership tier and
                  availability. Higher tiers receive access to a wider selection of premium
                  evaluations.
                </p>
              </div>

              {{-- Rule 12 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">12. Withdrawal Confirmation</h6>
                </div>
                <p class="text-justify">
                  Please confirm your wallet address with Customer Support after submitting a
                  withdrawal. Approved withdrawals are paid out the same business day.
                </p>
              </div>

              {{-- Rule 13 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">13. Welcome Credit</h6>
                </div>
                <p class="text-justify">
                  The $5 welcome credit is provided once per new account. Pending withdrawals may
                  be cancelled if a member redeems the welcome credit multiple times from
                  duplicate accounts.
                </p>
              </div>

              {{-- Rule 14 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">14. On-Time Submissions</h6>
                </div>
                <p class="text-justify">
                  Each evaluation must be submitted within the time limit shown on the screen.
                  Failure to complete evaluations on time without a valid reason may result in
                  account restrictions.
                </p>
              </div>

              {{-- Rule 15 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">15. Platform Integrity</h6>
                </div>
                <p class="text-justify">
                  Any attempt to disrupt the platform, exploit loopholes, or interfere with other
                  members will result in permanent suspension and possible legal action.
                </p>
              </div>

              {{-- Rule 16 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">16. Identity Verification</h6>
                </div>
                <p class="text-justify">
                  Fashion Nova may request identity verification at any time to comply with
                  anti-money-laundering and anti-terrorism regulations. Members must cooperate
                  with all reasonable verification requests.
                </p>
              </div>

              {{-- Rule 17 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">17. Extension Requests</h6>
                </div>
                <p class="text-justify">
                  Members may request a one-time extension on an active evaluation. Repeated
                  extension requests may affect your credibility score.
                </p>
              </div>

              {{-- Rule 18 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">18. Accurate Personal Information</h6>
                </div>
                <p class="text-justify">
                  You must provide accurate personal and wallet information when registering and
                  when submitting withdrawals. False information will result in permanent
                  account suspension.
                </p>
              </div>

              {{-- Rule 19 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">19. Compliance &amp; Verification</h6>
                </div>
                <p class="text-justify">
                  If requested compliance documentation is not provided in time, withdrawal
                  requests may be declined until verification is complete.
                </p>
              </div>

              {{-- Rule 20 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">20. Feedback &amp; Suggestions</h6>
                </div>
                <p class="text-justify">
                  We welcome your feedback. Members may submit suggestions or complaints through
                  Customer Support, and the team will respond within a reasonable time.
                </p>
              </div>

              {{-- Rule 21 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">21. Data Protection</h6>
                </div>
                <p class="text-justify">
                  Fashion Nova protects every member's personal information in line with our
                  Privacy Policy and applicable data-protection laws.
                </p>
              </div>

              {{-- Rule 22 --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">22. Updates to These Terms</h6>
                </div>
                <p class="text-justify">
                  Fashion Nova may update these terms from time to time. Material changes will be
                  announced on the platform and communicated to members by email.
                </p>
              </div>

              {{-- Rule 23 — Contact --}}
              <div class="mt-4" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-uppercase ls">23. Contact</h6>
                </div>
                <blockquote class="blockquote text-center border p-5 px-xl-7 rounded mt-3">
                  <p class="blockquote-content">
                    For any questions about these terms, please contact our Customer Support team.
                    Every member of Fashion Nova is expected to follow the rules above.
                  </p>
                  <footer class="blockquote-footer mt-0">
                    <span class="text-body-highlight">Fashion Nova,</span> Customer Support &amp; Compliance
                  </footer>
                </blockquote>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
