<?php 
include_once __DIR__ . "/Product.php";

/**
 * A class that models a Toy product
 */
class Toy extends Product {
	protected $purpose;

	/** Builds a new Toy istance
	 * @param $purpose The purpose of toy product( fun, educational, training, teething, etc. )
	 */
	function __construct( $purpose, $name, $description, $category, $price, $animalAge, $animalSpecies){
			parent::__construct( $name, $description, $category, $price, $animalAge, $animalSpecies );
			$this->purpose = $purpose;
	}

	public function getPurpose(){
		return $this->purpose;
	}

	public function setPurpose($purpose){
		$this->purpose = $purpose;
	}

}

?>
