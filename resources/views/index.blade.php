@extends('layouts.app')

@section('title', 'Home - Leaf Healz')

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
  @include('sections.banner')

    <!-- banner end -->

    <!-- about_sec start -->
  @include('sections.about')
    <!-- about_sec end -->

    <!-- section start -->
   @include('sections.product')
    <!-- section end  -->


    <!-- section start -->
  @include('sections.store')
    <!-- section end  -->


    <!-- section start -->
@include('sections.tatto')
    <!-- section end  -->


    <!-- section gallery-sec start -->
   @include('sections.gallery')
    <!-- section gallery-sec end  -->


    <!-- section start -->
  @include('sections.testimonials')
 

    @endsection