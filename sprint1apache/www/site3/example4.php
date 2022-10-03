<html>
	<body>
		<h1>Jubilación</h1>
		<?php
			$edad = $_GET['edad'];
			$X = $_GET['X'];
			if(($X % 2) == 0){
			return "El valor introducido es par.";
			}else{
			function edad_en_X_años($edad) {
			return $edad + $X;
			}
			function mensaje($edad) {
				if (edad_en_X_años($edad) > 65) {
					return "En".$X. " años tendrás edad de jubilación.";
			} else {
				return "¡Disfruta de tu tiempo!";
			}
			}
			}
			?>

			<table>
				<tr>
					<th>Edad</th>
					<th>Info</th>
				</tr>

				<?php
				$lista = array(58,59,60,61,62);
				foreach ($lista as $valor) {
					echo "<tr>";
					echo "<td>".$valor."</td>";
					echo "<td>".mensaje($valor)."</td>";
					echo "</tr>";
				}
				?>
			</table>
	</body>
</html>
