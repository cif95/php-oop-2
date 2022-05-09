<?php 
include_once __DIR__ . "/Product.php";

/**
 * A class that models a Toy product
 */
class Toy extends Product {
	protected $name;
	protected $purpose;

	/** Builds a new Toy istance
	 * @param $name  The name of toy product
	 * @param $purpose The purpose of toy product( educational, training, teething, etc. )
	 */
	function __construct($name, $purpose, $category, $price, $animalAge, $animalSpecies){
			parent::__construct( $category, $price, $animalAge, $animalSpecies );
			$this->name = $name;
			$this->purpose = $purpose;
	}

	public function getName(){
			return $this->name;
	}

	public function getPurpose(){
		return $this->purpose;
	}

}

?>
