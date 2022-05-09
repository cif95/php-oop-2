<?php 
include_once __DIR__ . "/Product.php";

/**
 * A class that models a Food product
 */
class Food extends Product {
	protected $name;
	protected $price;
	protected $expiringDate;

	/** Builds a new Food istance
	 * @param $name  The name of food product
	 * @param $price  The price of food product
	 * @param $expiringDate  The expiring date of food product
	 */
	function __construct($name, $price, $expiringDate){
			parent::__construct( $category, $animalAge, $animalSpecies );
			$this->name = $name;
			$this->price = $price;
			$this->expiringDate = $expiringDate;
	}

	public function getName(){
			return $this->name;
	}


}

?>