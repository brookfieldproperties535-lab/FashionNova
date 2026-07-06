@extends('users.layouts.master')

@section('content')
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
    <main class="main min-vh-100" id="top">

        <!-- ============================================--><!-- Preloader ==================================-->
        <div class="preloader" id="preloader">
            <div class="loader">
                <div class="line-scale-pulse-out-rapid">
                    <div> </div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div> </div>
                </div>
            </div>
        </div><!-- ============================================--><!-- End of Preloader ===========================-->

        <!-- ============================================--><!-- <section> begin ============================-->
        <section class="py-0" id="LandingHeader">

            <div class="container-fluid">
                <div class="row" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="col-lg-6 px-0 position-relative">
                        <div class="h-100 py-9" data-zanim-lg='{"animation":"slide-right","from":{"opacity":0},"delay":0.4}'
                            data-zanim-trigger="scroll">
                            <div class="bg-holder"
                                style="background-image:url({{ asset('user/assets/img/headers/header-3.jpg') }});"
                                data-zanim-trigger="scroll" data-zanim-lg='{"animation":"slide-right","delay":0}'></div>
                            <!--/.bg-holder-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row flex-center py-6 py-md-8">
                            <div class="col-11 col-sm-10">
                                <div class="overflow-hidden">
                                    <h2 class="fw-light text-uppercase fs-6 fs-lg-5" data-zanim-lg='{"delay":0.4}'>Express
                                        Your<br /><span class="fw-black"> Authentic Style</span></h2>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="lead font-secondary mt-4 text-body-tertiary" data-zanim-lg='{"delay":0.5}'>
                                        Fashion Nova brings runway-inspired looks to your everyday
                                        wardrobe. Inclusive sizing from XS to 5XL, premium quality, and
                                        free worldwide shipping on every order over $75.</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="mt-3 mt-lg-5" data-zanim-xs='{"delay":0.6}'><a class="btn btn-danger"
                                            href="/register">create account</a>
                                        <h6 class="fw-normal mt-2 text-body-tertiary">Have an account?<a
                                                class="text-body-highlight fw-bold ms-1" href="{{ route('user.login') }}">Sign in<span
                                                    class="d-inline-block ms-1">&xrarr;</span></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================--><!-- ============================================-->

        <!-- ============================================--><!-- <section> begin ============================-->
        <section class="text-center bg-light" id="LandingSignup">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                            <h4 class="fw-bold mb-3" data-zanim-xs='{"delay":0.2}'>Your Personal Stylist</h4>
                        </div>
                        <div class="overflow-hidden">
                            <p class="lead font-secondary text-body-tertiary" data-zanim-xs='{"delay":0.3}'>Fashion Nova
                                is the inclusive fashion destination for every body. Our online
                                experience goes deeper with style guides, curated collections, and a
                                personal stylist in your pocket.</p>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================--><!-- ============================================-->

        <!-- ============================================--><!-- <section> begin ============================-->
        <section class="py-0" id="ecommerceProducts">
            <div class="container-fluid px-4">
                <div class="row mb-5">
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4"><a class="row g-0"
                            href="{{ route('users.about') }}">
                            <div class="col-12 overflow-hidden rounded position-relative" data-zanim-timeline='{"delay":0}'
                                data-zanim-trigger="scroll">
                                <div class="hoverbox">
                                    <div class="row">
                                        <div class="col"><img class="w-100"
                                                src="{{ asset('user/assets/img/ecommerce/1.jpg') }}" alt="Tops and Tees"
                                                data-zanim-xs='{"delay":0.1,"animation":"zoom-in"}' /></div>
                                    </div>
                                    <div class="hoverbox-content hoverbox-background">
                                        <div class="hoverbox-bg d-flex flex-center h-100 w-100"><img class="w-100"
                                                src="{{ asset('user/assets/img/ecommerce/2.jpg') }}" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mt-2">
                                <h5 class="fs-9">Tops &amp; Tees</h5>
                            </div>
                            <div class="col-6 mt-2 text-end">
                                <h6 class="fw-normal mb-0 d-inline-block">From $24</h6>
                            </div>
                        </a></div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4"><a class="row g-0"
                            href="{{ route('users.about') }}">
                            <div class="col-12 overflow-hidden rounded position-relative"
                                data-zanim-timeline='{"delay":0.1}' data-zanim-trigger="scroll">
                                <div class="badge badge-rotate bg-warning"
                                    data-zanim-xs='{"delay":0.8,"animation":"slide-down"}'><span class='fas fa-star'></span>
                                    Best selling</div>
                                <div class="hoverbox">
                                    <div class="row">
                                        <div class="col"><img class="w-100"
                                                src="{{ asset('user/assets/img/ecommerce/3.jpg') }}" alt="Wear to Work"
                                                data-zanim-xs='{"delay":0.1,"animation":"zoom-in"}' /></div>
                                    </div>
                                    <div class="hoverbox-content hoverbox-background">
                                        <div class="hoverbox-bg d-flex flex-center h-100 w-100"><img class="w-100"
                                                src="{{ asset('user/assets/img/ecommerce/4.jpg') }}" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mt-2">
                                <h5 class="fs-9">Wear to Work</h5>
                            </div>
                            <div class="col-6 mt-2 text-end">
                                <h6 class="fw-normal mb-0 d-inline-block">From $48</h6>
                                <h6 class="fw-normal text-body-secondary"><span
                                        class="d-inline-block"><del>$78</del></span></h6>
                            </div>
                        </a></div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4"><a class="row g-0"
                            href="{{ route('users.about') }}">
                            <div class="col-12 overflow-hidden rounded position-relative"
                                data-zanim-timeline='{"delay":0.2}' data-zanim-trigger="scroll">
                                <div class="hoverbox">
                                    <div class="row">
                                        <div class="col"><img class="w-100"
                                                src="{{ asset('user/assets/img/ecommerce/5.jpg') }}" alt="Vacation Edit"
                                                data-zanim-xs='{"delay":0.1,"animation":"zoom-in"}' /></div>
                                    </div>
                                    <div class="hoverbox-content hoverbox-background">
                                        <div class="hoverbox-bg d-flex flex-center h-100 w-100"><img class="w-100"
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
                                <h6 class="fw-normal text-body-secondary"><span
                                        class="d-inline-block"><del>$52</del></span></h6>
                            </div>
                        </a></div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4"><a class="row g-0"
                            href="{{ route('users.about') }}">
                            <div class="col-12 overflow-hidden rounded position-relative"
                                data-zanim-timeline='{"delay":0.3}' data-zanim-trigger="scroll">
                                <div class="hoverbox">
                                    <div class="row">
                                        <div class="col"><img class="w-100"
                                                src="{{ asset('user/assets/img/ecommerce/7.jpg') }}" alt="Outerwear"
                                                data-zanim-xs='{"delay":0.1,"animation":"zoom-in"}' /></div>
                                    </div>
                                    <div class="hoverbox-content hoverbox-background">
                                        <div class="hoverbox-bg d-flex flex-center h-100 w-100"><img class="w-100"
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
                        </a></div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================--><!-- ============================================-->

        <!-- ============================================--><!-- <section> begin ============================-->
        <section class="text-center bg-light" id="LandingSignup2">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                            <h4 class="fw-bold mb-3" data-zanim-xs='{"delay":0.2}'>Curated for Every Occasion</h4>
                        </div>
                        <div class="overflow-hidden">
                            <p class="lead font-secondary text-body-tertiary" data-zanim-xs='{"delay":0.3}'>From
                                everyday essentials to statement pieces, our collections are designed
                                to fit every body, every budget, and every moment.</p>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================--><!-- ============================================-->



        <!-- ============================================--><!-- <section> begin ============================-->
        <section class="py-3" id="LandingFeatures">
            <div class="container-fluid">
                <div class="row" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="col-lg-6 col-xl-3 mt-3 mt-xl-0 pe-lg-2"
                        data-zanim-xs='{"delay":0.1,"animation":"zoom-in"}'>
                        <div class="hoverbox min-vh-50 h-100 py-6">
                            <div class="bg-holder rounded"
                                style="background-image:url({{ asset('user/assets/img/headers/header-12.jpg') }});"></div>
                            <!--/.bg-holder-->
                            <div class="hoverbox-content d-flex bg-black justify-content-center rounded">
                                <div class="align-self-center px-4 px-lg-6 text-center"><span
                                        class="fa fa-signal text-white fs-7 mb-2"></span>
                                    <h4 class="mb-1 text-white">New Arrivals Weekly</h4>
                                    <p class="px-3 font-secondary text-body-tertiary">Fresh drops every week
                                        inspired by the latest runway trends and what our community
                                        is wearing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mt-3 mt-xl-0 px-xl-2 ps-lg-2"
                        data-zanim-xs='{"delay":0.2,"animation":"zoom-in"}'>
                        <div class="position-relative min-vh-50 h-100">
                            <div class="bg-holder rounded"
                                style="background-image:url({{ asset('user/assets/img/headers/header-16.jpg') }});"></div>
                            <!--/.bg-holder-->
                            <a class="position-absolute bottom-0 end-0 mb-3 me-4" href="{{ route('users.about') }}">
                                <svg width="45" height="45"
                                    xmlns="http://www.w3.org/2000/svg" viewbox="0 0 274.19 274.19"
                                    data-zanim-svg='{"duration":2,"ease":"CubicBezier","trigger":"scroll"}'>
                                    <defs>
                                        <style>
                                            .play-path {
                                                fill: none;
                                                stroke: #ffffff;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 12px;
                                            }
                                        </style>
                                    </defs>
                                    <g>
                                        <path class="play-path"
                                            d="M208.31,29.4A129.12,129.12,0,1,1,137.1,8m-1.48,170.53L199.94,137,104.07,79.46v113">
                                        </path>
                                    </g>
                                </svg></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mt-3 mt-xl-0 px-xl-2 pe-lg-2"
                        data-zanim-xs='{"delay":0.3,"animation":"zoom-in"}'>
                        <div class="position-relative min-vh-50 h-100 py-6 d-flex justify-content-center">
                            <div class="bg-holder overlay overlay-0 rounded"
                                style="background-image:url({{ asset('user/assets/img/headers/header-27.jpg') }});"></div>
                            <!--/.bg-holder-->
                            <div class="position-relative px-4 px-xl-5 text-center align-self-center w-100"><span
                                    class="far fa-compass text-white text-opacity-85 fs-5 mb-4"></span>
                                <h4 class="mb-2 text-white">Explore &amp; discover</h4>
                                <p class="font-secondary text-body-tertiary">shop our latest collections,
                                    limited drops, and exclusive member-only styles.</p><a
                                    class="btn btn-link text-danger fw-bold" href="{{ route('users.about') }}">shop collection &xrarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mt-3 mt-xl-0 ps-lg-2"
                        data-zanim-xs='{"delay":0.4,"animation":"zoom-in"}'>
                        <div class="position-relative min-vh-50 h-100 py-6">
                            <div class="bg-holder rounded"
                                style="background-image:url({{ asset('user/assets/img/headers/header-47.jpg') }});">
                            </div><!--/.bg-holder-->
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================--><!-- ============================================-->



        <!-- ============================================--><!-- <section> begin ============================-->
        <section class="py-0 overflow-hidden" id="LandingBanner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col px-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="position-relative overflow-hidden rounded">
                            <div class="bg-holder overlay parallax rounded"
                                style="background-image:url({{ asset('user/assets/img/headers/header-3.jpg') }});"
                                data-rellax-percentage="0.5"></div><!--/.bg-holder-->
                            <div class="position-relative py-11 px-3 px-lg-9">
                                <h1 class="text-white fs-7 fs-sm-5 fs-md-4 parallax display-4"
                                    data-rellax-percentage="0.5" data-rellax-speed="2"><span
                                        class="d-block overflow-hidden"><span class="d-inline-block"
                                            data-zanim-xs='{"delay":0.1}'>express yourself with</span></span><span
                                        class="d-block overflow-hidden"><span class="d-inline-block"
                                            data-zanim-xs='{"delay":0.2}'>your style and</span></span><span
                                        class="d-block overflow-hidden"><span class="d-inline-block"
                                            data-zanim-xs='{"delay":0.3}'>Fashion Nova</span></span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================--><!-- ============================================-->



        <!-- ============================================--><!-- <section> begin ============================-->
        <section class="overflow-hidden bg-light" id="landing-features-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="row bg-body rounded py-7 py-xl-9 px-5 px-md-0 font-secondary">
                            <div class="col-md-9 col-lg-6 offset-md-1 offset-lg-2" data-zanim-timeline="{}"
                                data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h4 class="mb-sm-1 mb-md-2" data-zanim-xs='{"delay":0.1}'>browse, save, shop</h4>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mb-4 mb-lg-6" data-zanim-xs='{"delay":0.2}'>create an account,
                                        save your favorite looks, and check out in seconds. Get
                                        personalized style picks delivered to your inbox.</p>
                                </div>
                                <div class="overflow-hidden">
                                    <h4 class="mb-sm-1 mb-md-2" data-zanim-xs='{"delay":0.4}'>connect and share</h4>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mb-4 mb-lg-6" data-zanim-xs='{"delay":0.5}'>join millions of
                                        fashion lovers in the Fashion Nova community, share your fits,
                                        stay inspired, and discover new styles every day.</p>
                                </div>
                                <div class="overflow-hidden">
                                    <h4 class="mb-sm-1 mb-md-2" data-zanim-xs='{"delay":0.7}'>style advice</h4>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mb-0" data-zanim-xs='{"delay":0.8}'>get the best looks
                                        for your body and budget from the Fashion Nova style team
                                        anytime you want — and build a wardrobe you love.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-md-absolute end-0 top-0 w-md-50" data-parallax="data-parallax"
                        data-rellax-speed="5" data-rellax-percentage="0.5"><img class="shadow-lg rounded img-fluid"
                            src="{{ asset('user/assets/img/headers/header-12.jpg') }}" alt="" /></div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================--><!-- ============================================-->



        <!-- ============================================--><!-- <section> begin ============================-->
        <section class="py-8" id="LandingDownload">
            <div class="container">
                <div class="row flex-center">
                    <div class="col-md-7 text-center text-md-start">
                        <h2 class="fw-light">Start your<span class="fw-black"> 30-day free trial</span> today!</h2>
                        <h4 class="fw-normal text-body-tertiary">free returns, no commitments, cancel anytime</h4>
                    </div>
                    <div class="col-md-5 text-center mt-4 mt-md-0"><a class="btn btn-outline-dark mx-2 mt-2 mt-xl-0"
                            href="#!"><span class="fab fa-apple me-3" data-fa-transform="grow-8"></span>app
                            store</a><a class="btn btn-outline-dark mx-2 mt-2 mt-xl-0" href="#!"><span
                                class="fab fa-google-play me-3" data-fa-transform="grow-8"></span>play store</a></div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================--><!-- ============================================-->



        <!-- ============================================--><!-- <section> begin ============================-->
        <section class="py-8" id="LandingPremium">
            <div class="bg-holder overlay overlay-0"
                style="background-image:url({{ asset('user/assets/img/headers/header-47.jpg') }});"></div><!--/.bg-holder-->
            <div class="container">
                <div class="row flex-center">
                    <div class="col-lg-6">
                        <h1 class="fw-black text-white mb-0">Fashion Nova<span class="fw-light"> membership</span></h1>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="row text-nowrap">
                            <div class="col-sm-auto">
                                <ul class="ps-0 bullet-inside font-secondary mb-0 text-white text-opacity-85">
                                    <li>Free shipping on every order</li>
                                    <li>Early access to new drops</li>
                                    <li>Exclusive member-only styles</li>
                                    <li>Birthday gift card</li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="ps-0 bullet-inside font-secondary mb-0 text-white text-opacity-85">
                                    <li>Free returns &amp; exchanges</li>
                                    <li>Members-only sale events</li>
                                    <li>Personal stylist recommendations</li>
                                    <li>Priority customer support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div
                        class="col-12 overflow-hidden text-center border-top border-bottom border-secondary border-opacity-50 py-4 mt-5">
                        <a class="font-secondary text-uppercase text-warning fw-black fs-8" href="/register">
                            <div data-zanim-xs='{"delay":0.1,"from":{"opacity":0,"letter-spacing":"0.8em"},"to":{"letter-spacing":"0.2em","opacity":1}}'
                                data-zanim-trigger="scroll">Become a Member</div>
                        </a></div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================--><!-- ============================================-->

    </main>
    <!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->
@endsection
