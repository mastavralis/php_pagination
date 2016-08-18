<?php

class Pagination
{
	var $data;
	
	function paginate($values, $perPage){
		// This method calculates the total pages of the pagination
		// and finds the current page
		$totalValues = count($values);
		if(isset($_GET['page'])){
			$currentPage = $_GET['page'];
		}else{
			$currentPage = 1;
		}
		
		$counts = ceil($totalValues / $perPage); // Calculate the total pages
		$param1 = ($currentPage - 1) * $perPage; // The start number of the array slice
		$this->data = array_slice($values, $param1, $perPage); // Slice the array into parts
		
		// Store the numbers for the total pages
		for($i = 1; $i <= $counts; $i++){
			$numbers[] = $i;
		}
		
		return $numbers;
		
	}
	
	function fetchResults(){
		// This method returns the values of the sliced array
		$resultValues = $this->data;
		return $resultValues;
	}
	
} // end of Class