@extends('layouts.app')

@section('title', 'Home - Veridan Roots')

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
            <img src="{{ url('images/product9.png') }}" alt="Root Herb Care" class="loader-img">
        </div>
    </div>
</div>


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