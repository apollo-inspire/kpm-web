<?php 
date_default_timezone_set('Europe/Amsterdam');

require_once $_SERVER['DOCUMENT_ROOT'].'/models/streams_model.php';

$streams = new Streams();
$totalStreams = $streams->getTotal();

?>


<?php 
for($i = 1; $i < $totalStreams + 1; $i++) { 
    $stream = new Stream($i);
    echo $stream->stream_id; echo '<br>';
    echo $stream->event_id; echo '<br>';
    echo $stream->islive; echo '<br>';
    echo $stream->title; echo '<br>';
    echo $stream->subtitle; echo '<br>';
    echo $stream->viewcount; echo '<br>';
    echo $stream->audiencecount; echo '<br>';
    echo $stream->connectionstatus; echo '<br>';
    echo $stream->timelive; echo '<br>';
    echo $stream->timeleft; echo '<br>';
    echo $stream->datecreated; echo '<br>';
} 

?>