<?php 
/**
 * A class for any credit card
 */
class CreditCard{
	protected $number;
	protected $expiringDate;
	protected $network;
	protected $cvv;
	protected $balance;

	/**
	 * Builds a new CreditCard instance.
	 *
	 * @param $number full number of credit card
	 * @param $expiringDate expiring date of credit card
	 * @param $network network of credit card
	 * @param $cvv cvv of credit card
	 * @param $balance balance amount of credit card
	 */
	function __construct($number, $expiringDate, $network, $cvv, $balance) {
		$this->number = $number;
		$this->expiringDate = $expiringDate;
		$this->network = $network;
		$this->cvv = $cvv;
		$this->balance = $balance;
	}

	// ***** Getter methods  ***** //

	public function getNumber() {
		return $this->number;
	}

	public function getExpiringDate() {
		return $this->expiringDate;
	}

	public function getNetwork() {
		return $this->network;
	}

	public function getCvv() {
		return $this->cvv;
	}

	public function getBalance() {
		return $this->balance;
	}

// ***** Setter methods  ***** //

	public function setNumber($number) {
		$this->number = $number;
	}

	public function setExpiringDate($expiringDate) {
		$this->expiringDate = $expiringDate;
	}

	public function setNetwork($network) {
		$this->network = $network;
	}

	public function setCvv($cvv) {
		$this->cvv = $cvv;
	}

	public function setBalance($balance) {
		$this->balance = $balance;
	}

}

?>
