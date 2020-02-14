<?php
class Gallery {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllPhotos(){

        $this->db->query("SELECT * FROM photos");

        $results = $this->db->resultSet();

        return $results;
    }


    public function getPhotosByCategory($category){

        $this->db->query("SELECT * FROM photos WHERE category = :category");
        $this->db->bind(':category', $category);

        $results = $this->db->resultSet();

        return $results;
    }

}