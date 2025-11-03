<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f8f6;
            color: #222;
        }

        .navbar {
            background-color: #2e7d6c;
        }

        .navbar-brand, .nav-link, .navbar-text {
            color: #fff !important;
        }

        .card {
            border: none;
            border-radius: 14px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }

        .btn-primary {
            background-color: #2e7d6c;
            border: none;
        }

        .btn-primary:hover {
            background-color: #256358;
        }

        .btn-warning {
            background-color: #f0a500;
            border: none;
        }

        .btn-warning:hover {
            background-color: #d98f00;
        }

        .alert-success {
            background-color: #e8f5e9;
            color: #256358;
            border: 1px solid #cde5d1;
        }

        .table thead {
            background-color: #2e7d6c;
            color: #fff;
        }

        .table tbody tr:hover {
            background-color: #f5f5f5;
        }

        .btn {
    transition: all 0.2s ease-in-out;
        }
        .btn:hover {
            transform: translateY(-2px);
        }

        input.form-control, textarea.form-control {
    border-radius: 10px;
    border: 1px solid #ddd;
    background-color: #fff;
    transition: all 0.2s ease-in-out;
        }

        input.form-control:focus, textarea.form-control:focus {
            border-color: #2e7d6c;
            box-shadow: 0 0 0 3px rgba(46, 125, 108, 0.15);
        }

        .btn-outline-secondary {
            border-radius: 8px;
            border-color: #ccc;
            color: #555;
        }

        .btn-outline-secondary:hover {
            background-color: #eee;
        }


    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="/">Task Manager</a>
        </div>
    </nav>

    <div class="container py-4">
        @yield('content')
    </div>
</body>
</html>
