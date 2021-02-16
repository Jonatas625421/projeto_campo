<?php
$conexao = mysqli_connect("localhost", "root", "", "projeto_campo");

if (!$conexao) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

mysqli_set_charset($conexao,'utf8');

$sql = "select * from time_registration order by id desc";
$data = mysqli_query($conexao,$sql) or die("Erro");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista de Horas</title>
</head>
<body>
	<table>
		<tr>
			<th>usuario</th>
			<th>Tempo</th>
		</tr>
		<?php
			while ($row = mysqli_fetch_assoc($data)) {            
			echo "<td>".$row['user_id']."</td>";
			echo "<td>".$row['field_time']."</td>";
			} 
		?>
	</table>
</body>
</html>