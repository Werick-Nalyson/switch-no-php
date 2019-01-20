<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>switch</title>
	<meta charset="utf-8">
</head>
<body>
	<section>
		<form method="post" action="index.php">
			<select name="opcao" id="op" style="padding: 5px; width: 130px;">
				<option value="1">Cachorro</option>
				<option value="2">Gato</option>
				<option value="3">Sapo</option>
			</select><br><br>	
			<input type="submit" class="btn" name="submit" value="Enviar" style="background-color: #3cd;border: none; padding: 4px; width: 70px;">
		</form>
		<?php
			$opcao = isset($_POST['opcao'])? $_POST['opcao'] : "";
			switch ($opcao) {
				case '1':
					echo "<img src='cachorro.jpg'>";
					echo "bela imagem de cachorro";
					break;
				case '2':
					echo "<img src='gato.jpg'>";
					echo "bela imagem de gato";
					break;
				case '3':
					echo "<img src='sapo.jpg'>";
					echo "bela imagem de sapo";
				default:
				echo "";
				break;
			}
?>
	</section>
	//adicionado esse comentario só para testar se as mudanças são salvas
	//nada mais a declarar.
</body>
</html>
