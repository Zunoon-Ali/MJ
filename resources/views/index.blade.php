@extends('layouts.app')

@section('title', 'Home - Veridan Roots')

@section('content')

<!-- <div id="loader">
    <div class="loader-box">
        <div class="first loader-column">
            <span>
                ROOTS
            </span>
            <span>
                WASH
            </span>
            <span>
                HERBS
            </span>
            <span>
                CARE
            </span>
            <span>
                GROW
            </span>
            <span>
                PURE
            </span>
            <span>
                ROOTS
            </span>
            <span>
                WASH
            </span>
            <span>
                SHINE
            </span>
            <span>
                ROOTS
            </span>
            <span>
                WASH
            </span>
            <span>
                HERBS
            </span>
            <span>
                CARE
            </span>
            <span>
                GROW
            </span>
            <span>
                PURE
            </span>
        </div>
        <div class="second loader-column">
            <span>
                HERBS
            </span>
            <span>
                WASH
            </span>
            <span>
                ROOTS
            </span>
            <span>
                PURE
            </span>
            <span>
                CARE
            </span>
            <span>
                GROW
            </span>
            <span>
                SHINE
            </span>
            <span>
                ROOTS
            </span>
            <span>
                WASH
            </span>
            <span>
                HERBS
            </span>
            <span>
                PURE
            </span>
            <span>
                ROOTS
            </span>
            <span>
                WASH
            </span>
            <span>
                CARE
            </span>
            <span>
                GROW
            </span>
        </div>
        <div class="first loader-column">
            <span>
                ROOTS
            </span>
            <span>
                WASH
            </span>
            <span>
                HERBS
            </span>
            <span>
                CARE
            </span>
            <span>
                GROW
            </span>
            <span>
                PURE
            </span>
            <span>
                ROOTS
            </span>
            <span>
                WASH
            </span>
            <span>
                SHINE
            </span>
            <span>
                ROOTS
            </span>
            <span>
                WASH
            </span>
            <span>
                HERBS
            </span>
            <span>
                CARE
            </span>
            <span>
                GROW
            </span>
            <span>
                PURE
            </span>
        </div>
        <div class="second loader-column">
            <span>
                HERBS
            </span>
            <span>
                WASH
            </span>
            <span>
                ROOTS
            </span>
            <span>
                PURE
            </span>
            <span>
                CARE
            </span>
            <span>
                GROW
            </span>
            <span>
                SHINE
            </span>
            <span>
                ROOTS
            </span>
            <span>
                WASH
            </span>
            <span>
                HERBS
            </span>
            <span>
                PURE
            </span>
            <span>
                ROOTS
            </span>
            <span>
                WASH
            </span>
            <span>
                CARE
            </span>
            <span>
                GROW
            </span>
        </div>
        <div class="loader-image">
            <img src="{{ url('images/product9.png') }}" alt="Root Herb Care" class="loader-img">
        </div>
    </div>
</div> -->


