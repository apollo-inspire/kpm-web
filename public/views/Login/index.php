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

<!-- Navbar -->
<div class="navbar">
    <div class="container flex">
        <h1 class="logo">Heerenhuysje</h1>
        <nav>
            <ul>
                <li> <a href="../homepage/index.php">Home </a> </li>
                <li> <a href="../events/index.php">Event </a> </li>
                <li> <a href="../Login/index.php">Login/Register</a> </li>
            </ul>
        </nav>
    </div>
</div>

<!--  Showcase  -->
<section class="showcase">
    <div class="container grid">
        <!--  Register -->
        <div class="showcase-form card">
            <h2>Register</h2>
            <form>
                <div class="form-control">
                    <input type="text" name="name" placeholder="Name">
                </div>
                <div class="form-control">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="form-control">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="form-control">
                    <input type="password" name="password" placeholder="Confirm Password">
                </div>
                <input type="submit" value="Login" class="btn">
            </form>
        </div>
        <!-- Login -->
        <div class="showcase-form card">
            <h2>Login</h2>
            <form method="post" action="">
                <div class="form-control">
                    <input type="text" id="username" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>" placeholder="Username">
                </div>
                <div class="form-control">
                    <input type="password" id="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" placeholder="Password">
                </div>
                <input method="post" type="submit" name="submit" value="Login" class="btn"></input>
            </form>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container flex">
        <ul>
            <li>
                <a href="heerenhuyskamerconcerten.nl/contact/">Contact</a>
            </li>
            <li>
                <a href="heerenhuyskamerconcerten.nl/nieuws/">Nieuws</a>
            </li>
            <li>
                <a href="heerenhuyskamerconcerten.nl/huisregels">Huisregels</a>
            </li>
        </ul>
    </div>
</footer>


</body>
</html>