<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="{{ asset('assets/icons/document.png') }}">
    <title> Invoice Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd, #ffffff);
        }

        .invoice-form {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .form-heading {
            font-weight: 600;
            font-size: 28px;
        }

        label img {
            vertical-align: middle;
            margin-right: 8px;
        }

        small.text-danger {
            margin-top: 5px;
            display: block;
        }
    </style>
</head>
<body>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="invoice-form">

                <h2 class="form-heading mb-4 text-primary"><img src="{{ asset('assets/icons/document.png') }}" alt="document" width="40"> Invoice Generator</h2>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ url('/invoice') }}" method="POST" novalidate>
                    @csrf

                    <!-- Client Name -->
                    <div class="form-floating mb-3">
                        <input type="text" name="client_name" id="client_name"
                               class="form-control @error('client_name') is-invalid @enderror"
                               placeholder="Client Name" value="{{ old('client_name') }}" required>
                        <label for="client_name">
                            <img src="{{ asset('assets/icons/client.png') }}" alt="Client" width="20">
                            Client Name
                        </label>
                        @error('client_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-floating mb-3">
                        <input type="email" name="email" id="email"
                               class="form-control @error('email') is-invalid @enderror"
                               placeholder="Client Email" value="{{ old('email') }}" required>
                        <label for="email">
                            <img src="{{ asset('assets/icons/email.png') }}" alt="Email" width="20">
                            Client Email
                        </label>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Item Description -->
                    <div class="form-floating mb-3">
                        <input type="text" name="item_description" id="item_description"
                               class="form-control @error('item_description') is-invalid @enderror"
                               placeholder="Item Description" value="{{ old('item_description') }}" required>
                        <label for="item_description">
                            <img src="{{ asset('assets/icons/item.png') }}" alt="Item" width="20">
                            Item Description
                        </label>
                        @error('item_description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Quantity -->
                    <div class="form-floating mb-3">
                        <input type="number" name="quantity" id="quantity"
                               class="form-control @error('quantity') is-invalid @enderror"
                               placeholder="Quantity" value="{{ old('quantity') }}" min="1" required>
                        <label for="quantity">
                            <img src="{{ asset('assets/icons/quantity.png') }}" alt="Quantity" width="20">
                            Quantity
                        </label>
                        @error('quantity')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Price per Item -->
                    <div class="form-floating mb-3">
                        <input type="number" step="0.01" name="price_per_item" id="price_per_item"
                               class="form-control @error('price_per_item') is-invalid @enderror"
                               placeholder="Price per Item" value="{{ old('price_per_item') }}" required>
                        <label for="price_per_item">
                            <img src="{{ asset('assets/icons/price.png') }}" alt="Price" width="20">
                            Price per Item
                        </label>
                        @error('price_per_item')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Tax Percentage -->
                    <div class="form-floating mb-4">
                        <input type="number" step="0.01" name="tax_percentage" id="tax_percentage"
                               class="form-control @error('tax_percentage') is-invalid @enderror"
                               placeholder="Tax Percentage" value="{{ old('tax_percentage') }}" required>
                        <label for="tax_percentage">
                            <img src="{{ asset('assets/icons/tax.png') }}" alt="Tax" width="20">
                            Tax Percentage (%)
                        </label>
                        @error('tax_percentage')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Submit -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-lg">
                            <img src="{{ asset('assets/icons/send.png') }}" alt="Send" width="24" class="me-2">
                            Generate Invoice
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>
