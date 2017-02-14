<?php
/**
 * Created by PhpStorm.
 * User: takahiro
 * Date: 2017/02/14
 * Time: 22:14
 */
class BusinessPerson {
    public $first_name = 'hello';
    public $last_name  = 'world';

    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name  = $last_name;
    }

    public function work() {
        echo "<p>{$this->first_name}{$this->last_name}は働いています。</p>";
    }
}