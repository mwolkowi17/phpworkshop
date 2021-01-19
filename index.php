<?php
include 'User.php';
include 'RegisteredUser.php';
include 'Post.php';
echo "Witaj Świecie!";

function suma($a, $b){
    echo "Suma liczb: ".$a." i ".$b." to: ";
    $c = $a + $b;
    return $c;
 }
?>
 <p> 
 <?php
 echo suma(5, 7);
 ?>
 </p>

 <?php
 $kolory = array("czerwony", "pomarańczowy", "żółty", "zielony", "niebieski", "granatowy", "fioletowy");

 foreach($kolory as $klucz => $wartosc){
    echo "Indeks ".$klucz.", wartość: ".$wartosc."<br>";
 }

 ?>
 <p>==========================</p>
 <?php
 
 $test = new User('Test');
 echo "<pre>";
var_dump($test); 
echo "</pre>";
echo $test->name;

$test->email='we@po.com';
echo $test->email;
?>
<p></p>
<?php
$testRegistred = new RegisteredUser('Marcin');

echo $testRegistred->login();
?>

<p></p>
<?php

$newpost = new Post();
     $newpost->postTitle="raz";
     $newpost->postContent="tresc";
     $newpost->postMeta="cos"; 
$test->publish($newpost);

