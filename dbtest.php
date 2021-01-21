<?php

$dbhost = "localhost";
$dbname = "marcin_test";
$dbuser = "root";
$dbpassword = "";
$db_conn = new PDO("mysql:host=".$dbhost.";dbname=".$dbname, $dbuser, $dbpassword);

$stmt = $db_conn->query('SELECT name, year FROM movies'); 
print_r($stmt);
?>
<p></p>
<?php
while($row = $stmt->fetch()) {?><p><?php  echo $row['name'] . ': rok ' . $row['year'] . "\n";?></p><?php } 
?>
<p></p>
<?php

?>
<p></p>
<?php
//$sql = "SELECT name, description, year  FROM movies WHERE id = :movie_id";
$sql = "SELECT name, description, year  FROM movies";
$stmt = $db_conn->prepare($sql);
$stmt->execute(array(
   //"movie_id" => 1
   )
);
$movie = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($movie);
foreach($movie as $v){?><p><?php
   echo $v['name'] . ' rok:' . $v['year'];?></p><?php
}

?>
<p></p>
<?php
/*$sql = 'INSERT INTO movies (name, description, year, created)
 VALUES (:name, :description, :year, NOW())';
$stmt = $db_conn->prepare($sql);
$stmt->execute(array(
 ':name' => 'Oblivion',
 ':description' => 'Akcja dzieje się w 2077 roku. Jack Harper (Tom Cruise) odkrywa prawdę która zmienia jego światopogląd.',
 ':year' => 2013)
 );

 $sql = 'UPDATE movies SET category_id = :category_id  WHERE id = :movie_id'; 
 $stmt = $db_conn->prepare($sql); $stmt->execute(array(':category_id' => 2, ':movie_id' => 5)); 
 echo 'Zmieniono '.$stmt->rowCount().' rekordów';*/

