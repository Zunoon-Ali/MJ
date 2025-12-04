@extends('dashboard.app.admin.layout')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">Manage Home Page Content</h1>

            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="accordion" id="homeContentAccordion">
                @include('dashboard.admin.home.pages.section.banner')
                 @include('dashboard.admin.home.pages.section.about')
                 @include('dashboard.admin.home.pages.section.product')
                 @include('dashboard.admin.home.pages.section.store')
                 @include('dashboard.admin.home.pages.section.tattoo')
                 @include('dashboard.admin.home.pages.section.testimonials')
            </div>
        </div>
    </div>
</div>
@endsection