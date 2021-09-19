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
.checked {
  color: orange;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          $up="/reviews/uploads/".$row["st_image"];
       
          $stars=$row["st_stars"];

          if($stars==1) {
              $star=
              '
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              ';
          }else if ($stars==2) {
             $star=
              '
              <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              ';

          }else if ($stars==3) {
             $star=
              '
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              ';

          }else if ($stars==4) {
              $star=
              '
              <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              ';
          }else if ($stars==5) {
             $star=
              '
              <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              ';
          }
      
       echo "<table >";
       echo "<tr>";
       echo "<td>"."<img style='width:62px; height:62px;border-radius: 30px 30px;'  src=".$up.">"."</td>";
       echo "<td>".
       $row["st_name"]."<br>".$row["st_desc"]."<br>".$star
       ."</td>";
       echo "</tr>";
       echo "</table >";

    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

