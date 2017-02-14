<?php
/**
 * Created by PhpStorm.
 * User: tkaneda
 * Date: 2017/02/14
 * Time: 13:19
 *
 * 継承
 */
class Animal {
    protected $name = null;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}


class AnimalKing extends Animal {
    private $animal_king = null;

    public function setAnimalKing($animal_king) {
        $this->animal_king = $animal_king;
    }

    public function getAnimalKing() {
        if (isset($this->animal_king)) {
            return $this->animal_king;
        } else {
            return false;
        }
    }
}

$animal = new AnimalKing('dog');
$animal->setAnimalKing('cat');
echo $animal->getName(), PHP_EOL;
echo $animal->getAnimalKing(), PHP_EOL;