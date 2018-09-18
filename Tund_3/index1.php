<?php
	//echo "See on minu esimene php!";
	$firstName  = "Jaagup";
	$lastName = "Aland";
	$dateToday = date("d.m.Y");
	$weekdayToday = date("N");
	$weekdayNamesET = ["esmaspäev", "teisipäev", "kolmapäev", "neljapäev", "reede", "laupäev", "pühapäev"];
	//var_dump ($weekdayNamesET);
	//echo $weekdayNamesET[1];
	//echo $weekdayNamesET;
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
	//juhusliku pildi panemine
	$picURL = "http://www.cs.tlu.ee/~rinde/media/fotod/TLU_600x400/tlu_";
	$picEXT = ".jpg";
	$picNUM = mt_rand(2,42);
	//echo $picNUM;
	$picFILE = $picURL .$picNUM .$picEXT;

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
		<p>Siin on minu <a href="https://www.tlu.ee/" target="_blank">TLÜ</a> õppetöö</p>
		<p>See veebileht on õppetöö eesmärgil tehtud.</p>
		<p>Teised lehed: <a href="photo.php"> photo.php </a>, <a href="page.php"> page.php </a></p>
		<?php
			//echo "<p>Tänane kuupäev on: " .$dateToday .".</p> \n";
			echo "<p>Täna on " .$weekdayNamesET[$weekdayToday - 1] .", " . $dateToday .".</p> \n";
			echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") ." , käes oli " .$partOfDay .".</p> \n";
		?>
		<a href="https://www.tlu.ee" target="_blank"><img src="<?php echo $picFILE; ?>" alt="pildike"> </a>
		<p> Minu semu teeb ka <a href="../../../~priilau" target="_blank">veebi</a> :P</p>

	</body>
	
</html>