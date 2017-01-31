<?php

class TriangleFigure
{
    private $base;
    private $height;

    public function __construct()
    {
        $this->base = 1;
        $this->height = 1;
    }

    public function getBase()
    {
        return $this->base;
    }

    public function setBase($base)
    {
        if (is_numeric($base) && $base > 0) {
            $this->base = $base;
        }
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        if (is_numeric($height) && $height > 0) {
            $this->height = $height;
        }
    }

    public function getArea()
    {
        return $this->getBase() * $this->getArea() / 2;
    }
}