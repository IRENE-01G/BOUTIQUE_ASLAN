<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Aslan Shop</title>
    <!-- Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('styles/admin.css') }}">
</head>

<body>

    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="brand">
                <i class='bx bxs-shopping-bag-alt brand-icon'></i>
                <div class="brand-text">
                    <h2>ASLAN SHOP</h2>
                    <span>Admin Panel</span>
                </div>
            </div>

            <ul class="nav-menu">
                <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class='bx bxs-dashboard'></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.products.index') }}">
                        <i class='bx bxs-package'></i>
                        <span>Produits</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <i class='bx bxs-cart'></i>
                        <span>Commandes</span>
                        <span class="badge">12</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <i class='bx bxs-calendar-event'></i>
                        <span>Réservations</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <i class='bx bxs-group'></i>
                        <span>Clients</span>
                    </a>
                </li>
                <li class="nav-section-title">PARAMÈTRES</li>
                <li class="nav-item">
                    <a href="#">
                        <i class='bx bxs-cog'></i>
                        <span>Configuration</span>
                    </a>
                </li>
            </ul>

            <div class="sidebar-bottom">
                <a href="{{ url('/') }}" class="logout-btn">
                    <i class='bx bx-log-out-circle'></i>
                    <span>Déconnexion</span>
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="top-header">
                <div class="header-search">
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="Rechercher...">
                </div>

                <div class="header-actions">
                    <div class="action-item">
                        <i class='bx bx-bell'></i>
                        <span class="notification-dot"></span>
                    </div>
                    <div class="user-profile">
                        <img src="{{ asset('assets/yu.jpg') }}" alt="Admin" class="user-img"> <!-- Placeholder -->
                        <div class="user-info">
                            <h4>Admin Master</h4>
                            <span>Super Admin</span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <div class="page-body">
                @yield('content')
            </div>
        </main>
    </div>

</body>

</html>