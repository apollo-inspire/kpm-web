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

<?php 
for($i = 1; $i < $totalEvents + 1; $i++) { 
    $event = new Event($i);
    echo $event->event_id; echo '<br>';
    echo $event->stream_id; echo '<br>';
    echo $event->name; echo '<br>';
    echo $event->date; echo '<br>';
    echo $event->starttime; echo '<br>';
    echo $event->endtime; echo '<br>';
    echo $event->description; echo '<br>';
    echo $event->artists; echo '<br>';
    echo $event->host; echo '<br>';
    echo $event->sociallinks; echo '<br>';
    echo $event->genre; echo '<br>';
    echo $event->host_user; echo '<br>';
    echo $event->moderator_user; echo '<br>';
    echo $event->datecreated; echo '<br>';
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

<!--  Showcase  -->
<div class="card">
    <h1>Event name</h1>
    <h3>Artist</h3>
    <h4>description</h4>
</div>
<div class="card">
    <h1>Event name</h1>
    <h3>Artist</h3>
    <h4>description</h4>
</div>
<div class="card">
    <h1>Event name</h1>
    <h3>Artist</h3>
    <h4>description</h4>
</div>

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

