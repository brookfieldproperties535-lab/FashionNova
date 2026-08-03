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
        <div class="col-sm-11 col-md-9 col-lg-7">

          {{-- Title --}}
          <div class="text-center mb-5"
            data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll">
            <h5 class="text-uppercase ls fw-black font-secondary">Company Introduction</h5>
            <h1 class="text-decoration-underline fs-5 fs-md-4 mb-0 mt-3"
              data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">
              Fashion Forward. Inclusively Designed.
            </h1>
          </div>

          {{-- Body --}}
          <div class="border rounded p-4 p-md-5 font-secondary"
            data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll"
            style="line-height:1.8;">

            <p>
              <strong>Fashion Nova</strong> is a global fashion brand dedicated to making premium
              style accessible, affordable, and inclusive for everyone.
            </p>

            <p>
              Fashion has traditionally been gatekept by luxury price tags, limited size ranges,
              and a narrow definition of beauty. Today's fashion-conscious consumer demands
              something different — the ability to express their personal style with quality
              pieces that celebrate diverse bodies, cultures, and identities at prices they can
              actually afford.
            </p>

            <p>
              The problem is that most fashion retailers lack true inclusivity. Limited sizing
              options exclude millions of customers, exorbitant markups create barriers to
              quality fashion, and outdated production methods harm the environment. Fashion
              should empower, not exclude.
            </p>

            <p>
              We recognized that the future of fashion lies in democratization — when customers
              of all sizes, styles, and budgets can access trendy, quality pieces; express their
              authentic selves; and shop with confidence knowing they're supporting ethical,
              sustainable practices.
            </p>

            <p>
              Fashion Nova created a revolutionary fashion brand powered by inclusive design and
              direct-to-consumer efficiency. Our curated collections from emerging and established
              designers provide the style foundation to deliver confidence and self-expression
              with affordability and authenticity.
            </p>

            <p>
              We serve the global fashion market estimated at $380 billion annually, with
              millions seeking alternative fashion that celebrates individuality. The market
              suffers from limited retailer diversity, restrictive sizing, inflated prices, and
              unsustainable production — resulting in billions in purchasing power being
              redirected to brands that truly understand and celebrate their customers.
            </p>

            <p>
              We deliver premium collections through an intuitive e-commerce platform,
              inclusive sizing (XS-5XL), fast worldwide shipping, and transparent pricing —
              putting designer-quality fashion in the hands of every customer.
            </p>
          </div>

          {{-- Stats --}}
          <div class="row text-center mt-5"
            data-zanim-xs='{"delay":0.6}' data-zanim-trigger="scroll">
            <div class="col-6 col-md-3">
              <h3 class="fw-bold mb-1">2.3M+</h3>
              <p class="font-secondary fs-10 text-body-tertiary mb-0 text-uppercase ls">Customers</p>
            </div>
            <div class="col-6 col-md-3">
              <h3 class="fw-bold mb-1">150+</h3>
              <p class="font-secondary fs-10 text-body-tertiary mb-0 text-uppercase ls">Countries</p>
            </div>
            <div class="col-6 col-md-3 mt-4 mt-md-0">
              <h3 class="fw-bold mb-1">5,000+</h3>
              <p class="font-secondary fs-10 text-body-tertiary mb-0 text-uppercase ls">Styles</p>
            </div>
            <div class="col-6 col-md-3 mt-4 mt-md-0">
              <h3 class="fw-bold mb-1 text-danger">98%</h3>
              <p class="font-secondary fs-10 text-body-tertiary mb-0 text-uppercase ls">Satisfaction</p>
            </div>
          </div>

          {{-- Mission / Vision --}}
          <div class="row g-3 mt-4"
            data-zanim-xs='{"delay":0.7}' data-zanim-trigger="scroll">
            <div class="col-md-6">
              <div class="border rounded p-4 h-100">
                <h6 class="text-uppercase ls fw-bold">Our Mission</h6>
                <p class="font-secondary fs-10 text-body-tertiary mb-0">
                  To democratize fashion by giving every customer access to trendy, quality,
                  affordable clothing in inclusive sizes with ethical production and outstanding
                  service.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="border rounded p-4 h-100">
                <h6 class="text-uppercase ls fw-bold">Our Vision</h6>
                <p class="font-secondary fs-10 text-body-tertiary mb-0">
                  To be the world's most trusted fashion brand where style, inclusivity, and
                  authenticity drive confidence and self-expression for millions of customers
                  globally.
                </p>
              </div>
            </div>
          </div>

          {{-- Pillars --}}
          <div class="row g-3 mt-3"
            data-zanim-xs='{"delay":0.8}' data-zanim-trigger="scroll">
            <div class="col-md-4">
              <div class="border rounded p-4 h-100 text-center">
                <span class="fs-7 d-block mb-2">🔒</span>
                <h6 class="text-uppercase ls fw-bold">Security First</h6>
                <p class="font-secondary fs-10 text-body-tertiary mb-0">
                  Encrypted transactions and verified payment partners protect every order.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="border rounded p-4 h-100 text-center">
                <span class="fs-7 d-block mb-2">💰</span>
                <h6 class="text-uppercase ls fw-bold">Transparent Returns</h6>
                <p class="font-secondary fs-10 text-body-tertiary mb-0">
                  Clear pricing, fair shipping, and a 30-day return window on every order.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="border rounded p-4 h-100 text-center">
                <span class="fs-7 d-block mb-2">🌐</span>
                <h6 class="text-uppercase ls fw-bold">Global Shipping</h6>
                <p class="font-secondary fs-10 text-body-tertiary mb-0">
                  Fast worldwide delivery with local payment options in 150+ countries.
                </p>
              </div>
            </div>
          </div>

          {{-- Contact --}}
          <div class="border rounded p-4 mt-4"
            data-zanim-xs='{"delay":0.9}' data-zanim-trigger="scroll">
            <h6 class="text-uppercase ls fw-bold mb-3">Get In Touch</h6>

            <div class="d-flex align-items-center gap-3 mb-3">
              <span class="fs-7">📧</span>
              <div>
                <p class="font-secondary fs-10 text-body-tertiary text-uppercase ls mb-0">Email</p>
                <p class="fw-bold mb-0 font-secondary">support@fashionnovastore.online</p>
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
                <p class="fw-bold mb-0 font-secondary">2801 East 46th Street, Vernon, California 90058, United States</p>
              </div>
            </div>
          </div>

          {{-- Social --}}
          <div class="text-center mt-4"
            data-zanim-xs='{"delay":1.0}' data-zanim-trigger="scroll">
            <p class="font-secondary fs-10 text-body-tertiary text-uppercase ls mb-3">Follow Us</p>
            <div class="d-flex justify-content-center gap-2">
              <a href="#" class="btn btn-outline-dark btn-sm font-secondary">𝕏</a>
              <a href="#" class="btn btn-outline-dark btn-sm font-secondary">in</a>
              <a href="#" class="btn btn-outline-dark btn-sm font-secondary">f</a>
              <a href="#" class="btn btn-outline-dark btn-sm font-secondary">📷</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

@endsection
