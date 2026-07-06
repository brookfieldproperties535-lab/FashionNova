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

        {{-- Right: background image panel (order-lg-2 pushes it right on desktop) --}}
        <div class="col-lg-6 px-0 order-lg-2">
          <div class="sticky-top vh-lg-100 py-9">
            <div class="bg-holder"
              style="background-image:url({{ asset('user/assets/img/headers/header-16.jpg') }});"
              data-zanim-trigger="scroll"
              data-zanim-lg='{"animation":"zoom-out-slide-left","delay":0.4}'>
            </div>
          </div>
        </div>

        {{-- Left: text content --}}
        <div class="col-lg-6 py-6">
          <div class="row h-100 flex-center">
            <div class="col-lg-10">

              <div class="mb-5">
                <div class="overflow-hidden">
                  <h1 class="text-decoration-underline fs-5 fs-md-4 mb-0"
                    data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">our story</h1>
                </div>
              </div>

              <p class="dropcap" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">
                Fashion Nova was founded in 2002 as a single boutique store in the Panorama City shopping center
                of Los Angeles, California. What began as a bold vision to bring runway-inspired styles to everyday
                people at prices anyone could afford quickly transformed into one of the fastest-growing and most
                influential fashion brands in the world. Over two decades, we have built a global community of
                trend-setters, style icons, and fashion lovers spanning more than 200 countries. Today, Fashion Nova
                is recognized as one of the most-searched fashion brands on Google — a distinction earned through
                our relentless commitment to delivering the latest trends within days of their debut.
              </p>

              <div class="row mt-5">
                <div class="col-6">
                  <img class="rounded img-fluid"
                    src="{{ asset('user/assets/img/gallery/15.jpg') }}" alt="Fashion Nova Style"
                    data-zanim-xs='{"delay":0.6,"animation":"zoom-in"}' data-zanim-trigger="scroll" />
                </div>
                <div class="col-6">
                  <img class="rounded img-fluid"
                    src="{{ asset('user/assets/img/gallery/16.jpg') }}" alt="Fashion Nova Community"
                    data-zanim-xs='{"delay":0.7,"animation":"zoom-in"}' data-zanim-trigger="scroll" />
                </div>
              </div>

              <blockquote class="blockquote text-center my-6 border p-5 px-xl-7 rounded"
                data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                <p class="blockquote-content">Fashion is not about being perfect. It is about expressing who you
                  are and feeling confident doing it. That has always been the heart of Fashion Nova — style for
                  everyone, at every size, at every price.</p>
                <footer class="blockquote-footer mt-0">
                  <span class="text-body-highlight">Richard Saghian,</span> Founder &amp; CEO, Fashion Nova
                </footer>
              </blockquote>

            </div>

            <div class="col-xl-4 text-center" data-zanim-xs='{"delay":0.2}' data-zanim-trigger="scroll">
              <h2 class="fs-6 fs-sm-5 mb-1">20+ Years</h2>
              <p class="fst-italic text-body-tertiary">In the Fashion Industry</p>
            </div>

            <div class="col-xl-4 text-center mt-4 mt-xl-0" data-zanim-xs='{"delay":0.2}' data-zanim-trigger="scroll">
              <h2 class="fs-6 fs-sm-5 mb-1 text-danger">75 Million</h2>
              <p class="fst-italic text-body-tertiary">Customers Worldwide</p>
            </div>

            <div class="col-lg-10 mt-6">
              <img class="rounded img-fluid"
                src="{{ asset('user/assets/img/headers/header-27.jpg') }}" alt="Fashion Nova Global"
                data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />

              <div class="row gx-4 mt-6">
                <div class="col-md col-lg-12 col-xl-6">
                  <div class="overflow-hidden">
                    <h6 class="text-uppercase ls"
                      data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">INNOVATION</h6>
                  </div>
                  <div class="overflow-hidden">
                    <p class="text-justify" data-zanim-xs='{"delay":0.2}' data-zanim-trigger="scroll">
                      Fashion Nova pioneered a digital-first, social-commerce model long before it became
                      an industry standard. By leveraging a vast network of influencers and a lightning-fast
                      supply chain, we consistently bring fresh collections to our customers within days
                      of the latest trends emerging — redefining what speed-to-market means in fashion.
                    </p>
                  </div>
                </div>
                <div class="col-md col-lg-12 col-xl-6">
                  <div class="overflow-hidden">
                    <h6 class="text-uppercase ls"
                      data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">COMMUNITY</h6>
                  </div>
                  <div class="overflow-hidden">
                    <p class="text-justify" data-zanim-xs='{"delay":0.2}' data-zanim-trigger="scroll">
                      At Fashion Nova, our community is everything. From size-inclusive collections that
                      celebrate every body type to our global network of everyday style creators, we have
                      built a brand rooted in inclusivity, self-expression, and empowerment. Our customers
                      are not just shoppers — they are co-creators of the Fashion Nova story.
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
