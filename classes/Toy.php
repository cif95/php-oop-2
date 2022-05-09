<?php 
include_once __DIR__ . "/Product.php";

/**
 * A class that models a Cat
 */
class Toy extends Product {
	protected $name;
	protected $purpose;
	protected $animalAge;
	protected $animalSpecies;

	/** Builds a new Cat istance
	 * @param $name  The name of toy product
	 * @param $purpose The purpose of toy product( educational, training, teething, etc. )
 	 * @param $animalAge  The animal's age suggested for toy product
	 * @param $animalSpecies The animal's species for which the toy has been designed
	 */
	function __construct($name, $purpose, $animalAge, $animalSpecies){
			parent::__construct( $category, $price );
			$this->name = $name;
			$this->purpose = $purpose;
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
