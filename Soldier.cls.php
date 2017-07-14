<?php

namespace oop;

include 'Person.cls.php';

/**
 * Class Soldier
 * A soldier will have all the behavior of a Human
 * and can perform the actions of a soldier.
 */
class Soldier extends Person implements ArmyActions
{

    protected $title;

    function __construct($name = "John Doe", $title = "Lieutenant")
    {
        $this->setName($name);
        $this->title = $title;
    }

    /**
     * An action
     * @return string
     */
    public function fire()
    {
        return parent::getName() . ' can fire a gun';
    }

    /**
     * A Battle action
     * @return string
     */
    public function battle()
    {
        return parent::getName() . ' can involve in a battle';
    }

    /**
     * Get the post/title.
     *
     * @return string
     */
    public function getTitle()
    {
        // TODO: Implement getTitle() method.
        return $this->title;
    }

}