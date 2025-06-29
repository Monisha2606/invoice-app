<?php

namespace App\Services;

class InvoiceCalculator
{

    public function calculate($quantity, $price, $tax) {
        $subtotal = $quantity * $price;
        $taxAmount = ($subtotal * $tax) / 100;
        $total = $subtotal + $taxAmount;

        return compact('subtotal', 'taxAmount', 'total');
    }
}
