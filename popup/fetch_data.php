<?php  
/*
        $connect = new PDO("mysql:host=localhost; dbname=u587940520_sticky", "u587940520_sticky_review", "!@#123qweasdZXC");

        $qw=$_GET['q'];

		//$query = "SELECT * FROM sticky_review WHERE st_user='$qw' ORDER BY st_id DESC LIMIT 1";

        $query = "SELECT * FROM sticky_review";

		$result = $connect->query($query);

		foreach($result as $row){

			echo $row['st_name'];
			
		}
        */
?>


<?php
$servername = "localhost";
$username = "u587940520_sticky";
$password = "!@#123qweasdZXC";
$dbname = "u587940520_sticky_review";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$qw=$_GET['q'];

$sql = "SELECT * FROM sticky_review WHERE st_user='$qw' ORDER BY st_id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: ".$row["st_id"]." - Name: ".$row["st_name"]." ".$row["st_desc"]."<br>";
        $up="/reviews/uploads/".$row["st_image"];
        echo "<img src=".$up.">";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

