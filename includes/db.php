<?php
class DBController {

  
    private $hostname  =   "localhost";

    private $username  =   "u587940520_sticky";

    private $password  =   "!@#123qweasdZXC";

    private $db        =   "u587940520_sticky_review";

    //create connection
    public function connect() {

        $conn = new mysqli($this->hostname, $this->username, $this->password, $this->db)or die("Database connection error." . $conn->connect_error);

        return $conn;
    }

    // close connection
    public function close($conn) {

        $conn->close();

    }
}
$main_url= $_SERVER['HTTP_HOST'];
$base_url =$main_url."/Controllers/";
$femail = 'sum@nishatbrothers.com';
?>