<?php
//connexion à la base de données
$link = new PDO("mysql:host=localhost;port=3306;dbname=basefrance","root","");
$link->exec("SET CHARACTER SET UTF8");
$saisie=$_GET["saisie"];
$sql="select * from city where name like '$saisie%'";
$statement = $link->prepare($sql);
$statement->execute();
while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {	
	extract($row);
	echo "<li>$name - $longitude - $latitude</li>";
}
//ajax_listevilles.php?saisie=par
?>