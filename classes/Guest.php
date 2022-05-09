<?php
/**
 * A class for any guest
 */

class Guest{
	protected $age;
	protected $email;
	protected $phone;
	protected $address;
	protected $creditCard;

	/**
	 * Builds a new Customer istance.
	 *
	 * @param $age guest's age
	 * @param $email guest's email address
	 * @param $phone guest's phone number
	 * @param $address guest's shipping address
	 * @param $creditCard guest's credit card
	 */
	function __construct( $age, $email, $phone, $address, $creditCard ){
		$this->age = $age;	
		$this->email = $email;
		$this->phone = $phone;
		$this->address = $address;
		$this->creditCard = $creditCard;
	}

// ***** Getter methods  ***** //

	protected function getAge() {
		return $this->age;
	}

	protected function getEmail() {
		return $this->email;
	}

	protected function getPhone() {
		return $this->phone;
	}

	protected function getAddress() {
		return $this->address;
	}

	protected function getCreditCard() {
		return '*********' . substr( $this->creditCard, -4);
	}

// ***** Setter methods  ***** //

	protected function setAge($age) {
		$this->age = $age;
	}

	protected function setEmail($email) {
		$this->email = $email;
	}

	protected function setPhone($phone) {
		$this->phone = $phone;
	}

	protected function setAddress($address) {
		$this->address = $address;
	}

	protected function setCreditCard($creditCard) {
		if ( $creditCard instanceof CreditCard ) {
			$this->creditCard = $creditCard;
		} else {
			'Invalid credit card. Must be an instance of CreditCard class.';
		}
	}


}

?>