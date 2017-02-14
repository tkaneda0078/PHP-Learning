<?php

/**
 * Created by PhpStorm.
 * User: tkaneda
 * Date: 2017/02/14
 * Time: 15:15
 */
class Fruit {
    private $name = null;
    private $size = nill;
    private $price = null;

    public function __construct($name, $size, $price) {
         $this->name = $name;
         $this->size = $size;
         $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getSize() {
        return $this->size;
    }

    public function getPrice() {
        return $this->price;
    }
}

$fruit = new Fruit('melon', 'apple', '￥3000');
echo $fruit->getName();