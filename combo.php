<?php
$estados = array("CDMX","Michoacan");
$municipios = array(
	array("Coyoacan","Iztapalapa","Cuauhtemoc"),
	array("Morelia","Santa Ana Maya","San Rafael"),
);

switch ($_GET["op"]) {
	case '1':
		$estid = $_GET["id"];
		$i = 0;
		foreach ($municipios[$estid] as $val) {
			echo '<option value="'.$i.'">'.$val.'</option>';
			$i = $i + 1;
		}
		break;
	case '2':
		$estid = $_GET["id"];
		$munid = $_GET["mn"];
		echo '<br><br><table border="1"><tr><th>Estado</th><th>Municipio</th></tr>';
		echo "<tr><td>".$estados[$estid]."</td><td>".$municipios[$estid][$munid]."</td></tr></table>";
		break;
}