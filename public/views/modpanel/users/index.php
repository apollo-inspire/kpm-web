<?php 
date_default_timezone_set('Europe/Amsterdam');

require_once $_SERVER['DOCUMENT_ROOT'].'/models/users_model.php';

$users = new Users();
$totalUsers = $users->getTotal();

?>


<?php 
for($i = 15; $i < $totalUsers + 15; $i++) { 
$user = new User($i);
echo $user->username; echo '<br>';
echo $user->name; echo '<br>';
echo $user->user_id; echo '<br>';
echo $user->email; echo '<br>';
echo $user->username ; echo '<br>';
echo $user->password; echo '<br>';
echo $user->name; echo '<br>';
echo $user->role; echo '<br>';
echo $user->datecreated; echo '<br>';
} 
?>