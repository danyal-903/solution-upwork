<?php

class LineItem
{
    private $item_id,
        $description,
        $unit_price,
        $qty,
        $discount_type,
        $discount_value,
        $tax_percent;

    private $tax_type;

    function __construct($inputLine, $document = ['tax_type' => 'exclusive'])
    {
        $this->item_id = $inputLine['item_id'];
        $this->description = $inputLine['description'];
        $this->unit_price = $inputLine['unit_price'];
        $this->qty = $inputLine['qty'];
        $this->discount_type = $inputLine['discount_type'];
        $this->discount_value = $inputLine['discount_value'];
        $this->tax_percent = $inputLine['tax_percent'];
        $this->tax_type = $document['tax_type'];
    }

    function subTotal()
    {
        return round($this->unit_price * $this->qty, 2);
    }

    function taxAmount()
    {
        $discount = $this->discountAmount();
        if ($this->tax_type == 'exclusive') {
            return  round($this->qty * (($this->unit_price - $discount) * ($this->tax_percent / 100)), 2);
        } else {
            return  round($this->qty * (($this->unit_price - $discount) -  ($this->unit_price - $discount / (1 + ($this->tax_percent / 100)))), 2);
        }
    }

    function netPrice()
    {
        $discount = $this->discountAmount();

        if ($this->tax_type == 'exclusive') {
            return  round($this->qty * (($this->unit_price - $discount)), 2);
        } else {
            return  round($this->qty * (($this->unit_price - $discount) / (1 + ($this->tax_percent / 100))), 2);
        }
    }

    function discountAmount()
    {
        if ($this->discount_type == 'percent') {
            return round(($this->discount_value / 100) * $this->unit_price * $this->qty, 2);
        } else {
            return $this->discount_value;
        }
    }

    function totalAmount()
    {
        return round($this->netPrice() + $this->taxAmount(), 2);
    }
}