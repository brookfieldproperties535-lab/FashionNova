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

        {{-- Left: contact info --}}
        <div class="col-lg-5 mb-4 mb-lg-0">
          <div class="text-center text-lg-start mb-4"
            data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll">
            <h5 class="text-uppercase ls fw-black font-secondary text-body-tertiary">Get in touch</h5>
            <h1 class="text-decoration-underline fs-5 fs-md-4 mb-0 mt-3">Contact Fashion Nova</h1>
            <p class="font-secondary fs-10 text-body-tertiary mt-3">
              We love hearing from our community. Reach out for order help, sizing advice, or
              partnership enquiries — our team typically replies within one business day.
            </p>
          </div>

          <div class="border rounded p-4 mb-3"
            data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">
            <div class="d-flex align-items-center gap-3 mb-3">
              <span class="fs-7">📧</span>
              <div>
                <p class="font-secondary fs-10 text-body-tertiary text-uppercase ls mb-0">Email</p>
                <p class="fw-bold mb-0 font-secondary">hello@fashionnova.com</p>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3 mb-3">
              <span class="fs-7">📞</span>
              <div>
                <p class="font-secondary fs-10 text-body-tertiary text-uppercase ls mb-0">Phone</p>
                <p class="fw-bold mb-0 font-secondary">+1 (800) 555-0174</p>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3">
              <span class="fs-7">🏢</span>
              <div>
                <p class="font-secondary fs-10 text-body-tertiary text-uppercase ls mb-0">Headquarters</p>
                <p class="fw-bold mb-0 font-secondary">
                  2801 East 46th Street<br>
                  Vernon, California 90058<br>
                  United States
                </p>
              </div>
            </div>
          </div>

          <div class="border rounded p-4"
            data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">
            <h6 class="text-uppercase ls fw-bold mb-2">Customer Support Hours</h6>
            <p class="font-secondary fs-10 text-body-tertiary mb-1">
              <strong>Mon–Fri:</strong> 6:00 AM – 9:00 PM PT
            </p>
            <p class="font-secondary fs-10 text-body-tertiary mb-1">
              <strong>Saturday:</strong> 7:00 AM – 6:00 PM PT
            </p>
            <p class="font-secondary fs-10 text-body-tertiary mb-0">
              <strong>Sunday:</strong> 8:00 AM – 4:00 PM PT
            </p>
          </div>
        </div>

        {{-- Right: contact form --}}
        <div class="col-lg-6 offset-lg-1">
          <div class="border rounded p-4 p-md-5"
            data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">

            <h5 class="text-uppercase ls fw-black font-secondary mb-4">Send us a message</h5>

            {{-- Display success message if any --}}
            @if (session('success'))
              <div class="alert alert-success font-secondary fs-10 mb-3">
                {{ session('success') }}
              </div>
            @endif

            <form action="mailto:hello@fashionnova.com" method="post" enctype="text/plain">
              <div class="mb-3">
                <label class="form-label text-uppercase ls font-secondary fs-10 text-body-tertiary">Your Name</label>
                <input type="text" name="name" class="form-control" placeholder="Jane Doe" required>
              </div>
              <div class="mb-3">
                <label class="form-label text-uppercase ls font-secondary fs-10 text-body-tertiary">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
              </div>
              <div class="mb-3">
                <label class="form-label text-uppercase ls font-secondary fs-10 text-body-tertiary">Order Number <span class="text-body-tertiary">(optional)</span></label>
                <input type="text" name="order" class="form-control" placeholder="FN-12345">
              </div>
              <div class="mb-4">
                <label class="form-label text-uppercase ls font-secondary fs-10 text-body-tertiary">Message</label>
                <textarea name="message" class="form-control" rows="5" placeholder="How can we help?" required></textarea>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-dark py-3 text-uppercase ls fw-black font-secondary">
                  Send Message
                </button>
              </div>
            </form>

            <p class="font-secondary fs-10 text-body-tertiary mt-3 mb-0 text-center">
              Prefer email? Write to us directly at
              <a href="mailto:hello@fashionnova.com" class="text-body-emphasis fw-bold">hello@fashionnova.com</a>.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
