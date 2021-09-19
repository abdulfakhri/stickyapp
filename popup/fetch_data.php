<?php
session_start();
require_once('includes/db.php');

$connect = new PDO("mysql:host=localhost; dbname=rgudb", "root", "root");



        $qw=$_GET['q'];
		$query = "
		SELECT *
		FROM sticky_reviews WHERE user_key='$qw'
		ORDER BY id DESC
		LIMIT 1";

		$result = $connect->query($query);

		foreach($result as $row)
		{
			echo $row['stars'];
			
		}
	

	


?>
