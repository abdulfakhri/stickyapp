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
       echo "<div class='container'>";
       echo "<p>".$row["st_name"]."</p>";
       echo "<img style='width:40px; height:40px;border-radius: 20px 20px;'  src=".$up.">";
       echo "<p>".$row["st_desc"]."</p>";
       echo "<p>".$star."</p>";
       echo "</div>";
       echo "<table >";
       echo "<tr>";
       echo "<td>"."<img style='width:40px; height:40px;border-radius: 20px 20px;'  src=".$up.">"."</td>";
       echo "<td>".$row["st_name"]."</td>";
       echo "</tr>";
       echo "</table >";

    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

