<?php
/**
 * A class for any animal.
 */
class Animal{
    protected $species;
    protected $gender;
    protected $birthDate;

    /**
     * Builds a new Animal instance.
     *
     * @param string $species animal's species
     * @param string $gender animal's gender
     * @param string $birthDate animal's birth date
     */
    function __construct( $species, $gender, $birthDate){
        $this->species = $species;
        $this->gender = $gender;
        $this->birthDate = $birthDate;
    }

		protected function setSpecies($species) {
			$this->species = $species;
		}

		public function getSpecies() {
			return $this->species;
		}

		protected function setGender($gender) {
			$this->gender = $gender;
		}

		public function getAge() {
			return date_diff(date_create($this->birthDate)->format("%y"), date_create(2022));
		}
}
?>