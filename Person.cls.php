<?php

namespace oop;

include 'Human.cls.php';

/**
 * Abstract Class Person
 *
 */
abstract class Person extends Human implements HumanActions
{
    private $name;

    protected function setName($name){
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function run()
    {
        return $this->name . ' can ' . __FUNCTION__;
    }

    public function jump()
    {
        // TODO: Implement jump() method.
        return $this->name . ' can ' . __FUNCTION__;
    }

    public function sing()
    {
        return $this->name . ' can ' . __FUNCTION__;
    }

}

/**
 * Interface ArmyActions
 * Only Army can perform these actions besides being a human.
 */
interface ArmyActions
{
    public function fire();

    public function battle();
}