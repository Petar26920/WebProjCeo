<?php

	$kolicina1 = $_POST['kolicina1']; 
	$kolicina2 = $_POST['kolicina2']; 
	$kolicina3 = $_POST['kolicina3'];
	$adresa = $_POST['adresa']; 
	
?>
<html>
	<head>
		<title>Shop</title>
	</head>
	<body>
		<h1>Obavljena narudzbenica</h1>
		<h2>Fiskalni racun</h2>
		<?php
			$date = date('H:i, jS F');  
			echo '<p>Roba narucena u ';
			echo $date;
			echo '</p>';
			
			echo '<p>Kupili ste sledece artikle: </p>';
			$ukupno = 0;
			$ukupno = $kolicina1 + $kolicina2 + $kolicina3;
			echo 'Kupljenih proizvoda: ' . $ukupno . '<br>';
			
			if ($ukupno == 0) 
			{
				echo 'Nista niste kupili!<br>';
			} else 
			{
				if ($kolicina1 > 0)
					echo $kolicina1 . ' Bajadere<br>';
				if ($kolicina2 > 0)
					echo $kolicina2 . ' Šlag torta<br>';
				if ($kolicina3 > 0)
					echo $kolicina3 . ' Bombice C<br>';
			}
			$ukupna_cena = 0.00;

			define('CENA1', 1100);
			define('CENA2', 1500);
			define('CENA3', 1900);
			$ukupna_cena = $kolicina1 * CENA1 + $kolicina2 * CENA2 + $kolicina3 * CENA3;
			$ukupna_cena = number_format($ukupna_cena, 2, ',', '.'); 
			
			echo '<p>Racun - suma: ' . $ukupna_cena . '</p>';
			echo '<p>Adresa za isporuku: ' . $adresa . '</p>';
			$izlaz = $date . "\t" . $kolicina1 . " Bajadere, \t" . 
			$kolicina2 . " Šlag torta, \t" . 
			$kolicina3 . " Bombice, \t" . 
			$ukupna_cena. "\t". 
			$adresa . "\n\n";
	
			 $fp = fopen("narudzbina.txt", 'a');
			flock($fp, LOCK_EX); 
			if (!$fp) 
			{
				echo '<p><strong> Vasa porudzbina ne moze biti obradjena trenutno.
				Pokusajte kasnije.</strong></p></body></html>';
				exit;
			}
			fwrite($fp, $izlaz, strlen($izlaz));
			flock($fp, LOCK_UN); 
			fclose($fp);
			echo '<p>Upisani podaci u fajl.</p>';
		?>
	</body>
</html>