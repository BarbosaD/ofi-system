<?php

class Ticket {
    private $id;
    private $name;
    private $service;
    private $description;
    private $plate;
    private $stardate;

    public function __construct($name,$service,$description,$plate,$stardate)
    {
        $this->name = $name;
        $this->service = $service;
        $this->description = $description;
        $this->plate = $plate;
        $this->stardate = $stardate;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($title) {
        $this->name = $title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getService() {
        return $this->service;
    }

    public function setService($status) {
        $this->service = $status;
    }

    public function getPlate() {
        return $this->service;
    }

    public function setPlate($status) {
        $this->service = $status;
    }
}


?>