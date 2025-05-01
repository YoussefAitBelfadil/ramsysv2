<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Ramsys Admin</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <style>
        :root {
            --primary-color: #0066cc;
            --secondary-color: #e6f0ff;
            --dark-color: #333333;
            --light-color: #f8f9fa;
            --success-color: #28a745;
            --danger-color: #dc3545;
            --warning-color: #ffc107;
            --info-color: #17a2b8;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            color: var(--dark-color);
        }

        .admin-sidebar {
            background-color: #ffffff;
            min-height: 100vh;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 250px;
            z-index: 1000;
        }

        .admin-content {
            margin-left: 250px;
            padding: 20px;
        }

        .admin-header {
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            padding: 15px 20px;
            margin-bottom: 20px;
        }

        .admin-logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
            display: block;
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
        }

        .admin-nav .nav-link {
            color: var(--dark-color);
            padding: 12px 20px;
            border-radius: 0;
            display: flex;
            align-items: center;
        }

        .admin-nav .nav-link:hover {
            background-color: var(--secondary-color);
        }

        .admin-nav .nav-link.active {
            background-color: var(--primary-color);
            color: white;
        }

        .admin-nav .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .admin-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            border: none;
        }

        .admin-card .card-header {
            background-color: #ffffff;
            border-bottom: 1px solid #eee;
            font-weight: 600;
            padding: 15px 20px;
        }

        .admin-stat-card {
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .admin-stat-card.products {
            background: linear-gradient(45deg, #4e73df, #224abe);
        }

        .admin-stat-card.users {
            background: linear-gradient(45deg, #1cc88a, #169a6f);
        }

        .admin-stat-card.orders {
            background: linear-gradient(45deg, #36b9cc, #258391);
        }

        .admin-stat-card.revenue {
            background: linear-gradient(45deg, #f6c23e, #dda20a);
        }

        .admin-stat-card .stat-icon {
            font-size: 30px;
            opacity: 0.7;
        }

        .admin-stat-card .stat-value {
            font-size: 24px;
            font-weight: 700;
            margin-top: 10px;
        }

        .admin-stat-card .stat-label {
            font-size: 14px;
            opacity: 0.8;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-badge.pending {
            background-color: #ffeeba;
            color: #856404;
        }

        .status-badge.processing {
            background-color: #b8daff;
            color: #004085;
        }

        .status-badge.completed {
            background-color: #c3e6cb;
            color: #155724;
        }

        .status-badge.cancelled {
            background-color: #f5c6cb;
            color: #721c24;
        }

        .status-badge.in-transit {
            background-color: #bee5eb;
            color: #0c5460;
        }

        .status-badge.delivered {
            background-color: #c3e6cb;
            color: #155724;
        }

        @media (max-width: 991.98px) {
            .admin-sidebar {
                width: 100%;
                position: relative;
                min-height: auto;
            }

            .admin-content {
                margin-left: 0;
            }

            .admin-logo {
                text-align: center;
            }
        }
    </style>

    @yield('styles')
</head>
<body>
    <div class="d-flex">
        <div class="admin-sidebar">
            <a href="{{ route('home') }}" class="admin-logo">
                <img src="{{ asset('images/logo.jpg') }}" alt="Ramsys Logo" style="height: 30px" />
            </a>

            <div class="p-3">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-shrink-0">
                        <div class="avatar-placeholder">
                            <span>{{ substr(Auth::user()->name, 0, 1) }}</span>
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                        <small class="text-muted">Administrator</small>
                    </div>
                </div>
            </div>

            <ul class="nav flex-column admin-nav">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.products.index') }}" class="nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                        <i class="fas fa-box"></i> Products
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.orders.index') }}" class="nav-link {{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">
                        <i class="fas fa-shopping-cart"></i> Orders
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.deliveries.index') }}" class="nav-link {{ request()->routeIs('admin.deliveries.*') ? 'active' : '' }}">
                        <i class="fas fa-truck"></i> Deliveries
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i> Customers
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chart-bar"></i> Reports
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <a href="{{ route('home') }}" class="nav-link text-muted">
                        <i class="fas fa-store"></i> View Store
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link text-danger"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>

        <!-- Content -->
        <div class="admin-content ">
            <div class="admin-header d-flex justify-content-between align-items-center">
                <h1 class="h3 mb-0">@yield('header', 'Dashboard')</h1>
                <div>
                    <span class="text-muted me-3">{{ now()->format('l, F j, Y') }}</span>

                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                responsive: true
            });
        });
    </script>

    @yield('scripts')
</body>
</html>
