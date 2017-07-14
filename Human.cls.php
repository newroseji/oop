<?php
namespace oop;

/**
 * Abstract Class Human
 *
 */
abstract class Human
{
    abstract function run();

    abstract function jump();

    abstract protected function setName($name);

    abstract function getName();

}

/**
 * Interface HumanActions
 *
 */
interface HumanActions
{
    public function sing();
}