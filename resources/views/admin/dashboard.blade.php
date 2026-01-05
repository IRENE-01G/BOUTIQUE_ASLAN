@extends('layout.admin')

@section('content')
    <div class="dashboard-header">
        <div>
            <h1>Tableau de Bord</h1>
            <p>Bienvenue, voici ce qui se passe aujourd'hui.</p>
        </div>
        <button class="btn-primary-action">
            <i class='bx bx-plus'></i>
            Nouveau Produit
        </button>
    </div>

    <!-- KPI Cards -->
    <div class="kpi-grid">
        <div class="kpi-card purple-gradient">
            <div class="kpi-content">
                <span>Total Commandes</span>
                <h3>{{ $totalCommandes }}</h3>
                <div class="kpi-trend">
                    <i class='bx bx-trending-up'></i>
                    <span>+12.5%</span>
                </div>
            </div>
            <div class="kpi-icon">
                <i class='bx bxs-cart-alt'></i>
            </div>
        </div>

        <div class="kpi-card blue-gradient">
            <div class="kpi-content">
                <span>Clients Actifs</span>
                <h3>{{ $totalUsers }}</h3>
                <div class="kpi-trend">
                    <i class='bx bx-user-plus'></i>
                    <span>+5 Nouveaux</span>
                </div>
            </div>
            <div class="kpi-icon">
                <i class='bx bxs-user-account'></i>
            </div>
        </div>

        <div class="kpi-card orange-gradient">
            <div class="kpi-content">
                <span>Produits en Stock</span>
                <h3>{{ $totalProduits }}</h3>
                <div class="kpi-trend negative">
                    <i class='bx bx-error-circle'></i>
                    <span>3 Ruptures</span>
                </div>
            </div>
            <div class="kpi-icon">
                <i class='bx bxs-package'></i>
            </div>
        </div>

        <div class="kpi-card green-gradient">
            <div class="kpi-content">
                <span>Chiffre d'Affaires</span>
                <h3>1.2M FCFA</h3> <!-- Hardcoded for demo if not in controller -->
                <div class="kpi-trend">
                    <i class='bx bx-wallet'></i>
                    <span>Ce mois</span>
                </div>
            </div>
            <div class="kpi-icon">
                <i class='bx bxs-bank'></i>
            </div>
        </div>
    </div>

    <!-- Recent Orders & Reservations Grid -->
    <div class="content-grid-2">
        <!-- Recent Orders -->
        <div class="card-box">
            <div class="card-header">
                <h3>Commandes Récentes</h3>
                <a href="#" class="link-view-all">Tout voir</a>
            </div>
            <div class="table-responsive">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Référence</th>
                            <th>Client</th>
                            <th>Montant</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentOrders as $order)
                            <tr>
                                <td class="font-bold">#{{ $order->id }}</td>
                                <td>
                                    <div class="client-cell">
                                        <div class="client-avatar">{{ substr($order->user->name ?? 'C', 0, 1) }}</div>
                                        <span>{{ $order->user->name ?? 'Guest' }}</span>
                                    </div>
                                </td>
                                <td>{{ number_format($order->montant_total ?? 0, 0, ',', ' ') }} FCFA</td>
                                <td>
                                    @php
                                        $statusClass = 'pending';
                                        if (($order->statut ?? '') === 'Livré')
                                            $statusClass = 'success';
                                        if (($order->statut ?? '') === 'Annulé')
                                            $statusClass = 'danger';
                                    @endphp
                                    <span class="status-pill {{ $statusClass }}">{{ $order->statut ?? 'En attente' }}</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">Aucune commande récente</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Quick Actions / Mini Stats -->
        <div class="side-widgets">
            <!-- Reservation Request -->
            <div class="card-box">
                <div class="card-header">
                    <h3>Demandes de Rendez-vous</h3>
                </div>
                <div class="reservation-list">
                    <!-- Fake Item 1 -->
                    <div class="reservation-item">
                        <div class="res-date">
                            <span class="day">12</span>
                            <span class="month">JAN</span>
                        </div>
                        <div class="res-info">
                            <h4>Tressage - Nattes Collées</h4>
                            <p>14:00 - Mariama Ba</p>
                        </div>
                        <button class="btn-icon-action"><i class='bx bx-check'></i></button>
                    </div>
                    <!-- Fake Item 2 -->
                    <div class="reservation-item">
                        <div class="res-date">
                            <span class="day">12</span>
                            <span class="month">JAN</span>
                        </div>
                        <div class="res-info">
                            <h4>Pose Perruque</h4>
                            <p>16:30 - Fatou Ndiaye</p>
                        </div>
                        <button class="btn-icon-action"><i class='bx bx-check'></i></button>
                    </div>
                </div>
            </div>

            <!-- Ad / Promo -->
            <div class="promo-card">
                <i class='bx bxs-megaphone'></i>
                <h4>Nouvelle Collection ?</h4>
                <p>Pensez à mettre à jour le stock pour la collection "Summer Vibes" !</p>
                <button class="btn-clean">Gérer le stock</button>
            </div>
        </div>
    </div>
@endsection