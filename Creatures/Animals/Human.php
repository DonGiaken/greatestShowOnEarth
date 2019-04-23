<?php
namespace GreatestShowOnEarth\Life\CarbonBaseCreature\Animals;

use GreatestShowOnEarth\Law\CreatureApi;
use GreatestShowOnEarth\Life\CarbonBaseCreature\Animals\Actions\MammalActions;
use Life\Vertebrate;

/**
 * Remember, a 100 percent accurate model is meaningless.
 *
 * Class Human
 * @package GreatestShowOnEarth\Life\CarbonBaseCreature\Animals
 */
class Human extends Vertebrate implements CreatureApi{

    use MammalActions;

    private $gender;
    private $cycleSystem;
    private $breathingSystem;
    private $breedingSystem;

    public function __construct($fatherDNA = "Adam" ,$motherDNA = "Eve")
    {

    }



}