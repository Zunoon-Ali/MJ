<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/layout_style.css')}}">
</head>
<body>
    <div class="dashboard-container">
        @include('dashboard.app.admin.sidebar') 

        <div class="content-area">
            <h1>Admin Content</h1>
            <hr>
            @yield('content') 
        </div>
    </div>
</body>
</html>