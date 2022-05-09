<?php
include_once __DIR__ . "/Animal.php";

/**
 * A class that models a Dog
 */
class Dog extends Animal {
    protected $race;

		/** Builds a new Dog istance
		 * @param string $race animal's race
		 */
    function __construct($race){
				parent::__construct($species, $gender, $birthDate);
        $this->race = $race;
    }

    public function getRace(){
        return $this->race;
    }
}

?>