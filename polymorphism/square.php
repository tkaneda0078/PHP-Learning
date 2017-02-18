<?php
/**
 * Created by PhpStorm.
 * User: takahiro
 * Date: 2017/02/18
 * Time: 22:09
 */
require_once 'figure.php';

class Square extends Figure
{
    public function getArea()
    {
        return $this->width * $this->height;
    }
}