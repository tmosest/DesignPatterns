<?php
namespace DesignPatterns\Strategy;
/**
 * Class Dog
 * @package DesignPatterns\Strategy
 */
class Dog extends Animal {
    /**
     * Dog constructor.
     */
    public function __construct() {
        $this->setFlyingAbility(new CantFly());
    }
}