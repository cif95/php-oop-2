<?php 
include_once __DIR__ . "/Product.php";

/**
 * A class that models a Food product
 */
class Food extends Product {
	protected $name;
	protected $animalAge;
	protected $animalSpecies;

	/** Builds a new Food istance
	 * @param $name  The name of food product
 	 * @param $animalAge  The animal's age suggested for food product
	 * @param $animalSpecies The animal's species for which the food product is suggestes
	 */
	function __construct($name, $animalAge, $animalSpecies){
			parent::__construct( $category, $price );
			$this->name = $name;
			$this->animalAge = $animalAge;
			$this->animalSpecies = $animalSpecies;
	}

	public function getName(){
			return $this->name;
	}

	public function getPurpose(){
		return $this->purpose;
	}

}

?>