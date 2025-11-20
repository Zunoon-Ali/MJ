<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    {{-- Use the same CSS structure, maybe with different color variables for the user style --}}
   <link rel="stylesheet" href="{{asset('css/layout_style.css')}}">
</head>

<body>
    <div class="dashboard-container">
        {{-- Include the specific sidebar --}}
        @include('dashboard.app.admin.sidebar')
        <div class="content-area">
            <h1>User Dashboard</h1>
            <hr>
            {{-- This is where the dashboard specific content will be injected --}}
            @yield('content')
        </div>
    </div>
</body>

</html>