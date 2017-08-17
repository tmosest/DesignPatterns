<?php
namespace DesignPatterns\Strategy;
/**
 * Class Flys
 * @package DesignPatterns\Strategy
 *
 * Interface to add new flying functionality.
 */
interface Flys {
    /**
     * @return string
     */
    public function fly(): string;
}
/**
 * Class ItFlys
 * @package DesignPatterns\Strategy
 *
 * Class for flying property to be used by the composite Animal class.
 */
class ItFlys implements Flys {

    public function fly(): string {
        return 'It flys';
    }

}
/**
 * Class CantFly
 * @package DesignPatterns\Strategy
 *
 * Class for the not flying property for animals that can't fly.
 */
class CantFly implements Flys {

    public function fly(): string {
        return 'I can not fly';
    }

}