<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>switch</title>
	<meta charset="utf-8">
</head>
<body>
	<section>
		<form method="post" action="index.php">
			<input type="number" name="num1" min="1" required="">
			<input type="number" name="num2" min="1" required=""><br>
			
			<input type="radio" value="1" name="opcao">Soma
			<input type="radio" value="2" name="opcao">Subtração
			<input type="radio" value="3" name="opcao">Multiplicação
			<input type="radio" value="4" name="opcao">Divisão <br><br>


			<input type="submit" class="btn" name="submit" value="Enviar" style="background-color: #3cd;border: none; padding: 4px; width: 70px;">
		</form>
		<?php

			$num1 = isset($_POST['num1'])? $_POST['num1'] : "";
			$num2 = isset($_POST['num2'])? $_POST['num2'] : "";

			$opcao = isset($_POST['opcao'])? $_POST['opcao'] : "";

			switch ($opcao) {
				case '1':
					echo "A soama entre $num1 e $num2 é: " . ($num1 + $num2);
					break;
				case '2':
					echo "A subtração entre $num1 e $num2 é: " . ($num1 - $num2);
					break;
				case '3':
					echo "A Multiplicação entre $num1 e $num2 é: " . ($num1 * $num2);
					break;
				case '4':
					echo "A divisão entre $num1 e $num2 é: " . ($num1 / $num2);
					break;
			}
		?>
	</section>
</body>
</html>