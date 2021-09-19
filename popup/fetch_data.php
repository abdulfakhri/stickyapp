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
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>

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
        //echo "id: ".$row["st_id"]." - Name: ".$row["st_name"]." ".$row["st_desc"]."<br>";
        
       echo "<div class='container'>";
       echo "<p>".$row["st_name"]."</p>";
       echo "<img style='width:40px; height:40px;border-radius: 20px 20px;'  src=".$up.">";
       echo "<p>".$row["st_desc"]."</p>";
       echo "</div>";

    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

