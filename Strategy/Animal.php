<?php
namespace DesignPatterns\Strategy;

/**
 * Class Animal
 * @package DesignPatterns\Strategy
 */
class Animal {

    /*
     * This is the part that represents the Strategy pattern.
     *
     * Here we are using another class to represent
     * the flying property of the class.
     *
     * */
    private $_flyingType = null;

    public function setFlyingAbility(Flys $flyingType) {
        $this->_flyingType = $flyingType;
    }

    public function tryToFly() {
        if($this->_flyingType === null) {
            $this->_flyingType = new CantFly();
        }
        return $this->_flyingType->fly();
    }
    /*
     * End Strategy Pattern.
     */

    private $_name = '';
    private $_height = 0.0;
    private $_weight = 0;

    /**
     * @return string
     */
    public function getName(): string {
        return $this->_name;
    }

    /**
     * @return float
     */
    public function getHeight(): float {
        return $this->_height;
    }

    /**
     * @return int
     */
    public function getWeight(): int {
        return $this->_weight;
    }

    /**
     * @param string $name
     */
    public function setName(string $name) {
        $this->_name = $name;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height) {
        $this->_height = $height;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight) {
        $this->_weight = $weight;
    }
}
