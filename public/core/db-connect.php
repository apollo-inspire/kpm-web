<?php 

class DatabaseConnection {
    public $DB;

    public $DB_HOST = "192.168.55.5";
    public $DB_USER = "root";
    public $DB_PASS = "root";
    public $DB_NAME = "kpmweb_202103";

    function __construct() {
        $this->DB = mysqli_connect($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME)
        or die("Error: " . mysqli_connect_error());
    }
}

?>