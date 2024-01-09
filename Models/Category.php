<?php

class Category 
{
    protected $name;
    protected $icon;

    public function __construct($_name, $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;

    }

}   