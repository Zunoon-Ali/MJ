@extends('dashboard.app.user.layout')

@section('content')
     <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>User Dashboard {{ Auth::user()->name }}</h1>
      </div>
    </div>
  </div>
@endsection