<?php
	
	function getData(){
		return 'Thank you, '. $_POST['firstname'].' '.$_POST['lastname'].' says the php file';
	}
	echo getData();
	
?>