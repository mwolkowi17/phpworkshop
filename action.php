Hi <?php echo htmlspecialchars($_POST['name']); ?>.
You are <?php echo (int)$_POST['age']; ?> years old.
<p></p>
<?php $imie=$_POST['name'];
echo $imie;
?>
<p></p>
<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>