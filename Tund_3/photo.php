<?php
	$firstName  = "Jaagup";
	$lastName = "Aland";
	//loeme kataloogi sisu
	$dirToRead = "../../pics/";
	$allFiles = scandir($dirToRead);
	$picFiles = array_slice($allFiles, 2);
	//var_dump($picFiles);
	

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
	<body>
		<h1>
				<?php
			echo $firstName;
			echo " ";
			echo $lastName;
		?>
		</h1>
		<p>Siin on minu <a href="https://www.tlu.ee/" target="_blank">TLÜ</a> õppetöö</p>
		<?php 
		
			for ($i = 0; $i < count($picFiles); $i ++){
			echo '<img src="' .$dirToRead .$picFiles[$i] .'" alt="Juht">';
			}
		?>
	</body>
	
</html>