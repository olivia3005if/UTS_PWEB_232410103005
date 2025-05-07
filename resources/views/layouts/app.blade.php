<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KDrama Manager - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
        }
        .content-wrapper {
            min-height: calc(100vh - 140px);
            padding: 20px 0;
        }
        .kdrama-card {
            transition: transform 0.3s;
            margin-bottom: 20px;
            height: 100%;
        }
        .kdrama-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .rating-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: rgba(0,0,0,0.7);
            color: rgb(237, 105, 222);
            font-weight: bold;
        }
        .profile-header {
            background: linear-gradient(135deg, #f26fcf 0%, #2575fc 100%);
            color: white;
            padding: 3rem 0;
        }
        .dashboard-stats {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(239, 175, 175, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        .dashboard-stats:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <x-navbar/>

    <div class="content-wrapper">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <x-footer/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
