<?php

require_once 'TriangleFigure.php';

$tri = new TriangleFigure();

$tir->setBase(-10);
$tir->setHeight('hogehoge');

print '三角形の面積：{$tri->getArea()}';