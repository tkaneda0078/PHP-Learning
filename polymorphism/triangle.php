<?php
/**
 * Created by PhpStorm.
 * User: takahiro
 * Date: 2017/02/18
 * Time: 22:07
 */
require_once 'figure.php';

class triangle extends Figure
{
    public function getArea()
    {
        return $this->width * $this->height / 2;
    }
}