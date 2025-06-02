<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/admin/layout.css') }}" rel="stylesheet">

    @yield('styles')
</head>
<body>

<div class="sidebar">
    <h4 class="text-white text-center mb-4">Admin</h4>
    <a href="{{ route('admin.dashboard') }}"
       class="{{ request()->routeIs('admin.dashboard') ? 'bg-primary text-white' : '' }}">
        Dashboard
    </a>
    <a href="#"
       class="{{ request()->routeIs('admin.users') ? 'bg-primary text-white' : '' }}">
        Users
    </a>
    <a href="#"
       class="{{ request()->routeIs('admin.settings') ? 'bg-primary text-white' : '' }}">
        Settings
    </a>
    <a href="{{ route('admin.logout') }}"
       class="{{ request()->routeIs('admin.reports') ? 'bg-primary text-white' : '' }}">
        Reports
    </a>
</div>

<nav class="navbar navbar-expand navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <span class="navbar-brand">Dashboard</span>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.logout') }}">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div class="content">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@yield('scripts')
</body>
</html>
