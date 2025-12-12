<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard - Verdian Roots</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/layout_style.css')}}">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 260px;
            background: linear-gradient(135deg, #337a4e 0%, #2a6340 100%);
            color: white;
            padding: 0;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            height: 100vh;
            overflow-y: auto;
        }

        .sidebar h2 {
            padding: 20px;
            margin: 0;
            background: rgba(0, 0, 0, 0.2);
            font-size: 1.5rem;
            font-weight: 600;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin: 0;
        }

        .sidebar ul li a {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .sidebar ul li a:hover {
            background: rgba(255, 255, 255, 0.1);
            border-left-color: #fff;
            color: #fff;
        }

        .sidebar ul li a.active {
            background: rgba(255, 255, 255, 0.15);
            border-left-color: #fff;
            color: #fff;
            font-weight: 600;
        }

        .sidebar ul li a i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
            font-size: 1.1rem;
        }

        .sidebar .badge {
            margin-left: auto;
            background: #ff6b6b;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 0.75rem;
        }

        .content-area {
            flex: 1;
            margin-left: 260px;
            padding: 30px;
            background-color: #f8f9fa;
        }

        .content-area h1 {
            color: #337a4e;
            margin-bottom: 10px;
            font-weight: 700;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .content-area {
                margin-left: 0;
                padding: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="dashboard-container">
        @include('dashboard.app.user.sidebar')
        <div class="content-area">
            <h1><i class="fas fa-tachometer-alt me-2"></i>User Dashboard</h1>
            <hr>
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>