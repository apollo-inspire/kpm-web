<?php
session_start();

date_default_timezone_set('Europe/Amsterdam');

require_once $_SERVER['DOCUMENT_ROOT'].'/models/users_model.php';

$users = new Users();
$session = new Session();

$session->checkSessionSet();


if (isset($_POST['submit'])) {
    isset($_POST['username'])   ? $username     = htmlspecialchars($_POST['username'], ENT_QUOTES)         : $errors[] = 'Ssername is required';
    isset($_POST['password'])   ? $password     = $_POST['password']                                       : $errors[] = 'Password is required';

    $users->login($username, $password) ? header("Location: /views/homepage") : $errors[] = 'Login Failed';
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>KPM - web</title>
    <script type="text/javascript" src="../../js/main.js"></script>
</head>
<body>
<h1>Login</h1>

<!-- backend test -->
<form method="post" action="">
    <label>Username</label>
    <input type="text" id="username" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>">
    <label>Password</label>
    <input type="password" id="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
    <input method="post" type="submit" name="submit" value="Login"></input>
</form>

</body>
</html>