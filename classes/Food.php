<?php 
include_once __DIR__ . "/Product.php";

/**
 * A class that models a Food product
 */
class Food extends Product {
	protected $name;
	protected $expiringDate;

	/** Builds a new Food istance
	 * @param $name  The name of food product
	 * @param $price  The price of food product
	 * @param $expiringDate  The expiring date of food product
	 */
	function __construct($name, $expiringDate, $category, $price, $animalAge, $animalSpecies){
			parent::__construct( $category, $price, $animalAge, $animalSpecies );
			$this->name = $name;
			$this->expiringDate = $expiringDate;
	}

	public function getName(){
			return $this->name;
	}


}

?>