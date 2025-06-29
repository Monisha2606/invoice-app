<h2>Hello {{ $invoice->client_name }}</h2>

<p>Your invoice has been created successfully!</p>

<p><strong>Description:</strong> {{ $invoice->item_description }}</p>
<p><strong>Quantity:</strong> {{ $invoice->quantity }}</p>
<p><strong>Total:</strong> ₹{{ $invoice->total }}</p>
