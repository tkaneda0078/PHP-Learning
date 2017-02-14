<?php
/**
 * Created by PhpStorm.
 * User: tkaneda
 * Date: 2017/02/14
 * Time: 13:00
 *
 * &（アンパサンド）を利用して参照渡し
 */
function sample(&$foo) {
    $foo++;
}

$var = 1;
sample($var);

echo $var;