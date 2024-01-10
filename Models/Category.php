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

    public function getName()
    {
        return $this->name;
    }

    public function getIcon()
    {
        return $this->icon;
    }

}   