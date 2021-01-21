<?php
$dbhost = "localhost";
$dbname = "marcin_test";
$dbuser = "root";
$dbpassword = "";
$db_conn = new PDO("mysql:host=".$dbhost.";dbname=".$dbname, $dbuser, $dbpassword);
$sql = "SELECT name, description, year  FROM movies";
$stmt = $db_conn->prepare($sql);
$stmt->execute(array(
   //"movie_id" => 1
   )
);
$movie = $stmt->fetchAll(PDO::FETCH_ASSOC);