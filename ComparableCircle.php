<?php
include "Circle.php";
include "Comparable.php";

class ComparableCircle extends Circle implements Comparable
{

    public function compareTo($circleOne, $circleTwo)
    {
        $circleOneRadius = $circleOne->getRadius();
        $circleTwoRadius = $circleTwo->getRadius();
        if ($circleOneRadius > $circleTwoRadius) {
            return 1;
        } else if ($circleOneRadius < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}
