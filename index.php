<?php
	//echo "See on minu esimene php!";
	$firstName  = "Jaagup";
	$lastName = "Aland";
	$dateToday = date("d.m.Y");
	$hourNow = date("G");
	$partOfDay = "";
	if ($hourNow < 8){
		$partOfDay = "varajane hommik";
	}
	if ($hourNow >= 8 and $hourNow < 16){
		$partOfDay = "koolipäev";
	}
	if ($hourNow > 16){
		$partOfDay = "loodetavasti vaba aeg";
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
		<?php
			echo $firstName ." " .$lastName;
		?>
		, õppetöö</title>
	</head>
	<body style="background-color:#e8f6ff;">
		<h1>
				<?php
			echo $firstName;
			echo " ";
			echo $lastName;
		?>
		</h1>
		<p>Siin on minu <a href="https://www.tlu.ee/">TLÜ</a> õppetöö</p>
		<p>See veebileht on õppetöö eesmärgil tehtud.</p>
		<?php
			echo "<p>Tänane kuupäev on: " .$dateToday .".</p> \n";
			echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") ." , käes oli " .$partOfDay .".</p> \n";
		?>
		<a href="https://upload.wikimedia.org/wikipedia/commons/4/41/Edgar_Savisaar_2005.jpg" target="_blank"><img src="../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_2.jpg" alt="pildike"> </a>
		<p> Minu semu teeb ka <a href="../../~priilau" target="_blank">veebi</a> :P</p>

	</body>
	
</html>