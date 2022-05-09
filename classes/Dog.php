<?php
include_once __DIR__ . "/Animal.php";

/**
 * A class that models a Cat
 */
class Dog extends Animal {
    protected $race;

		/** Builds a new Cat istance
		 * @param string $race animal's race
		 */
    function __construct($_race){
				parent::__construct($species, $gender, $birthDate);
        $this->race = $_race;
    }

    public function getRace(){
        return $this->race;
    }
}

?>