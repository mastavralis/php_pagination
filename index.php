<!DOCTYPE html>
<html>
<head>
<title>Simple PHP Pagination Class (NO DATABASE)</title>
</head>
<body>
<?php
require_once 'classPagination.php';

$paged = new Pagination(); // Instantiate the Pagination Object
$data = array("Red","Green","Blue", "Yellow", "Orange"); // The array with out data

$numbers = $paged->Paginate($data, 2); // The second parameter is the number of items per page
$results = $paged->fetchResults();

foreach($results as $r){
	// Displays the values of the sliced array on browser
	echo '<div class="response">'.$r.'</div>';
}

foreach($numbers as $num){
	// Creates the pagination links
	echo '<a class="links" href="index.php?page='.$num.'" number="'.$num.'" >'.$num.'</a>';
}
?>
</body>
</html>