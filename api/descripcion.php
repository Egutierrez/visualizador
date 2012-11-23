<?php
	$lat=$_REQUEST['lt'];
    $lng=$_REQUEST['ln'];
    
	$doc = new DOMDocument();
    
	//cargamos el mapa desde donde se rescatara la informacion
	$doc->load("http://maps.google.com/maps/api/geocode/xml?sensor=true&latlng=$lat,$lng");
    $puntero = $doc->getElementsByTagName('result');
    
	echo "<h3>Resultados <br><hr>";
	$i = 1;
    foreach ( $puntero as $p )
	{
       $qlugar=$p->getElementsByTagName('formatted_address');
       $qlugar=$qlugar->item(0)->nodeValue;

       echo "<br><font size=3em>Dato ".$i.":</font> ".$qlugar."  <br>";
       echo "<br><hr>";
	   $i++;
    }
?>