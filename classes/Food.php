<?php 
include_once __DIR__ . "/Product.php";

/**
 * A class that models a Food product
 */
class Food extends Product {
	protected $ingredients;
	protected $expiringDate;

	/** Builds a new Food istance
	 * @param $ingredients  List of ingredients of food product
	 * @param $expiringDate  The expiring date of food product
	 */
	public function __construct($ingredients, $expiringDate, $name, $description, $category, $price, $animalAge, $animalSpecies){
			parent::__construct( $name, $description, $category, $price, $animalAge, $animalSpecies );
			$this->ingredients = $ingredients;
			$this->expiringDate = $expiringDate;
	}

	public function getIngredients(){
			return $this->ingredients;
	}

	public function getExpiringDate(){
		return $this->expiringDate;
	}

	public function setIngredients($ingredients){
		$this->ingredients = $ingredients;
	}

	public function setExpiringDate($expiringDate){
		$this->expiringDate = $expiringDate;
	}

}

?>