<?php
include "ComparableCircle.php";
$circles[0] = new ComparableCircle(Circle1,8);
$circles[1] = new ComparableCircle(Circle2,2);
$circles[2] = new ComparableCircle(Circle3,4);

echo ('Pre-sorted: <br>');
foreach ($circles as $circle) {
    echo ('name: ' . $circle->getName() . ', radius: ' . $circle->getRadius() . '<br>');
}
sort($circles);
echo ('After-sorted: <br>');
foreach ($circles as $circle) {
    echo ('name: ' . $circle->getName() . ', radius: ' . $circle->getRadius() . '<br>');
}