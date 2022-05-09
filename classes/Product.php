<?php
/**
 * A class for any product.
 */
class Product{
    protected $category;
		protected $price;
		protected $animalAge;
		protected $animalSpecies;
    /**
     * Builds a new Product instance.
     *
     * @param $category  Category of product
     * @param $price  Price of product
		 * @param $animalAge  The animal's age suggested for food product
		 * @param $animalSpecies The animal's species for which the food product is suggestes
     */
    function __construct( $category, $price, $animalAge, $animalSpecies){
        $this->category = $category;
				$this->price = $price;
				$this->animalAge = $animalAge;
				$this->animalSpecies = $animalSpecies;
    }

		protected function setCategory($category) {
			$this->category = $category;
		}

		public function getCategory() {
			return $this->category;
		}

		protected function setPrice($price) {
			$this->price = $price;
		}

		public function getPrice() {
			return $this->price;
		}
}
?>