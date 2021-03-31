<?php 
date_default_timezone_set('Europe/Amsterdam');

require_once $_SERVER['DOCUMENT_ROOT'].'/models/events_model.php';

$events = new Events();
$totalEvents = $events->getTotal();

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