<?php
/**
 * A class for any product.
 */
class Product{
	protected $name;
	protected $description;
	protected $category;
	protected $price;
	protected $animalAge;
	protected $animalSpecies;
	/**
	 * Builds a new Product instance.
	 *
	 * @param $name  Name of product
	 * @param $description  Description of product
	 * @param $category  Category of product
	 * @param $price  Price of product
	 * @param $animalAge  The animal's age for which the product is structured
	 * @param $animalSpecies The animal's species for which the product is structured
	 */
	public function __construct( $name, $description, $category, $price, $animalAge, $animalSpecies){
		$this->name = $name;	
		$this->description = $description;
		$this->category = $category;
		$this->price = $price;
		$this->animalAge = $animalAge;
		$this->animalSpecies = $animalSpecies;
	}

// ***** Getter methods  ***** //

	public function getName() {
		return ucfirst($this->name);
	}

	public function getDescription() {
		return $this->description;
	}

	public function getCategory() {
		return $this->category;
	}

	public function getPrice() {
		return $this->price;
	}

	public function getAnimalAge() {
		return $this->animalAge;
	}

	public function getAnimalSpecies() {
		return $this->animalSpecies;
	}

// ***** Setter methods  ***** //

	public function setName($name) {
		$this->name = $name;
	}

	public function setDescription($description) {
		$this->description = $description;
	}

	public function setCategory($category) {
		$this->category = $category;
	}

	public function setPrice($price) {
		$this->price = $price;
	}

	public function setAnimalAge($animalAge) {
		$this->animalAge = $animalAge;
	}

	public function setAnimalSpecies($animalSpecies) {
		$this->animalSpecies = $animalSpecies;
	}

}
?>