<?php
  $username = "Martin Molodtsov";
  $fulltimenow = date("d.m.Y H:i:s");
  $hournow = date("H");
  $partofday = "lihtsalt aeg";
  if($hournow < 7) {
	 $partofday = "uneaeg";
  }
  if($hournow >= 8 and $hournow <18){
	  $partofday = "akadeemilise aktiivsuse aeg";
  }
?>
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title><?php echo $username; ?> - Minu veebileht</title>

</head>
<body>
  <h1><?php echo $username; ?></h1>
  <p>See veebileht on loodud õppetöö kaigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>
  <p>Leht on loodud veebiprogrammeerimise kursuse raames, <a href="http://www.tlu.ee">Tallinna Ülikooli</a> digitehnoloogiate instituudis!</p>
  <p>Lehe avamise hetkel oli: <?php echo $fulltimenow; ?>.</p>
  <p><?php echo "Parajasti on " .$partofday ."."; ?></p>
</body>
</html>