<?php

trait Quantity 
{
    protected $quantity;

    public function setQuantity($_quantity) {
        if($_quantity > 0) {
            $this->quantity = $_quantity;
        } else {
            throw new Exception('La quantità deve essere maggiore di 0');
        }
    }

    public function getQuantity() {
        return $this->quantity;
    }
}