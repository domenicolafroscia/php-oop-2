<?php

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../exception-trait/Quantity.php';

class Product
{
    use Quantity;

    protected $title;
    protected $poster;
    protected $price;  
    protected $discount; 
    protected $category;

    public function __construct(Category $_category)
    {
        $this->category = $_category;
    }

    public function setTitle($_title)
    {
        $this->title = $_title;
    }

    public function getTitle()
    {
        return $this->title;
    }
    
    public function setPoster($_poster)
    {
        $this->poster = $_poster;
    }

    public function getPoster()
    {
        return $this->poster;
    }

    public function setPrice($_price)
    {
        if ($_price > 0 ) {
            $this->price = $_price;
        }
    }

    public function getPrice()
    {
        $total = $this->price - ($this->price * $this->discount / 100);
        return number_format($total, 2) . '€';
    }

    public function setDiscount($_discount) 
    {
        if ($_discount > 0 && $_discount < 100) {
            $this->discount = $_discount;
        }
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getInfo()
    {
        return "Title: {$this->getTitle()}, Price: {$this->getPrice()}, Image: {$this->getPoster()}";
    }
 

}


