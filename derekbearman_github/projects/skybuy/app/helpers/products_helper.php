<?php
require_once URLROOT . '/app/libraries/Database.php';

$db = new Database;

$db->query("SELECT * FROM products WHERE category = :category");
$db->bind(':category', $_POST['category']);

$results = $db->resultSet();

return json_encode($results);