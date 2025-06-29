<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\InvoiceCreated;
use App\Models\Invoice;
use Illuminate\Support\Facades\App;
use App\Http\Requests\StoreInvoiceRequest;

class InvoiceController extends Controller
{
    public function create()
{
    return view('invoice_form');
}


public function store(StoreInvoiceRequest $request)
{
    $validated = $request->validated();
    $calculator = App::make('InvoiceCalculator');
    $result = $calculator->calculate(
        $validated['quantity'],
        $validated['price_per_item'],
        $validated['tax_percentage']
    );
    $invoice = new Invoice();
    $invoice->client_name = $validated['client_name'];
    $invoice->email = $validated['email'];
    $invoice->item_description = $validated['item_description'];
    $invoice->quantity = $validated['quantity'];
    $invoice->price_per_item = $validated['price_per_item'];
    $invoice->tax_percentage = $validated['tax_percentage'];
    $invoice->subtotal = $result['subtotal'];
    $invoice->tax_amount = $result['taxAmount']; 
    $invoice->total = $result['total'];
    $invoice->save();

    event(new InvoiceCreated($invoice));

    return back()->with('success', 'Invoice created and email sent!');
}

}
