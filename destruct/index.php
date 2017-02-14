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
        $this->name = 'orange';
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

    public function __destruct() {
        echo "オブジェクトを破棄します".PHP_EOL;
    }
}

$fruit = new Fruit('メロン', '大', '1200円');
echo $fruit->getName().PHP_EOL;
echo '=============='.PHP_EOL;