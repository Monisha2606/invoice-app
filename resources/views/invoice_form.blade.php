<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Invoice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">🧾 Invoice Generator</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Validation Errors:</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/invoice') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="client_name" class="form-label">Client Name</label>
            <input type="text" name="client_name" id="client_name" class="form-control" value="{{ old('client_name') }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Client Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3">
            <label for="item_description" class="form-label">Item Description</label>
            <input type="text" name="item_description" id="item_description" class="form-control" value="{{ old('item_description') }}" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ old('quantity') }}" min="1" required>
        </div>

        <div class="mb-3">
            <label for="price_per_item" class="form-label">Price per Item</label>
            <input type="number" step="0.01" name="price_per_item" id="price_per_item" class="form-control" value="{{ old('price_per_item') }}" required>
        </div>

        <div class="mb-3">
            <label for="tax_percentage" class="form-label">Tax Percentage (%)</label>
            <input type="number" step="0.01" name="tax_percentage" id="tax_percentage" class="form-control" value="{{ old('tax_percentage') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Generate Invoice</button>
    </form>
</div>
</body>
</html>
