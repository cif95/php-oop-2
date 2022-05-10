<?php 
// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
// L'e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.
include_once __DIR__ . '/classes/Food.php';
include_once __DIR__ . '/classes/Accessory.php';
include_once __DIR__ . '/classes/Toy.php';
include_once __DIR__ . '/classes/Customer.php';
include_once __DIR__ . '/classes/CreditCard.php';

$userCard = new CreditCard( 51679843245120, 2026, 'MasterCard', '555', 500);

$userAddress = array(
	'street' => 'Via Roma, 15',
	'City' => 'Torino',
	'postal_address' => 10121,
	'country' => 'Italy'
);

$user = new Customer( '_aurora9', 'aurora', 'rossi', '20', 22, 'aurora_rossi@gmail.com', '3914445620', $userAddress, $userCard );

$collar = new Accessory( 'cuoio', true, 'collare per cani in cuoio', 'Il collare in cuoio è un classico il cui pregio sta nella sua semplicità e nella sua durata. In diverse lunghezze, larghezze e colori, il collare per cane in cuoio è sempre molto elegante.', 'collari', 25.00, 'qualsiasi età', 'cani');

$products = [
	new Accessory( 'cuoio', true, 'collare per cani in cuoio', 'Il collare in cuoio è un classico il cui pregio sta nella sua semplicità e nella sua durata. In diverse lunghezze, larghezze e colori, il collare per cane in cuoio è sempre molto elegante.', 'collari', 25.00, '2 anni', 'cani'),
	new Food( 'carne, riso, vitamine','20/05/2022','croccantini', 'Croccantini di carne e riso arrichiti con vitamine', 'Dry', 50.99, '3 anni', 'cani'),
	new Toy( 'Fun','Kong', 'KONG Classic è un classico tra i giochi per cani. Grazie alla sua super resistenza è ideale per giocare e per essere masticato a lungo e può anche essere riempito con snack.', 'ricreativi', 29.00, 'qualsiasi età', 'cani'),
];

// var_dump($user);

// var_dump($user->purchase($collar));

// var_dump($user);

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/index.css">
	<title>Php oop 2</title>
</head>
<body>
	<main>
		<section id="products">
			<h1>Prodotti:</h1>
			<div class="flex-container">
				<?php foreach($products as $product) { ?>
					<div class="card">
						<h3><?= $product->getName(); ?></h3>
						<p><?= $product->getDescription(); ?></p>
						<p>
							Per <?= $product->getAnimalSpecies(); ?> di <?= $product->getAnimalAge(); ?>
						</p>
						<p class="price">
							Prezzo cad. &euro;<?= $product->getPrice(); ?>
						</p>
					</div>
				<?php } ?>
			</div>
		</section>
	</main>
</body>
</html>