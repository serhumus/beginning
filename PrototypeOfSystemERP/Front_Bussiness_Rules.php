<?php
require_once "Bussiness_Rules.php";

$test=new Bussiness_Rule;		

//Call to delete
if (isset($_POST["Bussiness"]) && isset($_POST["Rule"])){
	$test->Delete_Bussiness_Rule($_POST["Bussiness"], $_POST["Rule"]);
	$test->Delete_Table_Rules($_POST["Bussiness"], $_POST["Rule"]);
}

//Call to creation
if (isset($_POST["CreateBussiness"]) && isset($_POST["CreateBussinessRule"])){
	$test->Create_Bussiness_Rule($_POST["CreateBussiness"], $_POST["CreateBussinessRule"]);
	$CreateBussinessP=$_POST["CreateBussiness"];
	$CreateBussinessRuleP=$_POST["CreateBussinessRule"];
	$test->Create_Table_Rules("$CreateBussinessP","$CreateBussinessRuleP");
}

$test->List_Bussiness_Rules();

//Show option to add a new Bussiness and\or rule.
echo <<<AddBussiness
<h2>Adicionar novo padrão de regras:</h2>
<form method="post" action="Front_Bussiness_Rules.php">
Nome do negócio:<input type="text" name="CreateBussiness">
Número da Regra:<input type="text" name="CreateBussinessRule">
<input type="submit" value="Criar">
</form>
AddBussiness;

//Show List Of Bussiness and Rules with "delete" and "Details" options in table formate.
echo ' 
	<table id="List_Bussiness">
	<tr>
		<th>
			Negócio
		</th>
		<th>
			Regra
		</th>
		<th>
			Data de criação
		</th>
	</tr>
';
$ListRules=$test->List_Bussiness_Rules();
for ($i=0; $i<$ListRules->num_rows;$i++){
	$ListRules->data_seek($i);
	$row=$ListRules->fetch_array(MYSQLI_NUM);
	echo <<<OK
	<tr>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td>
			<form method="POST" action="Front_Bussiness_Rules.php">
			<input type="hidden" name="Bussiness" value="$row[0]">
			<input type="hidden" name="Rule" value="$row[1]">
			<input type="submit" value="Delete"></form>
		</td>
		<td>
			<form method="POST" action="Details_Rules.php">
				<input type="hidden" name="Bussiness1" value="$row[0]">
				<input type="hidden" name="Rule1" value="$row[1]">
				<input type="submit" value="Detalhes"></form>
			</form>
		</td>
	</tr>
OK;
}
echo '</table>';

echo "<a href='index.php'>Voltar</a>";
?>
