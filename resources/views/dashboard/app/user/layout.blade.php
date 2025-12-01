<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
   <link rel="stylesheet" href="{{asset('css/layout_style.css')}}">
</head>

<body>
    <div class="dashboard-container">
        @include('dashboard.app.user.sidebar')
        <div class="content-area">
            <h1>User Dashboard</h1>
            <hr>
            @yield('content')
        </div>
    </div>
</body>

</html>