<?php
/**
 * Created by PhpStorm.
 * User: takahiro
 * Date: 2017/02/18
 * Time: 22:33
 */
require_once 'ifigure.php';

class triangle2 implements ifigure
{
    private $width;
    private $height;

    public function __construct()
    {
        $this->width = $width;
        $this->height = $height;
    }

    // ifigure::getAreaメソッドを実装
    public function getArea()
    {
        return $this->width * $this->height / 2;
    }
}