<?php

/**
 * Created by PhpStorm.
 * User: takahiro
 * Date: 2017/02/18
 * Time: 22:05
 */
abstract class Figure
{
    protected $width;
    protected $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // 抽象メソッド
    // サブクラスではオーバーライドをする必要がある
    protected abstract function getArea();

}