<!-- banner start -->
<!-- banner start -->
<section class="banner_sec">
    <img src="{{ asset('images/curve1.png') }}" alt="curve-img" class="curve-img1" />
    <img src="{{ asset('images/light.png') }}" alt="light-img" class="light-img" />
    <img src="{{ asset('images/light1.png') }}" alt="light-img" class="light-img1" />

    <div class="container hei">
        <div class="banner-box hei">
            <img src="{{ asset('images/lines1.png') }}" alt="lines-img" class="lines-img1">
            <div class="row hei align-items-center justify-content-center banner-row">

                <!-- Left Card -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 p-0 banner-column">
                    <div class="banner-card1 wow fadeInLeft">
                        <svg viewBox="0 0 600 600">
                            <path id="curve1" d="M 585 430 C 580 191 545 63 321 22 C 88 30 5 148 24 427" fill="transparent" />
                            <text>
                                <textPath href="#curve1" startOffset="50%" text-anchor="middle" style="fill: #377f52; font-family: Funky;">
                                    {{ $home->home_banner_leftCard_textpath ?? 'VERIDIAN ROOTS PURE HAIR WELLNESS' }}
                                </textPath>
                            </text>
                        </svg>
                        <img src="{{ asset('images/lines.png') }}" alt="lines-img" class="lines-img">
                        <img src="{{ asset('images/flower-card.png') }}" alt="flower-card" class="flower-card">
                        <h1>{{ $home->home_banner_leftCard_h1 ?? 'Verdian Roots' }}</h1>
                        <p>{{ $home->home_banner_leftCard_p ?? 'Welcome to the world of herbal hair care, where potent botanicals meet luxurious self-care. Discover the natural route to stronger, shinier hair.' }}</p>
                        <a href="{{ $home->home_banner_leftCard_a ?? '#about_sec' }}" class="theme-btn">
                            Read More
                            <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                        </a>
                    </div>
                </div>

                <!-- Middle Card -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 p-0 banner-column">
                    <div class="banner-card2 wow fadeInUp">
                        <div class="banner-card2-image">
                            <a href="#">
                                <img src="{{ $home && $home->home_banner_middleCard_img ? asset('storage/' . $home->home_banner_middleCard_img) : asset('images/product3.png') }}" alt="banner-card2-img" class="banner-card2-img">
                            </a>
                        </div>
                        <div class="banner-card2-text">
                            <!-- @php
                            $middleSpan = $home->home_banner_middleCard_span;
                            $spanWords = explode(' ', $middleSpan);
                            @endphp
                            @foreach($spanWords as $word)
                            <span>{{ $word }}</span>
                            @endforeach -->
                            <span>Verdian</span><span>Roots</span><span>Pure</span><span>Herb</span><span>Oil</span>
                        </div>
                    </div>
                </div>

                <!-- Right Card -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 p-0 banner-column">
                    <div class="banner-card3 wow fadeInRight">
                        <div class="banner-card3-image">
                            <a href="#">
                                <img src="{{ $home && $home->home_banner_rightCard_img ? asset('storage/' . $home->home_banner_rightCard_img) : asset('images/home-box-3.png') }}" alt="banner-card3-img" class="banner-card3-img">
                            </a>
                        </div>
                        <div class="banner-card3-curve-text">
                            <svg viewBox="0 0 600 600">
                                <path id="curve" d="M 585 270 C 561 472 545 637 315 676 C 68 643 39 473 24 273" fill="transparent" />
                                <text>
                                    <textPath href="#curve" startOffset="50%" text-anchor="middle" style="fill: #fff; font-family: Funky;">
                                        {{ $home->home_banner_rightCard_textpath ?? 'Discover your healthiest hair yet. Experience the natural difference with Veridian Roots. Shop now!' }}
                                    </textPath>
                                </text>
                            </svg>
                        </div>
                        <img src="{{ asset('images/lines1.png') }}" alt="lines-img" class="lines-img1">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- banner end -->


<!-- banner end -->

<!-- about_sec start -->
<!-- about_sec start -->
<section class="about_sec sec" id="about_sec">
    <span class="about-healz">Verdian Roots</span>

    <img src="{{ asset('images/about-bg.png') }}" alt="about-bg" class="background-bg" />

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 col-12">
                <div class="about-text">
                    <img src="{{ asset('images/green-line.png') }}" alt="green-line" class="green-line">
                    <img src="{{ asset('images/green-line1.png') }}" alt="green-line1" class="green-line1">

                    <p class="black">{{ $home->home_about_p1 ?? 'Life And Leaf Healz Lifestyle' }}</p>

                    <h2>{{ $home->home_about_h2 ?? "It's all about the alternatives" }}</h2>

                    <p>
                        {{ $home->home_about_p2}}
                    </p>

                    <img src="{{ $home && $home->home_about_img ? asset('storage/' . $home->home_about_img) : asset('images/about-slider1.png') }}" alt="about" class="about" data-aos="fade-up" />

                    <a href="{{ $home->home_about_a ?? url('/about') }}" class="theme-btn" data-aos="fade-up">
                        More Detail
                        <span class="leaf-icon">
                            <i class="fa-solid fa-leaf"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about_sec end -->

