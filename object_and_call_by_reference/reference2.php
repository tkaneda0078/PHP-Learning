<?php
/**
 * Created by PhpStorm.
 * User: tkaneda
 * Date: 2017/02/14
 * Time: 13:10
 *
 * global修飾子によって参照渡し
 */
function sample() {
    global $val;

    $val++;
}

$val = 1;
sample();

echo $val;