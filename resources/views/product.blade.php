 @extends('layouts.app')

 @section('title', 'Products - Veridan Roots')

 @section('content')


<div id="loader">
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
            <img src="{{ url('images/product-loader.png') }}" alt="Root Herb Care" class="loader-img">
        </div>
    </div>
</div>


 <!-- banner start -->
 <!-- banner start -->
 <section class="product_banner">
 </section>
 <!-- banner end -->




 <!-- banner end -->

 <!-- about_sec start -->
 <!-- about_sec start -->
 <section class="about_sec sec">
     <span class="about-healz">Veridan Roots</span>

     <img src="{{ asset('images/about-bg.png') }}" alt="about-bg" class="background-bg" />

     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 col-12">
                 <div class="about-text">
                     <img src="{{ asset('images/green-line.png') }}" alt="green-line" class="green-line">
                     <img src="{{ asset('images/green-line1.png') }}" alt="green-line1" class="green-line1">

                     <p class="black">The Earth's Finest Ingredients, Rooted in Hair Science</p>

                     <h2>Shop the Veridan Roots Collection</h2>

                     <p>
                         Explore our complete catalog of herbal hair grooming solutions. Each formula is meticulously crafted with natural extracts, essential oils, and potent botanicals to deliver visible health, shine, and vitality to your hair. Find your perfect routine and begin your journey to a naturally beautiful mane.
                     </p>

                     <img src="{{ asset('images/product_about.png') }}" alt="about" class="about" data-aos="fade-up" />

                     <a href="#products" class="theme-btn" data-aos="fade-up">
                         Call to Action
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

 <!-- about_sec end -->

 <!-- section start -->


 <!-- product-sec start -->
 <section class="product-sec sec product_product-sec">
     <img src="{{ asset('images/product-bg.png') }}" alt="about-bg" class="background-bg" />

     <div class="container">
         <div class="row ">
             <div class="col-lg-12" style="margin-bottom: 30px;">
                 <div class="product-heading text-center">
                     <img src="{{ asset('images/product-leaf.png') }}" alt="product-leaf" class="product-leaf1">
                     <p>Life And Leaf Healz Lifestyle</p>
                     <h2>Healthy living with Leaf Healzs</h2>
                 </div>
             </div>
             <!-- ✅ Filter Dropdown (Top Left) -->
             <div class="row mb-4">
                 <div class="col-lg-3 col-md-4 col-sm-6">
                     <div class="product-filter">
                         <label for="filter" class="form-label fw-bold me-2 col-3">Sort by:</label>
                         <select id="filter" class="form-select">
                             <option value="recent">Most Recent</option>
                             <option value="low">Low Price</option>
                             <option value="high">High Price</option>
                             <option value="popular">Most Popular</option>
                         </select>
                     </div>
                 </div>
             </div>

             {{-- Product Card 1 --}}
             <div class="col-lg-3 col-md-6 col-sm-12">
                 <div class="product-card" data-aos="fade-up">
                     <div class="product-card-image">
                         <span class="price">
                             <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                             <h6 class="black">250 <br> mg</h6>
                         </span>
                         <a href="{{ url('product-detail') }}">
                             <img src="{{ asset('images/product9.png') }}" alt="product-img" class="product-img">
                         </a>
                     </div>
                     <div class="product-card-text">
                         <h6>Products Name Here</h6>
                         <a href="{{ url('product-detail') }}" class="theme-btn">$39.99
                             <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                         </a>
                     </div>
                 </div>
             </div>

             {{-- Product Card 2 --}}
             <div class="col-lg-3 col-md-6 col-sm-12">
                 <div class="product-card" data-aos="fade-up">
                     <div class="product-card-image">
                         <span class="price">
                             <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                             <h6 class="black">250 <br> mg</h6>
                         </span>
                         <a href="{{ url('product-detail') }}">
                             <img src="{{ asset('images/product2.png') }}" alt="product-img" class="product-img">
                         </a>
                     </div>
                     <div class="product-card-text">
                         <h6>Products Name Here</h6>
                         <a href="{{ url('product-detail') }}" class="theme-btn">$39.99
                             <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                         </a>
                     </div>
                 </div>
             </div>

             {{-- Product Card 3 --}}
             <div class="col-lg-3 col-md-6 col-sm-12">
                 <div class="product-card" data-aos="fade-up">
                     <div class="product-card-image">
                         <span class="price">
                             <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                             <h6 class="black">250 <br> mg</h6>
                         </span>
                         <a href="{{ url('product-detail') }}">
                             <img src="{{ asset('images/product3.png') }}" alt="product-img" class="product-img">
                         </a>
                     </div>
                     <div class="product-card-text">
                         <h6>Products Name Here</h6>
                         <a href="{{ url('product-detail') }}" class="theme-btn">$39.99
                             <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                         </a>
                     </div>
                 </div>
             </div>

             {{-- Product Card 4 --}}
             <div class="col-lg-3 col-md-6 col-sm-12">
                 <div class="product-card" data-aos="fade-up">
                     <div class="product-card-image">
                         <span class="price">
                             <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                             <h6 class="black">250 <br> mg</h6>
                         </span>
                         <a href="{{ url('product-detail') }}">
                             <img src="{{ asset('images/product4.png') }}" alt="product-img" class="product-img">
                         </a>
                     </div>
                     <div class="product-card-text">
                         <h6>Products Name Here</h6>
                         <a href="{{ url('product-detail') }}" class="theme-btn">$39.99
                             <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                         </a>
                     </div>
                 </div>
             </div>

             {{-- Product Card 5 --}}
             <div class="col-lg-3 col-md-6 col-sm-12">
                 <div class="product-card" data-aos="fade-up">
                     <div class="product-card-image">
                         <span class="price">
                             <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                             <h6 class="black">250 <br> mg</h6>
                         </span>
                         <a href="{{ url('product-detail') }}">
                             <img src="{{ asset('images/product4.png') }}" alt="product-img" class="product-img">
                         </a>
                     </div>
                     <div class="product-card-text">
                         <h6>Products Name Here</h6>
                         <a href="{{ url('product-detail') }}" class="theme-btn">$39.99
                             <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6 col-sm-12">
                 <div class="product-card" data-aos="fade-up">
                     <div class="product-card-image">
                         <span class="price">
                             <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                             <h6 class="black">250 <br> mg</h6>
                         </span>
                         <a href="{{ url('product-detail') }}">
                             <img src="{{ asset('images/product4.png') }}" alt="product-img" class="product-img">
                         </a>
                     </div>
                     <div class="product-card-text">
                         <h6>Products Name Here</h6>
                         <a href="{{ url('product-detail') }}" class="theme-btn">$39.99
                             <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-12">
                 <div class="product-card" data-aos="fade-up">
                     <div class="product-card-image">
                         <span class="price">
                             <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                             <h6 class="black">250 <br> mg</h6>
                         </span>
                         <a href="{{ url('product-detail') }}">
                             <img src="{{ asset('images/product4.png') }}" alt="product-img" class="product-img">
                         </a>
                     </div>
                     <div class="product-card-text">
                         <h6>Products Name Here</h6>
                         <a href="{{ url('product-detail') }}" class="theme-btn">$39.99
                             <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-12">
                 <div class="product-card" data-aos="fade-up">
                     <div class="product-card-image">
                         <span class="price">
                             <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                             <h6 class="black">250 <br> mg</h6>
                         </span>
                         <a href="{{ url('product-detail') }}">
                             <img src="{{ asset('images/product4.png') }}" alt="product-img" class="product-img">
                         </a>
                     </div>
                     <div class="product-card-text">
                         <h6>Products Name Here</h6>
                         <a href="{{ url('product-detail') }}" class="theme-btn">$39.99
                             <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                         </a>
                     </div>
                 </div>
             </div>
             <!-- <div class="col-lg-3 col-md-6 col-sm-12">
                 <div class="product-card" data-aos="fade-up">
                     <div class="product-card-image">
                         <span class="price">
                             <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                             <h6 class="black">250 <br> mg</h6>
                         </span>
                         <a href="{{ url('product-detail') }}">
                             <img src="{{ asset('images/product4.png') }}" alt="product-img" class="product-img">
                         </a>
                     </div>
                     <div class="product-card-text">
                         <h6>Products Name Here</h6>
                         <a href="#" class="theme-btn">$39.99
                             <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-12">
                 <div class="product-card" data-aos="fade-up">
                     <div class="product-card-image">
                         <span class="price">
                             <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                             <h6 class="black">250 <br> mg</h6>
                         </span>
                         <a href="{{ url('product-detail') }}">
                             <img src="{{ asset('images/product4.png') }}" alt="product-img" class="product-img">
                         </a>
                     </div>
                     <div class="product-card-text">
                         <h6>Products Name Here</h6>
                         <a href="#" class="theme-btn">$39.99
                             <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-12">
                 <div class="product-card" data-aos="fade-up">
                     <div class="product-card-image">
                         <span class="price">
                             <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                             <h6 class="black">250 <br> mg</h6>
                         </span>
                         <a href="{{ url('product-detail') }}">
                             <img src="{{ asset('images/product4.png') }}" alt="product-img" class="product-img">
                         </a>
                     </div>
                     <div class="product-card-text">
                         <h6>Products Name Here</h6>
                         <a href="#" class="theme-btn">$39.99
                             <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-12">
                 <div class="product-card" data-aos="fade-up">
                     <div class="product-card-image">
                         <span class="price">
                             <img src="{{ asset('images/yellow-shape.png') }}" alt="yellow-shape" class="yellow-shape">
                             <h6 class="black">250 <br> mg</h6>
                         </span>
                         <a href="{{ url('product-detail') }}">
                             <img src="{{ asset('images/product4.png') }}" alt="product-img" class="product-img">
                         </a>
                     </div>
                     <div class="product-card-text">
                         <h6>Products Name Here</h6>
                         <a href="#" class="theme-btn">$39.99
                             <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                         </a>
                     </div>
                 </div>
             </div> -->



         </div>
     </div>

     <img src="{{ asset('images/product-leaf2.png') }}" alt="product-leaf" class="product-leaf2">
 </section>
 <!-- product-sec end -->



 <!-- section gallery-sec start -->
 <!-- gallery_sec start -->
 <!-- gallery_sec start -->
 <section class="gallery-sec sec">
     <img src="{{ asset('images/about-bg.png') }}" alt="about-bg" class="background-bg" />
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="gallery-heading text-center gallery_product">
                     <h2>
                         Our Gallery
                     </h2>
                 </div>
             </div>
         </div>
         <div class="gallery-row product_gallery_row">
             <img src="{{ asset('images/lines.png') }}" alt="lines-img" class="lines-img">
             <img src="{{ asset('images/green-line.png') }}" alt="gallery-shape1-img_product" class="gallery-shape1-img">
             <img src="{{ asset('images/green-line1.png') }}" alt="gallery-shape2-img" class="gallery-shape2-img_product">

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
 <!-- gallery_sec end -->
 <!-- section gallery-sec end  -->




 @endsection