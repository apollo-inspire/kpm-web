<?php
date_default_timezone_set('Europe/Amsterdam');

require_once $_SERVER['DOCUMENT_ROOT'].'/core/db-connect.php';


class Users {
    public $totalUsers;

    function __construct(){
        $this->getTotal();
    }

    public function getTotal() {
        $DBC = new DatabaseConnection();

        $query = "SELECT COUNT(*) FROM users;";

        $result = mysqli_query($DBC->DB, $query)
        or die('Error in query: '.$query);

        $resultb = mysqli_fetch_assoc($result);
        $this->totalUsers = $resultb['COUNT(*)'];

        mysqli_close($DBC->DB);

        return $this->totalUsers;
    }

    public function addUser() {
        // inputs
        // validate
        // add to database
        // return succes
    }

    public function signup() {
        // inputs
        // validate
        // add to database
        // return succes
    }

    public function login() {
        // inputs 
        // get remote data
        // compare 
        // passwordCheck()
        // create session
        // return boolean
    }

    public function passwordCheck($password) {
        // input password
        // get remote password
        // compare
        // return boolean
    }

}

class User {
    public $id;

    public $user;

    public $user_id;
    public $email;
    public $username;
    public $password;
    public $name;
    public $role;
    public $datecreated;


    function __construct($id){
        $this->id = $id;

        $this->user = $this->getUser($id);

        $this->user_id = $this->user['user_id'];
        $this->email = $this->user['email'];
        $this->username = $this->user['username'];
        $this->password = $this->user['password'];
        $this->name = $this->user['name'];
        $this->role = $this->user['role'];
        $this->datecreated = $this->user['datecreated'];
    }

    public function getUser($id) {
        $DBC = new DatabaseConnection();
        
        $query = "SELECT * 
        FROM users
        WHERE user_id = $id";

        $result = mysqli_query($DBC->DB, $query)
        or die('Error in query: '.$query);

        $user =  mysqli_fetch_assoc($result);

        mysqli_close($DBC->DB);

        return $user;
    }


    public function deleteUser() {

    }

    public function updateUser() {

    }

    public function logout() {
        // destory session
        // report succes 
    }

}