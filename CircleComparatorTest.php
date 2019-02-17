<?php
include "CircleComparator.php";
$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 8);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compareTo($circleOne, $circleTwo));