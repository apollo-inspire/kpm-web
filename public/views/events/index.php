<?php 
session_start();
date_default_timezone_set('Europe/Amsterdam');

require_once $_SERVER['DOCUMENT_ROOT'].'/models/events_model.php';

$events = new Events();
$totalEvents = $events->getTotal();

require_once $_SERVER['DOCUMENT_ROOT'].'/models/users_model.php';

$session = new Session();

$session->checkLoginSet();
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
        <h1 class="logo">HeerenHuys</h1>
        <nav>
            <ul>
                <li> <a href="../homepage/index.php">Home </a> </li>
                <li> <a href="../events/index.php">Event </a> </li>
                <li> <a href="../Login/index.php">Login/Register</a> </li>
            </ul>
        </nav>
    </div>
</div>


<!-- $event->stream_id
$event->name
$event->date
$event->starttime
$event->endtime
$event->description
$event->artists
$event->host
$event->sociallinks
$event->genre
$event->host_user
$event->moderator_user
$event->datecreated -->

<!--  Showcase  -->
<section class="showcase">
    <div class="container grid">
        <!-- Event Cards -->
        <?php for($i = 1; $i < $totalEvents + 1; $i++) { $event = new Event($i); ?>

        <div class="showcase-form card">
            <h2><?= $event->name ?></h2>
            <form>
                <div class="form-control">
                    <p>Artist</p>
                </div>
                <div class="form-control">
                    <p><?= $event->artists ?></p>
                </div>
                <div class="form-control">
                    <p>Date and Time</p>
                </div>
                <div class="form-control">
                <p><?= $event->date; ?> <?= $event->starttime; ?> </p>
                </div>
                <a href="../Streams/index.php?id=<?= $event->stream_id; ?>" class="btn">View</a>
            </form>
        </div>
        <?php } ?>

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
