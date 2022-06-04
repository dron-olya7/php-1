<!--  2. Дан следующий массив: 
$products = [
	[
		'name'   => 'product1',
		'price'  => 100,
		'amount' => 5,
	],
	[
		'name'   => 'product2',
		'price'  => 200,
		'amount' => 6,
	],
	[
		'name'   => 'product3',
		'price'  => 300,
		'amount' => 7,
	],
];
Сформируйте с его помощью HTML таблицу.  -->

<?php

$products = [
	[
		'name'   => 'product1',
		'price'  => 100,
		'amount' => 5,
	],
	[
		'name'   => 'product2',
		'price'  => 200,
		'amount' => 6,
	],
	[
		'name'   => 'product3',
		'price'  => 300,
		'amount' => 7,
	],
];

echo "<table><tr><th>Name</th><th>Price</th><th>Amount</th></tr>";
foreach($products as $product){
    echo "<tr>";
    foreach($product as $prod){
        echo "<td>{$prod}</td>";
    }
    echo "</tr>";
}
echo "</table>";

