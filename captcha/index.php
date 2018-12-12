<?php
	SESSION_START();
?>

<!doctype html>
<head>
<meta charset="UTF-8">
<link href="index.css" rel="stylesheet" type="text/css"> 
<title>Captcha</title>

	<body>
		<label>Veuillez saisir le code de securite!</label><br>
	
		<?php 
			echo "<img src='script-captchas.php' alt='captchas' />"; 
		?>
	
		<form method="post" action="index.php">
			<label>Entrez le code : </label>
			<input type="text" name="code" id="code" maxlength="5"/> <br/>
			<input type="submit" id="submit" value="Valider"/>
		</form>
	
		<?php
			if(isset($_POST['$submit']))
			{	
				$bonne_rep=$_POST['bon'];
				$mauvaise_rep=$_POST['mauvais'];
				$vide=$_POST['vide'];
				
				if(empty($code)) 
				{ 
					print("Code de securite doit contenir une valeur!"); 
				}
				
			}
		
		?>
	
	</body>
</head>