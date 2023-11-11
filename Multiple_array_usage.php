<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 

//çoklu dizi tanımlama dersi

//$Meyveler = array("Elma", "Muz", "Armut");
//echo $Meyveler[0];

$bilgiler = array("Meyveler" => array("Elma", "Muz", "Armut"), "Sebzeler" => array("Soğan", "Patlıcan", "Biber" => array("Tatlı biber", "Acı biber")), "İsimler" => array("Mehmet", "Musa", "Hakan"));

//echo $bilgiler[0];

?>

<ul>
<li>Meyveler
	<ul>
		<li><?php echo $bilgiler["Meyveler"][0]; ?>	</li>
		<li><?php echo $bilgiler["Meyveler"][1]; ?>	</li>
		<li><?php echo $bilgiler["Meyveler"][2]; ?>	</li>
	</ul>
</li>	

<li>
	Sebzeler
	<ul>
		<li>
			Biberler
			<ul>
				<li><?= $bilgiler["Sebzeler"]["Biber"][0]?></li>
				<li><?= $bilgiler["Sebzeler"]["Biber"][1]?></li>
				
			</ul>
		</li>
		<li><?php echo $bilgiler["Sebzeler"][0]; ?> </li>
		<li><?php echo $bilgiler["Sebzeler"][1]; ?> </li>
	</ul>
</li>

<li>
	İsimler
	<ul>
		<li><?=$bilgiler["İsimler"][0]; ?> </li>
		<li><?=$bilgiler["İsimler"][1]; ?> </li>
		<li><?=$bilgiler["İsimler"][2]; ?> </li>
	</ul>
</li>

</ul>

</body>
</html>