<!-- section start -->
<!-- product-sec start -->
<section class="product-sec sec">
    <img src="{{ asset('images/product-bg.png') }}" alt="about-bg" class="background-bg" />

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-heading text-center">
                    <img src="{{ asset('images/product-leaf.png') }}" alt="product-leaf" class="product-leaf1">
                    <p>{{ $home->home_product_p ?? 'Life And Leaf Healz Lifestyle' }}</p>
                    <h2>{{ $home->home_product_h2 ?? 'Healthy living with Leaf Healzs' }}</h2>
                </div>
            </div>

            {{-- Search Bar & Sort --}}
            <!-- <div class="col-lg-12 mb-4">
                <div class="product-search-container" style="max-width: 800px; margin: 0 auto; display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;">
                    <div class="input-group" style="flex: 1; min-width: 300px;">
                        <input type="text" id="homeProductSearch" class="form-control" placeholder="Search products by name, category, price..." style="border-radius: 25px 0 0 25px; padding: 12px 20px; border: 2px solid #377f52;">
                        <button class="btn" type="button" style="background: #377f52; color: white; border-radius: 0 25px 25px 0; padding: 12px 20px; border: 2px solid #377f52; border-left: none;">
                            <i class="fa-solid fa-search"></i>
                        </button>
                    </div>


                    <div id="homeSearchLoading" style="display: none; width: 100%; text-align: center; margin-top: 10px;">
                        <small style="color: #377f52;"><i class="fa-solid fa-spinner fa-spin"></i> Searching...</small>
                    </div>
                </div>
            </div> -->

            {{-- Products Container --}}
            <div id="homeProductsContainer" class="row">

                @forelse($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    @php
                    $inStock = $product->stock > 0;
                    $linkAttr = $inStock ? 'href="' . route('product.detail', $product->id) . '"' : 'href="javascript:void(0)"';
                    $btnClass = $inStock ? 'theme-btn' : 'theme-btn disabled';
                    @endphp
                    <div class="product-card" data-aos="fade-up" @if(!$inStock) style="opacity: 0.7; pointer-events: none;" @endif>
                        <div class="product-card-image">
                            <span class="price">
                                <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                                @if($inStock)
                                <h6 class="black">{{ $product->stock }} <br> in stock</h6>
                                @else
                                <h6 class="text-danger out-of-stock-label">Out of<br>Stock</h6>
                                @endif
                            </span>
                            <a {!! $linkAttr !!}>
                                @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-img">
                                @else
                                <img src="{{ asset('images/product2.png') }}" alt="{{ $product->name }}" class="product-img">
                                @endif
                            </a>
                        </div>
                        <div class="product-card-text">
                            <h6>{{ $product->name }}</h6>
                            <a {!! $linkAttr !!} class="{{ $btnClass }}">${{ number_format($product->price, 2) }}
                                <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <p class="text-center">No products available. Add products in the admin panel!</p>
                </div>
                @endforelse

            </div>

            {{-- View More Button --}}
            <div class="row mt-5 justify-content-center">
                <div class="col-12 text-center">
                    <a href="/product#products" class="theme-btn">
                        View More Products <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                    </a>
                </div>
            </div> 
        </div>

        <img src="{{ asset('images/product-leaf2.png') }}" alt="product-leaf" class="product-leaf2">
</section>
<!-- product-sec end -->

<!-- section end  -->


<!-- section start -->
<!-- store-sec start -->
<section class="store-sec sec">
    <img src="{{ asset('images/store-bg.png') }}" alt="about-bg" class="background-bg" />

    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="store-text">
                    <p class="black">{{ $home->home_store_p1 ?? 'Our Store' }}</p>
                    <h2>{{ $home->home_store_h2 ?? 'Happy and Healthy Days for You and Your Furry Crew!' }}</h2>
                    <p>
                        At Leaf Healz, we don’t just take care of humans – we’re pet lovers too! And guess what?
                        Our CBD products are also safe
                        for reptiles! So go ahead and share the love with your furry and scaly friends!
                    </p>
                    <a href="{{ $home->home_store_a ?? '#' }}" class="theme-btn">
                        More Detail <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="store-main-box">
                    <img src="{{ asset('images/tatto-shape1.png') }}" alt="tatto-shape1" class="store-shape1">
                    <img src="{{ asset('images/tatto-shape2.png') }}" alt="tatto-shape2" class="store-shape2">

                    {{-- Store Card 1 --}}
                    <div class="store-card2 store-card1" data-aos="fade-up">
                        <div class="store-card2-image shine">
                            <a href="#">
                                <img src="{{ $home && $home->home_store_card1_img ? asset('storage/' . $home->home_store_card1_img) : asset('images/product10.png') }}" alt="store-card2-img" class="store-card2-img">
                            </a>
                        </div>
                        <div class="store-card2-text">
                            <span>Leaf</span>
                            <span>Healz</span>
                            <span>Leaf</span>
                            <span>Healz</span>
                            <span>Leaf</span>
                        </div>
                    </div>

                    {{-- Store Card 2 --}}
                    <div class="store-card2 store-card3" data-aos="fade-up">
                        <div class="store-card2-image shine">
                            <a href="#">
                                <img src="{{ $home && $home->home_store_card2_img ? asset('storage/' . $home->home_store_card2_img) : asset('images/product3.png') }}" alt="store-card2-img" class="store-card2-img">
                            </a>
                        </div>
                        <div class="store-card2-text">
                            <span>Leaf</span>
                            <span>Healz</span>
                            <span>Leaf</span>
                            <span>Healz</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- store-sec end -->

<!-- section end  -->


<!-- section start -->
<!-- tatto-sec start -->
<section class="tatto-sec sec">
    <img src="{{ asset('images/tatto-bg.png') }}" alt="about-bg" class="background-bg" />

    {{-- Left floating image --}}
    <div class="store-card2 tatto-store-card" data-aos="fade-up">
        <div class="store-card2-image shine">
            <a href="#">
                <img src="{{ $home && $home->home_tatto_left_card2_img ? asset('storage/' . $home->home_tatto_left_card2_img) : asset('images/product4.png') }}" alt="store-card2-img" class="store-card2-img">
            </a>
        </div>
        <div class="store-card2-text">
            <span>Leaf</span>
            <span>Healz</span>
            <span>Leaf</span>
        </div>
    </div>

    <div class="container">
        <div class="tatto-box">
            <img src="{{ asset('images/tatto-shape1.png') }}" alt="tatto-shape1" class="tatto-shape1">
            <img src="{{ asset('images/tatto-shape2.png') }}" alt="tatto-shape2" class="tatto-shape2">

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="tatto-heading text-center">
                        <p class="black">Tatto AfterCare</p>
                        <h2>3 Stage Tattoo Care</h2>
                        <p>
                            Got ink? Whether it’s fresh or healed, our CBD-infused topicals will have you feeling downright
                            pampered! From soothing soreness to reducing redness, our specially formulated creams, balms,
                            and salves have everything you need to keep your skin looking fabulous. Experience the magic
                            for yourself and give our CBD topicals a try today!
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center tatto-stars card-row">

                {{-- Card 1 --}}
                <div class="col-lg-3 col-sm-3">
                    <div class="tatto-card">
                        <div class="tatto-card-image">
                            <img src="{{ asset('images/tatto-shape.png') }}" alt="tatto-shape-img" class="tatto-shape-img" />
                            <img src="{{ asset('images/tatto-flower.png') }}" alt="tatto-flower-img" class="tatto-flower-img" />
                        </div>
                        <div class="tatto-card-text">
                            <h5>{{ $home->home_tatto_cont_card1_h5 ?? 'Tattoo Daily Care' }}</h5>
                            <p>{{ $home->home_tatto_cont_card1_p ?? 'CBD loves playing with the receptors in your skin, potentially giving redness, swelling, and irritation the boot!' }}</p>
                        </div>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="col-lg-3 col-sm-3">
                    <div class="tatto-card">
                        <div class="tatto-card-image">
                            <img src="{{ asset('images/tatto-shape.png') }}" alt="tatto-shape-img" class="tatto-shape-img" />
                            <img src="{{ asset('images/tatto-flower.png') }}" alt="tatto-flower-img" class="tatto-flower-img" />
                        </div>
                        <div class="tatto-card-text">
                            <h5>{{ $home->home_tatto_cont_card2_h5 ?? 'Tattoo Care' }}</h5>
                            <p>{{ $home->home_tatto_cont_card2_p ?? 'CBD loves playing with the receptors in your skin, potentially giving redness, swelling, and irritation the boot!' }}</p>
                        </div>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="col-lg-3 col-sm-3">
                    <div class="tatto-card">
                        <div class="tatto-card-image">
                            <img src="{{ asset('images/tatto-shape.png') }}" alt="tatto-shape-img" class="tatto-shape-img" />
                            <img src="{{ asset('images/tatto-flower.png') }}" alt="tatto-flower-img" class="tatto-flower-img" />
                        </div>
                        <div class="tatto-card-text">
                            <h5>{{ $home->home_tatto_cont_card3_h5 ?? 'Anti-Inflammatory' }}</h5>
                            <p>{{ $home->home_tatto_cont_card3_p ?? 'CBD loves playing with the receptors in your skin, potentially giving redness, swelling, and irritation the boot!' }}</p>
                        </div>
                    </div>
                </div>

                {{-- Button --}}
                <div class="tatto-button">
                    <a href="{{ $home->home_tatto_cont_a ?? '#' }}" class="theme-btn">
                        More Detail <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                    </a>
                </div>

            </div>
        </div>
    </div>

    {{-- Right floating image --}}
    <div class="store-card2 tatto-store-card1" data-aos="fade-up">
        <div class="store-card2-image shine">
            <a href="#">
                <img src="{{ asset('images/product9.png') }}" alt="store-card2-img" class="store-card2-img">
            </a>
        </div>
        <div class="store-card2-text">
            <span>Leaf</span>
            <span>Healz</span>
            <span>Leaf</span>
            <span>Healz</span>
        </div>
    </div>
</section>
<!-- tatto-sec end -->

<!-- section end  -->


<!-- section gallery-sec start -->
<!-- gallery_sec start -->
<section class="gallery-sec sec">
    <img src="{{ asset('images/gallery-bg.png') }}" alt="about-bg" class="background-bg" />
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="gallery-heading text-center">
                    <h2>
                        Our Gallery
                    </h2>
                </div>
            </div>
        </div>
        <div class="gallery-row">
            <img src="{{ asset('images/lines.png') }}" alt="lines-img" class="lines-img">
            <img src="{{ asset('images/gallery-shape1.png') }}" alt="gallery-shape1-img" class="gallery-shape1-img">
            <img src="{{ asset('images/gallery-shape2.png') }}" alt="gallery-shape2-img" class="gallery-shape2-img">

            <div class="gallery-column">
                <div class="gallery-image">
                    <a href="{{ asset('images/about_tatto.png') }}" data-fancybox="gallery">
                        <img src="{{ asset('images/about_tatto.png') }}" class="gallery1" alt="gallery1" />
                    </a>
                </div>
            </div>

            <div class="gallery-column">
                <div class="gallery-image">
                    <a href="{{ asset('images/about_testi2.png') }}" data-fancybox="gallery">
                        <img src="{{ asset('images/about_testi2.png') }}" class="gallery2" alt="gallery2" />
                    </a>
                </div>
            </div>

            <div class="gallery-column">
                <div class="gallery-image">
                    <a href="{{ asset('images/contact-slider1.png') }}" data-fancybox="gallery">
                        <img src="{{ asset('images/contact-slider1.png') }}" class="gallery3" alt="gallery3" />
                    </a>
                </div>
            </div>

            <div class="gallery-column">
                <div class="gallery-image">
                    <a href="{{ asset('images/contact-slider2.png') }}" data-fancybox="gallery">
                        <img src="{{ asset('images/contact-slider2.png') }}" class="gallery4" alt="gallery4" />
                    </a>
                </div>
            </div>

            <div class="gallery-column">
                <div class="gallery-image">
                    <a href="{{ asset('images/home-box-3.png') }}" data-fancybox="gallery">
                        <img src="{{ asset('images/home-box-3.png') }}" class="gallery5" alt="gallery5" />
                    </a>
                </div>
            </div>

            <div class="gallery-column">
                <div class="gallery-image">
                    <a href="{{ asset('images/product-banner.png') }}" data-fancybox="gallery">
                        <img src="{{ asset('images/product-banner.png') }}" class="gallery6" alt="gallery6" />
                    </a>
                </div>
            </div>

            <div class="gallery-column">
                <div class="gallery-image">
                    <a href="{{ asset('images/contact-slider3.png') }}" data-fancybox="gallery">
                        <img src="{{ asset('images/contact-slider3.png') }}" class="gallery7" alt="gallery7" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallery_sec end -->
<!-- section gallery-sec end  -->


<!-- section start -->
<!-- testimonial_sec start -->
<section class="testimonial-sec sec">
    <img src="{{ asset('images/testi-bg.png') }}" alt="about-bg" class="background-bg" />
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-heading text-center">
                    <h2>
                        {{ $home->home_testimonials_h2 ?? 'What People Say' }}
                    </h2>
                    <p class="auto">
                        {{ $home->home_testimonials_p ?? 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.' }}
                    </p>
                </div>
            </div>
        </div>

        <div class="testi-main-box">
            <img src="{{ asset('images/lines.png') }}" alt="lines-img" class="lines-img">
            <div class="row">
                @foreach ($testimonials as $testimonial)
                <div class="col-lg-4">
                    <div class="testi-box">
                        <div class="testi-image">
                            @if($testimonial->image)
                            <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="user-img" />
                            @else
                            <img src="{{ asset('images/user1.jpg') }}" alt="{{ $testimonial->name }}" class="user-img" />
                            @endif
                            <img src="{{ asset('images/comma.png') }}" alt="comma-img" class="comma-img" />
                        </div>
                        <div class="testi-text">
                            <h6>{{ $testimonial->name }}</h6>
                            <p>
                                "{{ $testimonial->testimonial }}"
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <img src="{{ asset('images/lines1.png') }}" alt="lines-img" class="lines-img1">
        </div>
    </div>
</section>
<!-- testimonial_sec end -->


<script>
    // Home Page Product Search with AJAX
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('homeProductSearch');
        const productsContainer = document.getElementById('homeProductsContainer');
        const loadingIndicator = document.getElementById('homeSearchLoading');
        let searchTimeout;

        if (searchInput) {
            // Search Input Listener
            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                const query = this.value.trim();
                const sort = document.getElementById('homeProductSort').value;

                // Debounce search - wait 500ms after user stops typing
                searchTimeout = setTimeout(() => {
                    performSearch(query, sort);
                }, 500);
            });

            // Sort Dropdown Listener
            const sortSelect = document.getElementById('homeProductSort');
            if (sortSelect) {
                sortSelect.addEventListener('change', function() {
                    const query = searchInput.value.trim();
                    performSearch(query, this.value);
                });
            }
        }

        function performSearch(query, sort = 'newest') {
            // Show loading indicator
            loadingIndicator.style.display = 'block';
            console.log('Performing search for:', query, 'Sort:', sort);

            fetch(`/search-products?q=${encodeURIComponent(query)}&sort=${sort}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Hide loading indicator
                    loadingIndicator.style.display = 'none';
                    console.log('Search results:', data);

                    if (data.success) {
                        renderProducts(data.products);
                    }
                })
                .catch(error => {
                    console.error('Search error:', error);
                    loadingIndicator.style.display = 'none';
                    productsContainer.innerHTML = '<div class="col-12"><p class="text-center" style="color: #dc3545;">Error loading products. Please try again.</p></div>';
                });
        }

        function renderProducts(products) {
            if (products.length === 0) {
                productsContainer.innerHTML = '<div class="col-12"><p class="text-center">No products found matching your search.</p></div>';
                return;
            }

            let html = '';
            products.forEach(product => {
                let stockHtml = '';
                let linkAttr = `href="/product-detail/${product.id}"`;
                let btnClass = 'theme-btn';
                let cardStyle = '';

                // Stock Logic
                if (product.stock > 0) {
                    stockHtml = `<h6 class="black" style="color: #000; font-weight: bold;">${product.stock} <br> in stock</h6>`;
                } else {
                    stockHtml = `<h6 class="text-danger out-of-stock-label">Out of<br>Stock</h6>`;
                    linkAttr = 'href="javascript:void(0)"'; // Disable link
                    btnClass += ' disabled'; // Bootstrap disabled class or custom
                    cardStyle = 'opacity: 0.7; pointer-events: none;'; // Dim and disable click
                }

                html += `
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product-card" style="${cardStyle}">
                        <div class="product-card-image">
                            <span class="price">
                                <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                                ${stockHtml}
                            </span>
                            <a ${linkAttr}>
                                <img src="${product.image}" alt="${product.name}" class="product-img">
                            </a>
                        </div>
                        <div class="product-card-text">
                            <h6>${product.name}</h6>
                            <a ${linkAttr} class="${btnClass}">$${parseFloat(product.price).toFixed(2)}
                                <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            `;
            });

            productsContainer.innerHTML = html;

            // Refresh AOS to animate new elements
            if (typeof AOS !== 'undefined') {
                setTimeout(() => {
                    AOS.refresh();
                }, 100);
            }
        }
    });
</script>

@endsection