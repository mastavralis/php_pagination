<!DOCTYPE html>
<html>
<head>
<title>Simple PHP Pagination Class (NO DATABASE)</title>
</head>
<body>
<?php
require_once 'classPagination.php';

$paged = new Pagination(); // Instantiate the Pagination Object
$data = array("Hey","Hello","Pagination class", "awesome"); // The array with out data

$numbers = $paged->Paginate($data, 1);
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