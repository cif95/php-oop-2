<?php
include_once __DIR__ . "/Guest.php";

/**
 * A class for a registered customer
 */

class Customer extends Guest{
	protected $username;
	protected $firstName;
	protected $lastName;
	protected $discount;

	/**
	 * Builds a new Customer instance.
	 *
	 * @param $username Customers's username
	 * @param $firstName Customers's first name
	 * @param $lastName Customers's last name
	 * @param $discount Discount percentage amount for the Customer
	 * @param $age Customer's age
	 * @param $email Customer's email
	 * @param $phone Customer's phone number
	 * @param $address Customer's home address
	 * @param $creditCard Customer's credit card
	 */
	public function __construct($username, $firstName, $lastName, $discount, $age, $email, $phone, $address, $creditCard) {
		parent::__construct( $age, $email, $phone, $address, $creditCard );
		$this->username = $username;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->discount = $discount;
	}


	// ***** Getter methods  ***** //

	public function getUsername() {
		return $this->username;
	}

	public function getFirstName() {
		return $this->firstName;
	}

	public function getLastName() {
		return $this->lastName;
	}

	public function getDiscount() {
		return $this->discount;
	}

// ***** Setter methods  ***** //

	public function setUsername($username) {
		$this->username = $username;
	}

	public function setDiscount($discount) {
		$this->discount = $discount;
	}

}

?>
