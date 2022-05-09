<?php
/**
 * A class for any product.
 */
class Product{
    protected $category;
    protected $price;
    /**
     * Builds a new Product instance.
     *
     * @param string $category  Category of product
     * @param string $price  Price of product
     */
    function __construct( $category, $price){
        $this->category = $category;
        $this->price = $price;
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