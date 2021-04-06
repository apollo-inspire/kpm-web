<?php
date_default_timezone_set('Europe/Amsterdam');

require_once $_SERVER['DOCUMENT_ROOT'].'/core/db-connect.php';


class Session {

    function getSessionData() {

    }

    function checkSessionSet() {
        if (isset($_SESSION['logindata'])) {
            header("Location: /views/login/logout");
            exit;
        }
    }

    function checkLoginSet(){
        if (!isset($_SESSION['logindata'])) {
            header("Location: /views/homepage");
            exit;
        }
    }
}


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

    public function login($username, $password) {    
        if(empty($errors)) {  
        $DBC = new DatabaseConnection(); 

        $query = "SELECT user_id, password, username, role, name
        FROM users
        WHERE username = '$username'";

        $result3 = mysqli_query($DBC->DB, $query)
        or $errors[] = 'Error: '.mysqli_error($DBC->DB);

        $user = mysqli_fetch_assoc($result3);

        mysqli_close($DBC->DB);
        }

        if(password_verify($password, $user['password'])){
            $this->setSessionLogin($user);
            return true;
        };

    }

    public function setSessionLogin($user){
        $_SESSION['logindata'] = [
            'user_id' => $user['user_id'],
            'role' => $user['role'],
            'username' => $user['name']
        ];
    }

    
    public function logout() {
        session_destroy();
        header('Location: /views/login');
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


}