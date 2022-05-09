<?php 
include_once __DIR__ . "/Product.php";

/**
 * A class that models an Accessory product
 */
class Accessory extends Product {
	protected $name;

	/** Builds a new Accessory istance
	 * @param $name  The name of Accessory product
	 */
	function __construct( $name, $category, $price, $animalAge, $animalSpecies ){
			parent::__construct( $category, $price, $animalAge, $animalSpecies );
			$this->name = $name;
	}

	public function getName(){
			return $this->name;
	}

}

?>