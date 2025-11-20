@extends('dashboard.app.admin.layout')

@section('content')
    <p>Welcome, Admin(' {{ Auth::user()->name }} ')! This is the main administrative area. Here you can see key metrics and performance indicators.</p>
    
    <div style="background: #fff; padding: 20px; border-radius: 5px; margin-bottom: 20px;">
        <h3>Quick Stats</h3>
        <p>New Orders: **15**</p>
        <p>Total Products: **120**</p>
        <p>New User Registrations: **8**</p>
    </div>

    {{-- Content to test overflow --}}
    @for ($i = 0; $i < 50; $i++)
        <p>Admin Dashboard Content Line {{ $i + 1 }}. The content area will scroll independently of the sidebar. This ensures the sidebar is always visible and the content is never hidden behind it.</p>
    @endfor
@endsection