<?php
date_default_timezone_set('Europe/Amsterdam');

require_once $_SERVER['DOCUMENT_ROOT'].'/core/db-connect.php';

class Streams {
    public $totalStreams;

    function __construct(){
        $this->getTotal();
    }

    public function getTotal() {
        $DBC = new DatabaseConnection();

        $query = "SELECT COUNT(*) FROM streams;";

        $result = mysqli_query($DBC->DB, $query)
        or die('Error in query: '.$query);

        $resultb = mysqli_fetch_assoc($result);
        $this->totalStreams = $resultb['COUNT(*)'];

        mysqli_close($DBC->DB);

        return $this->totalStreams;
    }

    public function addStream() {

    }
}

class Stream {
    public $id;

    public $stream;

    public $stream_id;
    public $event_id;
    public $islive;
    public $title;
    public $subtitle;
    public $viewcount;
    public $audiencecount;
    public $connectionstatus;
    public $timelive;
    public $timeleft;
    public $datecreated;

    function __construct($id){
        $this->id = $id;

        $this->stream = $this->getStream($id);

        $this->stream_id = $this->stream['stream_id'];
        $this->event_id = $this->stream['event_id'];
        $this->islive = $this->stream['event_id'];
        $this->title = $this->stream['event_id'];
        $this->subtitle = $this->stream['event_id'];
        $this->viewcount = $this->stream['event_id'];
        $this->audiencecount = $this->stream['event_id'];
        $this->connectionstatus = $this->stream['event_id'];
        $this->timelive = $this->stream['event_id'];
        $this->timeleft = $this->stream['event_id'];
        $this->datecreated = $this->stream['event_id'];
    

    }

    public function getStream($id) {
        $DBC = new DatabaseConnection();

        $query = "SELECT * 
        FROM streams
        WHERE stream_id = $id";

        $result = mysqli_query($DBC->DB, $query)
        or die('Error in query: '.$query);

        $stream =  mysqli_fetch_assoc($result);

        mysqli_close($DBC->DB);

        return $stream;
    }

    public function deleteStream() {

    }

    public function updateStream() {

    }
}