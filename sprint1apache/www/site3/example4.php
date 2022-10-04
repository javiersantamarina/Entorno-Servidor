<html>
	<body>
		<h1>Jubilación</h1>
		<?php
		if (edad_en_5_años(61) > 65) {
			echo "En 10 años tendrás edad de jubilación";
		} else {
			echo "¡Disfruta de tu tiempo!";
		}
		?>
		<table>
		<tr>
			<th>Edad</th>
			<th>Info</th>
		</tr>

		<?php
			$lista = array(58,59,60,61,62);
			foreach ($lista as $valor){
				echo "<tr>";
				echo "<td>".$valor."</td>";
				echo "<td>".mensaje($valor)."</td>";
				echo "</tr>";
			}
		?>
		</table>
	</body>
</html>
