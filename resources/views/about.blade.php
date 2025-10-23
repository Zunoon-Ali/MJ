 @extends('layouts.app')

 @section('title', 'About - Veridan Roots')

 @section('content')

 <!-- <div id="loader">
        <div class="loader-box">
            <div class="first loader-column">
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
            </div>
            <div class="second loader-column">
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
            </div>
            <div class="first loader-column">
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
                <span>
                    Leaf
                </span>
            </div>
            <div class="second loader-column">
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
                <span>
                    Healz
                </span>
            </div>
            <div class="loader-image">
                <img src="images/banner-card2-img.png" alt="loader-img" class="loader-img">
            </div>
        </div>
    </div> -->


 <!-- banner start -->
 <!-- banner start -->
 <section id="aboutSlider" class="about_banner_sec carousel slide vertical" data-bs-ride="carousel">
     <div class="carousel-inner">

         <div class="carousel-item active slide1">
             <div class="container">
                 <div class="row justify-content-start align-items-center min-vh-100">
                     <div class="col-lg-6 col-md-8 col-sm-12 text-center text-md-start">
                         <div class="about_blur_box p-4">
                             <p class="tagline mb-2">Our Mission</p>
                             <h2 class="mb-3">Healthy Living with Leaf Healzs</h2>
                             <p>
                                 Discover a lifestyle inspired by nature’s healing. Embrace wellness with organic products that refresh your body and soul.
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="carousel-item slide2">
             <div class="container">
                 <div class="row justify-content-start align-items-center min-vh-100">
                     <div class="col-lg-6 col-md-8 col-sm-12 text-center text-md-start">
                         <div class="about_blur_box p-4">
                             <p class="tagline mb-2">Natural Wellness</p>
                             <h2 class="mb-3">Nature’s Touch for Everyday Health</h2>
                             <p>
                                 Experience organic care that rejuvenates your body and brings peace to your lifestyle.
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="carousel-item slide3">
             <div class="container">
                 <div class="row justify-content-start align-items-center min-vh-100">
                     <div class="col-lg-6 col-md-8 col-sm-12 text-center text-md-start">
                         <div class="about_blur_box p-4">
                             <p class="tagline mb-2">Eco-Friendly</p>
                             <h2 class="mb-3">Sustainable Choices for a Better Tomorrow</h2>
                             <p>
                                 Join us in making a difference through natural, sustainable, and healthy living.
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>

     <!-- Dots -->
     <div class="carousel-indicators">
         <button type="button" data-bs-target="#aboutSlider" data-bs-slide-to="0" class="active"></button>
         <button type="button" data-bs-target="#aboutSlider" data-bs-slide-to="1"></button>
         <button type="button" data-bs-target="#aboutSlider" data-bs-slide-to="2"></button>
     </div>
 </section>



 <!-- banner end -->


 <!-- banner end -->

 <!-- about_sec start -->
 <!-- about_sec start -->
 <section class="about_sec sec">
     <span class="about_about-helz">Veridan Roots</span>

     <img src="{{ asset('images/about-bg.png') }}" alt="about-bg" class="background-bg" />

     <div class="container about_about-container">
         <div class="row justify-content-center about_about-row">
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 about_about-col">
                 <div class="about-text">
                     <img src="{{ asset('images/green-line.png') }}" alt="green-line" class="green-line about_about-green-line">
                     <img src="{{ asset('images/green-line1.png') }}" alt="green-line1" class="green-line1 about_about-green-line1">

                     <p class="black about_about-black">Life And Leaf Healz Lifestyle</p>

                     <h2 class="about_about-h2">It's all about the alternatives</h2>

                     <p class="about_about-p">
                         Welcome to the wild world of CBD, where relaxation meets innovation! Get ready to take
                         your wellness routine to the next level with the power of CBD. Embark on a journey where
                         calmness and balance are just a few drops away. Come aboard the CBD revolution and unlock
                         the potential of plant-powered wellness. From luscious skincare to delightful tinctures,
                         there’s a CBD product that fits your lifestyle and helps you find your inner peace.
                     </p>


                     <a href="#" class="theme-btn about_about-theme-btn" data-aos="fade-up">
                         More Detail
                         <span class="leaf-icon">
                             <i class="fa-solid fa-leaf"></i>
                         </span>
                     </a>
                 </div>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 about_about-col-img">
                 <img src="{{ asset('images/about.jpg') }}" alt="about" class="about about_about-about-jpg" data-aos="fade-up" />

             </div>
         </div>
     </div>
 </section>
 <!-- about_sec end -->

 <!-- about_sec end -->

 <!-- section start -->

 <!-- section end  -->


 <!-- section start -->
 <!-- store-sec start -->
 <section class="store-sec sec">
     <img src="{{ asset('images/testi-bg.png') }}" alt="about-bg" class="background-bg" />

     <div class="container">
         <div class="row align-items-center">

             <div class="col-lg-6">
                 <div class="store-text">
                     <p class="black text-white">Our Store</p>
                     <h2 class="text-white">
                         Happy and Healthy
                         Days for You and Your
                         Furry Crew!
                     </h2>
                     <p class="text-white">
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
                     <img src="{{ asset('images/product-leaf.png') }}" alt="tatto-shape1" class="store-shape1 ">
                     <img src="{{ asset('images/product-leaf2.png') }}" alt="tatto-shape2" class="store-shape2">

                     {{-- Store Card 1 --}}
                     <div class="store-card2 store-card1" data-aos="fade-up">
                         <div class="store-card2-image shine">
                             <a href="#">
                                 <img src="{{ asset('images/about_testi1.png') }}" alt="store-card2-img" class="store-card2-img">
                             </a>
                         </div>
                         <div class="store-card2-text">
                             <span>Verdian</span>
                             <span>Roots</span>
                             <span>Verdian</span>
                             <span>Roots</span>
                             <span>Verdian</span>
                         </div>
                     </div>

                     {{-- Store Card 2 --}}
                     <div class="store-card2 store-card3" data-aos="fade-up">
                         <div class="store-card2-image shine">
                             <a href="#">
                                 <img src="{{ asset('images/about_testi2.png') }}" alt="store-card2-img" class="store-card2-img">
                             </a>
                         </div>
                         <div class="store-card2-text">
                             <span>Verdian</span>
                             <span>Roots</span>
                             <span>Verdian</span>
                             <span>Roots</span>
                             <span>Verdian</span>
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
                <img src="{{ asset('images/about_tatto.png') }}" alt="store-card2-img" class="store-card2-img">
            </a>
        </div>
        <div class="store-card2-text">
            <span>Verdian</span>
            <span>Roots</span>
            <span>Verdian</span>
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
                <img src="{{ asset('images/about_tatto2.png') }}" alt="store-card2-img" class="store-card2-img">
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

 <!-- section gallery-sec end  -->


 <!-- section start -->



 @endsection