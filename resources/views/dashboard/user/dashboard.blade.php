@extends('dashboard.app.user.layout')

@section('content')
    <p>Hello User(' {{ Auth::user()->name }} ')! Welcome to your personal hair grooming account dashboard. Here you can manage your orders and profile.</p>

    <div style="background: #fff; padding: 20px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #ddd;">
        <h3>Recent Order Summary</h3>
        <p>Last Order Placed: **#98765** on **Nov 18, 2025**</p>
        <p>Status: **Shipped**</p>
        <a href="#">View All Orders</a>
    </div>

    <h3>Recommended Grooming Products For You</h3>
    <p>Based on your purchase history of hair oils, we recommend a new high-hold clay.</p>

    {{-- Content to test overflow --}}
    @for ($i = 0; $i < 50; $i++)
        <p>User Dashboard Content Line {{ $i + 1 }}. The content area will scroll independently of the user sidebar. Your account links are always available on the left.</p>
    @endfor
@endsection