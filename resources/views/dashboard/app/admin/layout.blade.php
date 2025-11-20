<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    {{-- Include the common CSS here or link to a file --}}
    <link rel="stylesheet" href="{{asset('css/layout_style.css')}}">
</head>
<body>
    <div class="dashboard-container">
        {{-- Include the specific sidebar --}}
        @include('dashboard.app.admin.sidebar') 

        <div class="content-area">
            <h1>Admin Content</h1>
            <hr>
            {{-- This is where the dashboard specific content will be injected --}}
            @yield('content') 
        </div>
    </div>
</body>
</html>