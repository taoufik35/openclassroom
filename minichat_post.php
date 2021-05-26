<?php 


$db= new PDO ('mysql:host=localhost;dbname=tp_openclassroom;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));

$query = $db->prepare("INSERT INTO minichat(nom, message) VALUES(?, ?)");
$query->execute(array($_POST["nom"], $_POST["message"]));




header("Location: minichat.php");
?> 


