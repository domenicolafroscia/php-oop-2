<?php

require_once __DIR__ . '/Product.php';


class Food extends Product
{
    protected $expire;

    public function setExpire($_expire)
    {
        $this->expire = $_expire;
    }

    public function getExpire()
    {
        return $this->expire;
    }
}