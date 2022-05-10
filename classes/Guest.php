<?php
include_once __DIR__ . "/CreditCard.php";
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
	public function __construct( $age, $email, $phone, $address, $creditCard ){
		$this->age = $age;	
		$this->email = $email;
		$this->phone = $phone;
		$this->address = $address;
		$this->creditCard = $creditCard;
	}

// ***** Getter methods  ***** //

	public function getAge() {
		return $this->age;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getPhone() {
		return $this->phone;
	}

	public function getAddress() {
		return $this->address;
	}

// ***** Setter methods  ***** //

	public function setAge($age) {
		$this->age = $age;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function setPhone($phone) {
		$this->phone = $phone;
	}

	public function setAddress($address) {
		$this->address = $address;
	}

	public function setCreditCard($creditCard) {
		if ( $creditCard instanceof CreditCard ) {
			$this->creditCard = $creditCard;
		} else {
			'Invalid credit card. Must be an instance of CreditCard class.';
		}
	}

// ***** custom methods *****


/**
 * Function that makes a purchase of a given product
 *
 * @param $product to be purchased
 */
public function purchase($product) {

	// checks if customer's credit card balance is enough to make the purchase
	if ( $this->creditCard->getBalance() < $product->getPrice() ) {
		return 'Transazione rifiutata: fondi insufficienti';
	}

	// checks if the customer's credit card is not expired
	if ( $this->creditCard->getExpiringDate() < date("Y") ) {
		return 'Transazione rifiutata: La carta di credito è scaduta.';
	}

	// checks if the customer has a discount
	if ( $this->discount > 0) {
		$product->setPrice( $product->getPrice() * $this->discount / 100);
	}

	$this->creditCard->setBalance( ($this->creditCard->getBalance()) - ($product->getPrice()) );
	return 'Transazione effettuata con successo. Hai beneficiato di uno sconto del ' . $this->discount . '%'; 
}


}

?>