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

	protected function getNumber() {
		return $this->number;
	}

	public function getExpiringDate() {
		return $this->expiringDate;
	}

	public function getNetwork() {
		return $this->network;
	}

	protected function getCvv() {
		return $this->cvv;
	}

// ***** Setter methods  ***** //

	protected function setNumber($number) {
		$this->number = $number;
	}

	protected function setExpiringDate($expiringDate) {
		$this->expiringDate = $expiringDate;
	}

	protected function setNetwork($network) {
		$this->network = $network;
	}

	protected function setCvv($cvv) {
		$this->cvv = $cvv;
	}

	public function setBalance($balance) {
		$this->balance = $balance;
	}

}

?>
