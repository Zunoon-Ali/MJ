 @extends('layouts.app')

 @section('title', 'Contact - Veridan Roots')

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
            <img src="{{ url('images/product3.png') }}" alt="Root Herb Care" class="loader-img">
        </div>
    </div>
</div> -->

 <!-- banner start -->
 <section id="contactSlider" class="contact_banner_sec carousel slide vertical" data-bs-ride="carousel">
     <div class="carousel-inner">

         <!-- Slide 1 -->
         <div class="carousel-item active contact_slide1">
             <div class="container">
                 <div class="row justify-content-start align-items-center min-vh-100">
                     <div class="col-lg-6 col-md-8 col-sm-12 text-center text-md-start">
                         <div class="contact_blur_box p-4 text-white">
                             <p class="contact_tagline mb-2 text-white">Get In Touch</p>
                             <h2 class="mb-3 text-white">We’re Here to Help You</h2>
                             <p class="text-white">
                                 Reach out to us for any inquiries, feedback, or support. Our team is always ready to assist you with care and professionalism.
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Slide 2 -->
         <div class="carousel-item contact_slide2">
             <div class="container">
                 <div class="row justify-content-start align-items-center min-vh-100">
                     <div class="col-lg-6 col-md-8 col-sm-12 text-center text-md-start">
                         <div class="contact_blur_box p-4 text-white">
                             <p class="contact_tagline mb-2 text-white">Connect With Us</p>
                             <h2 class="mb-3 text-white">Your Questions, Our Answers</h2>
                             <p class="text-white">
                                 Whether it’s a product query or partnership opportunity, we’d love to hear from you and make things easier.
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Slide 3 -->
         <div class="carousel-item contact_slide3">
             <div class="container">
                 <div class="row justify-content-start align-items-center min-vh-100">
                     <div class="col-lg-6 col-md-8 col-sm-12 text-center text-md-start">
                         <div class="contact_blur_box p-4 text-white">
                             <p class="contact_tagline mb-2 text-white">Stay Connected</p>
                             <h2 class="mb-3 text-white">Let’s Build a Stronger Bond</h2>
                             <p class="text-white">
                                 Join our community and stay updated with our latest news, offers, and natural wellness insights.
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>

     <!-- Dots -->
     <div class="carousel-indicators">
         <button type="button" data-bs-target="#contactSlider" data-bs-slide-to="0" class="active"></button>
         <button type="button" data-bs-target="#contactSlider" data-bs-slide-to="1"></button>
         <button type="button" data-bs-target="#contactSlider" data-bs-slide-to="2"></button>
     </div>
 </section>


 <!-- banner end -->

 <!-- about_sec start -->
<section class="about_sec sec position-relative">
    <span class="contact_cf-helz">Verdian Roots</span>

    <!-- Keep same background -->
    <img src="{{ asset('images/about-bg.png') }}" alt="about-bg" class="background-bg" />

    <div class="container contact_cf-container">
        <div class="row justify-content-center align-items-center contact_cf-row">

            <!-- Left Text Section -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 contact_cf-col">
                <div class="contact_cf-text">
                    <img src="{{ asset('images/green-line.png') }}" alt="green-line" class="green-line contact_cf-green-line">
                     <img src="{{ asset('images/green-line1.png') }}" alt="green-line1" class="green-line1 contact_cf-green-line1">

                    <p class="black contact_cf-tagline">Get in Touch with Us</p>
                    <h2 class="contact_cf-h2 mb-3">We’d Love to Hear From You</h2>
                    <p class="contact_cf-p mb-4">
                        Whether you have a question about our products, need support, or just want to connect,
                        we’re here to listen and assist you. Fill out the form and our team will respond shortly.
                    </p>

                    <a href="#" class="theme-btn contact_cf-theme-btn" data-aos="fade-up">
                        Learn More
                        <span class="leaf-icon">
                            <i class="fa-solid fa-leaf"></i>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Right Form Section -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 contact_cf-col-form">
                <div class="contact_cf-form-box p-4 shadow-lg">
                    <form class="contact_cf-form" action="#" method="post">
                        <div class="mb-3">
                            <label for="contact_cf-name" class="form-label text-[#337a4e]">Name</label>
                            <input type="text" id="contact_cf-name" name="name" class="form-control contact_cf-input" placeholder="Enter your name" required>
                        </div>

                        <div class="mb-3">
                            <label for="contact_cf-email" class="form-label text-[#337a4e]">Email</label>
                            <input type="email" id="contact_cf-email" name="email" class="form-control contact_cf-input" placeholder="Enter your email" required>
                        </div>

                        <div class="mb-3">
                            <label for="contact_cf-message" class="form-label text-[#337a4e]">Message</label>
                            <textarea id="contact_cf-message" name="message" rows="4" class="form-control contact_cf-input" placeholder="Write your message" required></textarea>
                        </div>

                        <button type="submit" class="theme-btn w-100 contact_cf-submit-btn">
                            Send Message
                            <span class="leaf-icon">
                                <i class="fa-solid fa-paper-plane"></i>
                            </span>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

 <!-- about_sec end -->

 <!-- section start -->
 <!-- section end  -->


 <!-- section start -->
 <!-- section end  -->


 <!-- section start -->
 <!-- section end  -->


 <!-- section gallery-sec start -->
 <!-- section gallery-sec end  -->


 <!-- section start -->
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
                    <div class="col-lg-4">
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


 @endsection