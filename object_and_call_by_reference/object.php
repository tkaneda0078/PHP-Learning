<?php
/**
 * Created by PhpStorm.
 * User: tkaneda
 * Date: 2017/02/14
 * Time: 13:14
 */
class Color {
    public $color = null;

    public function __construct() {
        $this->color = 'red';
    }

    public function getColor() {
        return $this->color;
    }
}

$color = new Color();
echo $color->getColor();