<?php 
// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
// L'e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.
include_once __DIR__ . '/classes/Food.php';
include_once __DIR__ . '/classes/Accessory.php';
include_once __DIR__ . '/classes/Toy.php';
include_once __DIR__ . '/classes/Guest.php';
include_once __DIR__ . '/classes/Customer.php';
include_once __DIR__ . '/classes/CreditCard.php';

$userCard = new CreditCard(5167984324512036, 2026, 'MasterCard', '555', 500);

$userAddress = array(
	'street' => 'Via Roma, 15',
	'City' => 'Torino',
	'postal_address' => 10121,
	'country' => 'Italy'
);

$user = new Customer( '_aurora9', 'aurora', 'rossi', '20', 22, 'aurora_rossi@gmail.com', '3914445620', $userAddress, $userCard );

var_dump($user);

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Php oop 2</title>
</head>
<body>
	
</body>
</html>