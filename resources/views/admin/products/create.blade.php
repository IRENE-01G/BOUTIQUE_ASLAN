@extends('layout.admin')

@section('content')
    <style>
        .custom-file-input::file-selector-button {
            margin-right: 20px;
            border: none;
            background: #4361ee;
            padding: 8px 16px;
            border-radius: 8px;
            color: #fff;
            cursor: pointer;
            transition: background .2s ease-in-out;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }

        .custom-file-input::file-selector-button:hover {
            background: #3a0ca3;
        }
    </style>
    <div class="dashboard-header">
        <div>
            <h1>Ajouter un Produit</h1>
            <p>Remplissez les informations ci-dessous.</p>
        </div>
        <a href="{{ route('admin.products.index') }}" class="btn-clean" style="width: auto; display: inline-block; text-decoration: none;"><i class='bx bx-arrow-back'></i>
            Retour
        </a>
    </div>

    <div class="card-box" style="max-width: 800px; margin: 0 auto;">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: 500;">Nom du Produit</label>
                <input type="text" name="name" required
                    style="width: 100%; padding: 12px; border: 1px solid #e5e7eb; border-radius: 12px; font-size: 14px; outline: none;">
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">Catégorie</label>
                    <select name="category_id" required
                        style="width: 100%; padding: 12px; border: 1px solid #e5e7eb; border-radius: 12px; font-size: 14px; outline: none; background: white;">
                        <option value="">Choisir une catégorie...</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">Prix (FCFA)</label>
                    <input type="number" name="price" required
                        style="width: 100%; padding: 12px; border: 1px solid #e5e7eb; border-radius: 12px; font-size: 14px; outline: none;">
                </div>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: 500;">Stock Initial</label>
                <input type="number" name="stock" value="1" min="0" required
                    style="width: 100%; padding: 12px; border: 1px solid #e5e7eb; border-radius: 12px; font-size: 14px; outline: none;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: 500;">Description</label>
                <textarea name="description" rows="4"
                    style="width: 100%; padding: 12px; border: 1px solid #e5e7eb; border-radius: 12px; font-size: 14px; outline: none; resize: vertical;"></textarea>
            </div>

            <div style="margin-bottom: 30px;">
                <label style="display: block; margin-bottom: 8px; font-weight: 500;">Image du Produit</label>
                <input type="file" name="image" accept="image/*" class="custom-file-input"
                    style="width: 100%; padding: 12px; border: 2px dashed #4361ee; border-radius: 16px; font-size: 15px; outline: none; background: #f4f6ff; color: #4361ee; cursor: pointer;">
            </div>

            <button type="submit" class="btn-primary-action" style="width: 100%; justify-content: center;">
                Enregistrer le Produit
            </button>
        </form>
    </div>
@endsection