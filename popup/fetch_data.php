<?php
        
        $connect = new PDO("mysql:host=localhost; dbname=u587940520_sticky", "u587940520_sticky_review", "!@#123qweasdZXC");

        $qw=$_GET['q'];
		$query = "
		SELECT *
		FROM sticky_review WHERE st_user='$qw'
		ORDER BY id DESC
		LIMIT 1";

		$result = $connect->query($query);

		foreach($result as $row){

			echo $row['st_name'];
			
		}
	    

	


?>
