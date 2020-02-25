<?php
$books = [
	[
		'name' => 'Summer Love',
		'author' => 'Subin Bhattarai',
		'price' => 300.50
	],
	[
		'name' => 'Muna Madan',
		'author' => 'Laxmi Prasad Devkota',
		'price' => 105.50
    ],
    [
        'name'=>'saya',
        'author' => 'Subin Bhattarai',
		'price' => 400

    ],
    [
        'name'=>'graphics',
        'author' => 'smith',
		'price' => 300

    ],
    [
        'name'=>'ehp',
        'author' => 'dubin Bhattarai',
		'price' => 400

    ]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
        <tr>
            <th>Name</th>
            <th>Author</th>
            <th>Price</th>
        </tr>
        <?php 
            // loop through each books
            foreach($books as $book) {
                echo '<tr>';
                echo '<td>' . $book['name'] . '</td>';
                echo '<td>' . $book['author'] . '</td>';
                echo '<td>' . $book['price'] . '</td>';
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>


