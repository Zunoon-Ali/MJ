@extends('dashboard.app.admin.layout')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">Manage About Page Content</h1>

            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="accordion" id="aboutContentAccordion">
                @include('dashboard.admin.about.pages.section.slider')
                @include('dashboard.admin.about.pages.section.about_section')
            </div>
        </div>
    </div>
</div>
@endsection