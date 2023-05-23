<?php
	try{
		$pdo=new PDO("mysql:host=localhost;dbname=db_inscription","root","dir motpass dyaleq a saad");
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>