<?php
namespace oop;

include 'Soldier.cls.php';

	$obj1 = new Soldier('Hugh Jackman','General');

    echo $obj1->getName() . ' is a ' . $obj1->getTitle();
    echo "<br/>";

    echo $obj1->run();
    echo "<br/>";

    echo $obj1->jump();
    echo "<br/>";

    echo $obj1->sing();
	echo "<br/>";
	
	echo $obj1->fire();
    echo "<br/>";

    echo $obj1->battle();
	echo "<br/>";
	
	$obj2 = new Soldier();    
	echo $obj2->getName() . ' is a ' . $obj2->getTitle();