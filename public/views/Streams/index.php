<?php 
date_default_timezone_set('Europe/Amsterdam');

require_once $_SERVER['DOCUMENT_ROOT'].'/models/streams_model.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/events_model.php';

$streams = new Streams();
$totalStreams = $streams->getTotal();

$id = $_GET['id'];

$event = new Event($id);

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

<section>
    <div class="container grid">
        <div class="streamcard">
            <video></video>
        </div>
        <div class="chatcard">

        </div>
        <div class="streaminfo">
            <h1> <?= $event->name; ?> </h1>
            <p> <?= $event->description  ?> </p>
            <p><?=  $event->starttime.' - '.$event->endtime; ?> </p>
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