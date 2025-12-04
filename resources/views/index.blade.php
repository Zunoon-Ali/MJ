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
                                    VERIDIAN ROOTS PURE HAIR WELLNESS
                                </textPath>
                            </text>
                        </svg>
                        <img src="{{ asset('images/lines.png') }}" alt="lines-img" class="lines-img">
                        <img src="{{ asset('images/flower-card.png') }}" alt="flower-card" class="flower-card">
                        <h1>Verdian Roots</h1>
                        <p>Welcome to the world of herbal hair care, where potent botanicals meet luxurious self-care. Discover the natural route to stronger, shinier hair.</p>
                        <a href="#about_sec" class="theme-btn">
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
                                <img src="{{ asset('images/product3.png') }}" alt="banner-card2-img" class="banner-card2-img">
                            </a>
                        </div>
                        <div class="banner-card2-text">
                            <span>Verdian</span>
                            <span>Roots</span>
                            <span>Verdian</span>
                            <span>Roots</span>
                            <span>Verdian</span>
                        </div>
                    </div>
                </div>

                <!-- Right Card -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 p-0 banner-column">
                    <div class="banner-card3 wow fadeInRight">
                        <div class="banner-card3-image">
                            <a href="#">
                                <img src="{{ asset('images/home-box-3.png') }}" alt="banner-card3-img" class="banner-card3-img">
                            </a>
                        </div>
                        <div class="banner-card3-curve-text">
                            <svg viewBox="0 0 600 600">
                                <path id="curve" d="M 585 270 C 561 472 545 637 315 676 C 68 643 39 473 24 273" fill="transparent" />
                                <text>
                                    <textPath href="#curve" startOffset="50%" text-anchor="middle" style="fill: #fff; font-family: Funky;">
                                        Discover your healthiest hair yet. Experience the natural difference with Veridian Roots. Shop now!
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

                    <p class="black">Life And Leaf Healz Lifestyle</p>

                    <h2>It's all about the alternatives</h2>

                    <p>
                        Welcome to the wild world of CBD, where relaxation meets innovation! Get ready to take
                        your wellness routine to the next level with the power of CBD. Embark on a journey where
                        calmness and balance are just a few drops away. Come aboard the CBD revolution and unlock
                        the potential of plant-powered wellness. From luscious skincare to delightful tinctures,
                        there’s a CBD product that fits your lifestyle and helps you find your inner peace.
                    </p>

                    <img src="{{ asset('images/about-slider1.png') }}" alt="about" class="about" data-aos="fade-up" />

                    <a href="{{ url('/about') }}" class="theme-btn" data-aos="fade-up">
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
                    <p>Life And Leaf Healz Lifestyle</p>
                    <h2>Healthy living with Leaf Healzs</h2>
                </div>
            </div>

            {{-- Dynamic Products from Database (4 latest) --}}
            @forelse($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="product-card" data-aos="fade-up">
                    <div class="product-card-image">
                        <span class="price">
                            <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                            <h6 class="black">{{ $product->stock }} <br> in stock</h6>
                        </span>
                        <a href="{{ url('product-detail') }}">
                            @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-img">
                            @else
                            <img src="{{ asset('images/product2.png') }}" alt="{{ $product->name }}" class="product-img">
                            @endif
                        </a>
                    </div>
                    <div class="product-card-text">
                        <h6>{{ $product->name }}</h6>
                        <a href="{{ url('product-detail') }}" class="theme-btn">${{ number_format($product->price, 2) }}
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
                    <p class="black">Our Store</p>
                    <h2>
                        Happy and Healthy
                        Days for You and Your
                        Furry Crew!
                    </h2>
                    <p>
                        At Leaf Healz, we don’t just take care of humans – we’re pet lovers too! And guess what?
                        Our CBD products are also safe
                        for reptiles! So go ahead and share the love with your furry and scaly friends!
                    </p>
                    <a href="#" class="theme-btn">
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
                                <img src="{{ asset('images/product10.png') }}" alt="store-card2-img" class="store-card2-img">
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
                                <img src="{{ asset('images/product3.png') }}" alt="store-card2-img" class="store-card2-img">
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
                <img src="{{ asset('images/product4.png') }}" alt="store-card2-img" class="store-card2-img">
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
                            <h5>Tattoo Daily Care</h5>
                            <p>
                                CBD loves playing with the receptors in your skin, potentially giving redness, swelling,
                                and irritation the boot!
                            </p>
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
                            <h5>Tattoo Care</h5>
                            <p>
                                CBD loves playing with the receptors in your skin, potentially giving redness, swelling,
                                and irritation the boot!
                            </p>
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
                            <h5>Anti-Inflammatory</h5>
                            <p>
                                CBD loves playing with the receptors in your skin, potentially giving redness, swelling,
                                and irritation the boot!
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Button --}}
                <div class="tatto-button">
                    <a href="#" class="theme-btn">
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
                        What People Say
                    </h2>
                    <p class="auto">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut
                        labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                    </p>
                </div>
            </div>
        </div>

        <div class="testi-main-box">
            <img src="{{ asset('images/lines.png') }}" alt="lines-img" class="lines-img">
            <div class="row">
                <d-iv class="col-lg-4">
                    <div class="testi-box">
                        <div class="testi-image">
                            <img src="{{ asset('images/user1.jpg') }}" alt="user-img" class="user-img" />
                            <img src="{{ asset('images/comma.png') }}" alt="comma-img" class="comma-img" />
                        </div>
                        <div class="testi-text">
                            <h6>Kathy h.</h6>
                            <p>
                                "After struggling with runner’s knee, I decided to give Leaf Healz pain salve a
                                try, and it worked wonders. Shortly
                                after using it, the pain vanished. I’m really impressed with Leaf Healz's pain
                                salve."
                            </p>
                        </div>
                    </div>
            </div>

            <div class="col-lg-4">
                <div class="testi-box">
                    <div class="testi-image">
                        <img src="{{ asset('images/user2.jpg') }}" alt="user-img" class="user-img" />
                        <img src="{{ asset('images/comma.png') }}" alt="comma-img" class="comma-img" />
                    </div>
                    <div class="testi-text">
                        <h6>Anne J.</h6>
                        <p>
                            "I’ve been dealing with a stressful job lately, and I was searching for a natural
                            way to relax without resorting to
                            medication. I decided to try Leaf Healz tincture, and it really did the trick. It
                            helped me unwind and feel much calmer."
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="testi-box right">
                    <div class="testi-image">
                        <img src="{{ asset('images/user3.jpg') }}" alt="user-img" class="user-img" />
                        <img src="{{ asset('images/comma.png') }}" alt="comma-img" class="comma-img" />
                    </div>
                    <div class="testi-text">
                        <h6>Harold s.</h6>
                        <p>
                            "After struggling with runner’s knee, I decided to give Leaf Healz pain salve a
                            try, and it worked wonders. Shortly
                            after using it, the pain vanished. I’m really impressed with Leaf Healz's pain
                            salve."
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('images/lines1.png') }}" alt="lines-img" class="lines-img1">
    </div>
    </div>
</section>
<!-- testimonial_sec end -->


@endsection