@extends('layout.admin')

@section('content')
    <style>
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .styled-table {
            width: 100%;
            border-collapse: collapse;
        }

        .styled-table thead tr {
            background-color: #f8fafc;
            color: #64748b;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
            font-size: 1rem;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #f1f5f9;
            transition: background-color 0.2s;
        }

        .styled-table tbody tr:hover {
            background-color: #f8fafc;
        }

        .action-btn {
            width: 35px;
            height: 35px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            font-size: 18px;
            margin-right: 6px;
            text-decoration: none;
        }

        .btn-edit {
            background-color: #e0e7ff;
            color: #4361ee;
        }

        .btn-edit:hover {
            background-color: #4361ee;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(67, 97, 238, 0.2);
        }

        .btn-delete {
            background-color: #fee2e2;
            color: #ef4444;
        }

        .btn-delete:hover {
            background-color: #ef4444;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(239, 68, 68, 0.2);
        }
    </style>

    <div class="dashboard-header">
        <div>
            <h1>Gestion des Produits</h1>
            <p>Gérez votre catalogue de produits ici.</p>
        </div>
        <a href="{{ route('admin.products.create') }}" class="btn-primary-action" style="text-decoration: none">
            <i class='bx bx-plus'></i>
            Nouveau Produit
        </a>
    </div>

    @if(session('success'))
        <div style="background-color: #d1fae5; color: #065f46; padding: 10px; border-radius: 8px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    <div class="card-box">
        <div class="table-responsive">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Catégorie</th>
                        <th>Prix</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td>
                                @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="Img"
                                        style="width: 40px; height: 40px; border-radius: 8px; object-fit: cover;">
                                @else
                                    <div style="width: 40px; height: 40px; background: #eee; border-radius: 8px;"></div>
                                @endif
                            </td>
                            <td class="font-bold">{{ $product->name }}</td>
                            <td>{{ $product->category->name ?? 'N/A' }}</td>
                            <td>{{ number_format($product->price, 0, ',', ' ') }} FCFA</td>
                            <td>
                                @if($product->stock > 0)
                                    <span class="status-pill success">{{ $product->stock }} en stock</span>
                                @else
                                    <span class="status-pill danger">Rupture</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="action-btn btn-edit" title="Modifier">
                                    <i class='bx bx-edit'></i>
                                </a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-btn btn-delete"
                                        onclick="return confirm('Êtes-vous sûr ?')" title="Supprimer">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">Aucun produit trouvé.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection