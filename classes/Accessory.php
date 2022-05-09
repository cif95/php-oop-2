<?php 
include_once __DIR__ . "/Product.php";

/**
 * A class that models an Accessory product
 */
class Accessory extends Product {
	protected $materials;
	protected $is_customizable;

	/** Builds a new Accessory istance
	 * @param $materials  Materials of which the Accessory product is made
	 * @param $is_customizable Whether the Accessory product can be customized or not
	 */
	function __construct( $materials, $is_customizable, $name, $category, $price, $animalAge, $animalSpecies ){
			parent::__construct( $name, $description, $category, $price, $animalAge, $animalSpecies );
			$this->materials = $materials;
			$this->is_customizable = $is_customizable;
	}

	public function getMaterials(){
			return $this->materials;
	}

	public function isCustomizable(){
		return $this->is_customizable;
	}

	public function setMaterials($materials){
		$this->materials = $materials;
	}

	public function setCustomizableValue($value){
		if ( is_bool($value) ) {
			$this->is_customizable = $value;
		}
	}

}

?>