<?php
namespace GreatestShowOnEarth\Life\CarbonBaseCreature\Animals;

use GreatestShowOnEarth\Law\MammalApi;
use GreatestShowOnEarth\Life\CarbonBaseCreature\Animals\Actions\MammalActions;
use Life\Vertebrate;

/**
 * Remember, a 100 percent accurate model is meaningless.
 *
 * Class Human
 * @package GreatestShowOnEarth\Life\CarbonBaseCreature\Animals
 */
class Human extends Vertebrate implements MammalApi{

    use MammalActions;

    private $gender;
    private $cycleSystem;
    private $breathingSystem;
    private $breedingSystem;

    public function __construct($gender,$cycleSystem,$breathingSystem,$breedingSystem)
    {
        // todo random split
        // todo take the DNA to the breed part, not here.
        $this->gender = $gender; // todo male Gender
        $this->cycleSystem = $cycleSystem; // todo male Gender
        $this->breathingSystem = $breathingSystem; // todo male Gender
        $this->breedingSystem = $breedingSystem; // todo male Gender

        $this->embryoGrow(); // 覆写？
    }

    public function embryoGrow() {

    }

    public function birth()
    {
    }

    public function breastFeeding()
    {
    }

    public function raiseChild()
    {
    }

    /**
     * @return mixed
     */
    public function getCycleSystem()
    {
        return $this->cycleSystem;
    }
// 繁衍
    public function multiplication(){

    }

    // 物质交换
    public function substanceExchange(){

    }





}