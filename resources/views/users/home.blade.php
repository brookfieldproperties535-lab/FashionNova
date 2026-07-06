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

  {{-- ============================================ --}}
  {{-- HERO --}}
  {{-- ============================================ --}}
  <section class="py-0" id="fashionHero">
    <div class="container-fluid">
      <div class="row" data-zanim-timeline="{}" data-zanim-trigger="scroll">
        <div class="col-lg-6 px-0 position-relative order-lg-2">
          <div class="h-100 py-9" data-zanim-lg='{"animation":"slide-left","from":{"opacity":0},"delay":0.4}'
            data-zanim-trigger="scroll">
            <div class="bg-holder"
              style="background-image:url({{ asset('user/assets/img/headers/header-16.jpg') }});"
              data-zanim-trigger="scroll" data-zanim-lg='{"animation":"slide-left","delay":0}'>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row flex-center py-6 py-md-8 min-vh-lg-100">
            <div class="col-11 col-sm-10">
              <div class="overflow-hidden">
                <h5 class="text-uppercase ls fw-black text-danger font-secondary"
                  data-zanim-lg='{"delay":0.4}'>New Season Drop</h5>
              </div>
              <div class="overflow-hidden">
                <h2 class="fw-light text-uppercase fs-6 fs-lg-5"
                  data-zanim-lg='{"delay":0.45}'>Express Your<br /><span class="fw-black">Authentic Style</span></h2>
              </div>
              <div class="overflow-hidden">
                <p class="lead font-secondary mt-4 text-body-tertiary"
                  data-zanim-lg='{"delay":0.5}'>
                  Fashion Nova brings runway-inspired looks to your everyday wardrobe. Inclusive
                  sizing from XS to 5XL, premium quality, and free worldwide shipping on every
                  order over $75.
                </p>
              </div>
              <div class="overflow-hidden">
                <div class="mt-3 mt-lg-5" data-zanim-xs='{"delay":0.6}'>
                  <a class="btn btn-dark" href="/register">Create Free Account</a>
                  <a class="btn btn-outline-dark ms-2" href="{{ route('users.about') }}">Our Story</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ============================================ --}}
  {{-- TRUST STATS --}}
  {{-- ============================================ --}}
  <section class="py-7" id="trustStats">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4 mb-4 mb-md-0">
          <h2 class="fw-bold display-5 mb-1">2.3M+</h2>
          <p class="font-secondary fs-10 text-body-tertiary text-uppercase ls">Active Customers</p>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <h2 class="fw-bold display-5 mb-1 text-danger">150+</h2>
          <p class="font-secondary fs-10 text-body-tertiary text-uppercase ls">Countries Served</p>
        </div>
        <div class="col-md-4">
          <h2 class="fw-bold display-5 mb-1">5,000+</h2>
          <p class="font-secondary fs-10 text-body-tertiary text-uppercase ls">Styles in Store</p>
        </div>
      </div>
    </div>
  </section>

  {{-- ============================================ --}}
  {{-- HOW IT WORKS / WHY FASHION NOVA --}}
  {{-- ============================================ --}}
  <section class="bg-light py-7" id="whyFashionNova">
    <div class="container">
      <div class="text-center mb-5">
        <h5 class="text-uppercase ls fw-black font-secondary text-body-tertiary">Why Fashion Nova</h5>
        <h2 class="text-decoration-underline fs-5 fs-md-4 mt-2 mb-0">Fashion that fits every body</h2>
      </div>
      <div class="row g-4">
        <div class="col-md-4" data-zanim-xs='{"delay":0.1,"animation":"zoom-in"}'>
          <div class="border rounded p-4 h-100 text-center">
            <span class="fs-7 d-block mb-2">👗</span>
            <h5 class="text-uppercase ls">Inclusive Sizing</h5>
            <p class="font-secondary fs-10 text-body-tertiary mb-0">
              From XS to 5XL — every body is a Fashion Nova body. Our cuts are designed on real
              people, not runway models.
            </p>
          </div>
        </div>
        <div class="col-md-4" data-zanim-xs='{"delay":0.2,"animation":"zoom-in"}'>
          <div class="border rounded p-4 h-100 text-center">
            <span class="fs-7 d-block mb-2">🚚</span>
            <h5 class="text-uppercase ls">Free Shipping</h5>
            <p class="font-secondary fs-10 text-body-tertiary mb-0">
              Free worldwide shipping on every order over $75. Most orders arrive within 5–7
              business days, with express options at checkout.
            </p>
          </div>
        </div>
        <div class="col-md-4" data-zanim-xs='{"delay":0.3,"animation":"zoom-in"}'>
          <div class="border rounded p-4 h-100 text-center">
            <span class="fs-7 d-block mb-2">↩️</span>
            <h5 class="text-uppercase ls">30-Day Returns</h5>
            <p class="font-secondary fs-10 text-body-tertiary mb-0">
              Don't love it? Send it back within 30 days for a full refund. Free return shipping
              on all US orders.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ============================================ --}}
  {{-- CURATED COLLECTIONS --}}
  {{-- ============================================ --}}
  <section class="py-7" id="collections">
    <div class="container-fluid px-4">
      <div class="text-center mb-5">
        <h5 class="text-uppercase ls fw-black font-secondary text-body-tertiary">Shop by Collection</h5>
        <h2 class="text-decoration-underline fs-5 fs-md-4 mt-2 mb-0">Curated for every occasion</h2>
      </div>
      <div class="row mb-5">
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
          <a class="row g-0" href="{{ route('users.about') }}">
            <div class="col-12 overflow-hidden rounded position-relative">
              <div class="hoverbox">
                <div class="row">
                  <div class="col">
                    <img class="w-100"
                      src="{{ asset('user/assets/img/ecommerce/1.jpg') }}" alt="Tops and Tees"
                      data-zanim-xs='{"delay":0.1,"animation":"zoom-in"}' />
                  </div>
                </div>
                <div class="hoverbox-content hoverbox-background">
                  <div class="hoverbox-bg d-flex flex-center h-100 w-100">
                    <img class="w-100"
                      src="{{ asset('user/assets/img/ecommerce/2.jpg') }}" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 mt-2">
              <h5 class="fs-9">Tops &amp; Tees</h5>
            </div>
            <div class="col-6 mt-2 text-end">
              <h6 class="fw-normal mb-0 d-inline-block">From $24</h6>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
          <a class="row g-0" href="{{ route('users.about') }}">
            <div class="col-12 overflow-hidden rounded position-relative">
              <div class="badge badge-rotate bg-warning"
                data-zanim-xs='{"delay":0.8,"animation":"slide-down"}'>
                <span class='fas fa-star'></span> Best Selling
              </div>
              <div class="hoverbox">
                <div class="row">
                  <div class="col">
                    <img class="w-100"
                      src="{{ asset('user/assets/img/ecommerce/3.jpg') }}" alt="Wear to Work"
                      data-zanim-xs='{"delay":0.1,"animation":"zoom-in"}' />
                  </div>
                </div>
                <div class="hoverbox-content hoverbox-background">
                  <div class="hoverbox-bg d-flex flex-center h-100 w-100">
                    <img class="w-100"
                      src="{{ asset('user/assets/img/ecommerce/4.jpg') }}" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 mt-2">
              <h5 class="fs-9">Wear to Work</h5>
            </div>
            <div class="col-6 mt-2 text-end">
              <h6 class="fw-normal mb-0 d-inline-block">From $48</h6>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
          <a class="row g-0" href="{{ route('users.about') }}">
            <div class="col-12 overflow-hidden rounded position-relative">
              <div class="hoverbox">
                <div class="row">
                  <div class="col">
                    <img class="w-100"
                      src="{{ asset('user/assets/img/ecommerce/5.jpg') }}" alt="Vacation Edit"
                      data-zanim-xs='{"delay":0.1,"animation":"zoom-in"}' />
                  </div>
                </div>
                <div class="hoverbox-content hoverbox-background">
                  <div class="hoverbox-bg d-flex flex-center h-100 w-100">
                    <img class="w-100"
                      src="{{ asset('user/assets/img/ecommerce/6.jpg') }}" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 mt-2">
              <h5 class="fs-9">Vacation Edit</h5>
            </div>
            <div class="col-6 mt-2 text-end">
              <h6 class="fw-normal mb-0 d-inline-block">From $36</h6>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
          <a class="row g-0" href="{{ route('users.about') }}">
            <div class="col-12 overflow-hidden rounded position-relative">
              <div class="hoverbox">
                <div class="row">
                  <div class="col">
                    <img class="w-100"
                      src="{{ asset('user/assets/img/ecommerce/7.jpg') }}" alt="Outerwear"
                      data-zanim-xs='{"delay":0.1,"animation":"zoom-in"}' />
                  </div>
                </div>
                <div class="hoverbox-content hoverbox-background">
                  <div class="hoverbox-bg d-flex flex-center h-100 w-100">
                    <img class="w-100"
                      src="{{ asset('user/assets/img/ecommerce/8.jpg') }}" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 mt-2">
              <h5 class="fs-9">Outerwear</h5>
            </div>
            <div class="col-6 mt-2 text-end">
              <h6 class="fw-normal mb-0 d-inline-block">From $89</h6>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- ============================================ --}}
  {{-- PRESS / AS SEEN IN --}}
  {{-- ============================================ --}}
  <section class="bg-light py-7" id="press">
    <div class="container">
      <div class="text-center mb-5">
        <h5 class="text-uppercase ls fw-black font-secondary text-body-tertiary">As Seen In</h5>
        <h2 class="text-decoration-underline fs-5 fs-md-4 mt-2 mb-0">Loved by the fashion press</h2>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="border rounded p-4 h-100">
            <p class="font-secondary fs-10 text-danger text-uppercase ls fw-bold mb-2">Vogue</p>
            <p class="font-secondary fs-10 text-body-tertiary mb-0 fst-italic">
              "How Fashion Nova Is Democratizing High Fashion With Inclusive Sizing and
              Affordable Luxury."
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="border rounded p-4 h-100">
            <p class="font-secondary fs-10 text-danger text-uppercase ls fw-bold mb-2">Elle</p>
            <p class="font-secondary fs-10 text-body-tertiary mb-0 fst-italic">
              "Fashion Nova's Rise: How Direct-to-Consumer Brands Are Changing the Fashion
              Industry."
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="border rounded p-4 h-100">
            <p class="font-secondary fs-10 text-danger text-uppercase ls fw-bold mb-2">Harper's Bazaar</p>
            <p class="font-secondary fs-10 text-body-tertiary mb-0 fst-italic">
              "From Niche to Mainstream: Fashion Nova Proves Inclusive Fashion Is the Future."
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="border rounded p-4 h-100">
            <p class="font-secondary fs-10 text-danger text-uppercase ls fw-bold mb-2">WWD</p>
            <p class="font-secondary fs-10 text-body-tertiary mb-0 fst-italic">
              "Sustainable Fashion Meets Accessibility: How Brands Like Fashion Nova Are Leading
              the Change."
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ============================================ --}}
  {{-- FEATURED IN IMAGE BANNER --}}
  {{-- ============================================ --}}
  <section class="py-0 overflow-hidden" id="featureBanner">
    <div class="container-fluid">
      <div class="row">
        <div class="col px-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <div class="position-relative overflow-hidden rounded">
            <div class="bg-holder overlay parallax rounded"
              style="background-image:url({{ asset('user/assets/img/headers/header-27.jpg') }});"
              data-rellax-percentage="0.5">
            </div>
            <div class="position-relative py-11 px-3 px-lg-9 text-center text-white">
              <h1 class="fs-7 fs-sm-5 fs-md-4 display-4"
                data-rellax-percentage="0.5" data-rellax-speed="2">
                <span class="d-block overflow-hidden">
                  <span class="d-inline-block" data-zanim-xs='{"delay":0.1}'>make the most of</span>
                </span>
                <span class="d-block overflow-hidden">
                  <span class="d-inline-block" data-zanim-xs='{"delay":0.2}'>your style with</span>
                </span>
                <span class="d-block overflow-hidden">
                  <span class="d-inline-block" data-zanim-xs='{"delay":0.3}'>Fashion Nova</span>
                </span>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ============================================ --}}
  {{-- FINAL CTA --}}
  {{-- ============================================ --}}
  <section class="py-7" id="finalCta">
    <div class="container">
      <div class="row align-items-center text-center text-md-start">
        <div class="col-md-7">
          <h2 class="fw-light">Start your<span class="fw-black"> 30-day free trial</span> today!</h2>
          <h4 class="fw-normal text-body-tertiary font-secondary">
            Free returns, no commitments, cancel anytime.
          </h4>
        </div>
        <div class="col-md-5 text-center mt-4 mt-md-0">
          <a class="btn btn-dark mx-2 mt-2 mt-xl-0" href="/register">
            <span class="fas fa-user me-2"></span> Create Free Account
          </a>
        </div>
      </div>
    </div>
  </section>

@endsection
