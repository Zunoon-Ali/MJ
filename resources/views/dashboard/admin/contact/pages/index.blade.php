@extends('dashboard.app.admin.layout')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4"><i class="fa-solid fa-envelope me-2"></i>Manage Contact Page Content</h1>

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
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