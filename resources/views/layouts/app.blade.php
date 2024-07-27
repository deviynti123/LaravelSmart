<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - YourAppName</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            color: #fff;
            padding-top: 20px;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
        .bg-light {
            background-color: #f8f9fa !important;
        }
    </style>
</head>
<body class="bg-light">

    <div class="sidebar">
        <h4 class="text-center">PEMILIHAN STAFF OF THE MONTH</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('alternatifs.index') }}">
                    <i class="fas fa-list"></i> Daftar Alternatif
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('kriterias.index') }}">
                    <i class="fas fa-list"></i> Daftar Kriteria
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dss.result') }}">
                    <i class="fas fa-list"></i> DSS Result
                </a>
            </li>
        </ul>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@
