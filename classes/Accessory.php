<?php 
include_once __DIR__ . "/Product.php";

/**
 * A class that models an Accessory product
 */
class Accessory extends Product {
	protected $name;

	/** Builds a new Food istance
	 * @param $name  The name of Accessory product
	 */
	function __construct( $category, $animalAge, $animalSpecies ){
			parent::__construct( $category, $price );
			$this->name = $name;
	}

	public function getName(){
			return $this->name;
	}

}

?>