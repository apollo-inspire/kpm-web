<?php
date_default_timezone_set('Europe/Amsterdam');

require_once $_SERVER['DOCUMENT_ROOT'].'/core/db-connect.php';


class Events {
    public $totalEvents;

    function __construct(){
        $this->getTotal();
    }

    public function getTotal() {
        $DBC = new DatabaseConnection();

        $query = "SELECT COUNT(*) FROM events;";

        $result = mysqli_query($DBC->DB, $query)
        or die('Error in query: '.$query);

        $resultb = mysqli_fetch_assoc($result);
        $this->totalEvents = $resultb['COUNT(*)'];

        mysqli_close($DBC->DB);

        return $this->totalEvents;
    }

    public function addEvent() {

    }
}

class Event {
    public $id;

    public $event;

    public $event_id;
    public $stream_id;
    public $name;
    public $date;
    public $starttime;
    public $endtime;
	public $description;
	public $artists;
	public $host;
	public $sociallinks;
	public $genre;
	public $host_user;
	public $moderator_user;
	public $datecreated;


    function __construct($id){
        $this->id = $id;

        $this->event = $this->getEvent($id);

        $this->event_id = $this->event['event_id'];
        $this->stream_id = $this->event['stream_id'];
        $this->name = $this->event['name'];
        $this->date = $this->event['date'];
        $this->starttime = $this->event['starttime'];
        $this->endtime = $this->event['endtime'];
        $this->description = $this->event['description'];
        $this->artists = $this->event['artists'];
        $this->host = $this->event['host'];
        $this->sociallinks = $this->event['sociallinks'];
        $this->genre = $this->event['genre'];
        $this->host_user = $this->event['host_user'];
        $this->moderator_user = $this->event['moderator_user'];
        $this->datecreated = $this->event['datecreated'];
    }

    public function getEvent($id) {
        $DBC = new DatabaseConnection();
        
        $query = "SELECT * 
        FROM events
        WHERE event_id = $id";

        $result = mysqli_query($DBC->DB, $query)
        or die('Error in query: '.$query);

        $event =  mysqli_fetch_assoc($result);

        mysqli_close($DBC->DB);

        return $event;
    }

    public function deleteEvent() {

    }

    public function updateEvent() {

    }
}