<?php
namespace DesignPatterns\Strategy;
/**
 * Class Bird
 * @package DesignPatterns\Strategy
 */
class Bird extends Animal {
    /**
     * Bird constructor.
     */
    public function __construct() {
        $this->setFlyingAbility(new ItFlys());
    }
}