@extends('dashboard.app.admin.layout')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">Manage Contact Page Content</h1>

            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="accordion" id="contactContentAccordion">
                @include('dashboard.admin.contact.pages.section.slider')
                @include('dashboard.admin.contact.pages.section.contact_section')
                @include('dashboard.admin.contact.pages.section.testimonials')
            </div>
        </div>
    </div>
</div>
@endsection