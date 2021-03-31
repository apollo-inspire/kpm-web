<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/core/db-connect.php';

$databaseconnect = new DatabaseConnection();

$query = "SELECT * 
        FROM users";

$result = mysqli_query($databaseconnect->DB, $query)
or die('Error in query: '.$query);

// $user =  mysqli_fetch_assoc($result);

while($row = mysqli_fetch_assoc($result))
{
    $users[] = $row;
}

mysqli_close($DB);

$x = 0;

?>

<?php var_dump($DB_HOST) ?> <br>
<?php var_dump($DB_USER) ?> <br>
<?php var_dump($DB_PASS) ?> <br>
<?php var_dump($DB_NAME) ?> <br>

<?php var_dump($DB) ?>  <br>

<?php var_dump($_POST) ?>   <br>

<?php var_dump($query) ?>   <br>

<?php var_dump($result) ?>  <br>

<!-- <?php var_dump($user) ?>    <br> -->

<!-- <?php var_dump($users) ?>   <br> -->

<?php foreach ($users as $user) : $x++ ?>   <br>
<?php var_dump($user['user_id']) ?> <br>
<?php var_dump($user['username']) ?> <br>
<?php var_dump($user['password']) ?> <br>
<?php var_dump($user['name']) ?> <br>
<?php var_dump($user['role']) ?> <br>
<?php endforeach; ?>    <br>

<!-- $DBC = new DatabaseConnection();

header("Content-Type: application/json");
echo json_encode($DBC); -->

<!-- // $events = new Events();
// $totalEvents = $events->getTotal();
// echo $totalEvents;

// header("Content-Type: application/json");
// echo json_encode($totalEvents); -->
