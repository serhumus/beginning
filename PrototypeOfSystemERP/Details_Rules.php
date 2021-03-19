<?php
require_once "Bussiness_Rules.php";

$test=new Bussiness_Rule;

//call Create/Update rules...
if (
isset($_POST["TableN"]) && 
isset($_POST["TableR"])&&
isset($_POST["RuleName"]) && 
isset($_POST["Percentage"])
){
	if (isset($_POST["Primaria"])){
		$test->Create_Update_Rule($_POST["TableN"],$_POST["TableR"],$_POST["RuleName"],$_POST["Percentage"],$_POST["Primaria"]);
	}
	else $test->Create_Update_Rule($_POST["TableN"],$_POST["TableR"],$_POST["RuleName"],$_POST["Percentage"]);
	header('Location:Front_Bussiness_Rules.php');
}

//Call to delete
if (
isset($_POST["Acc"])
){
	$test->Delete_Rule($_POST["TableN1"],$_POST["RuleN1"],$_POST["Acc"]);
	header('Location:Front_Bussiness_Rules.php');
}

//call the tables rules
else if (isset($_POST["Bussiness1"]) && isset($_POST["Rule1"])){
	$x=$_POST["Bussiness1"];
	$y=$_POST["Rule1"];
	$con=$connection;
	$result=$test->List_Rules($x,$y);
	$rows=$result->num_rows;
	$percentTotal=0;

//To count if resources is full set
	for ($i=0;$i<$rows;$i++){
		$result->data_seek($i);
		$row=$result->fetch_array(MYSQLI_NUM);
		$percentTotal+=$row[1];
	}
	
	$query="select * from TableRules_$x"."_$y order by Parent";
	$result=mysqli_query($con, $query);
	if (!$result) echo $con->error;
	else $rows=$result->num_rows;

//Form to Create Update Rule
	echo <<<FormCreateUpdate
			<form method='post' action="Details_Rules.php">
				<input type="hidden" name="TableN" value="$x">
				<input type="hidden" name="TableR" value="$y">
				Nome da regra/conta<input type="text" name="RuleName">
				Percentagem alocada<input type="text" name="Percentage">
				Regra primária (Se houver)<input type="text" name="Primaria">
				<input type="submit" value="Criar/Atualizar">
			</form>
FormCreateUpdate;

//Show 	tables:
	echo <<<Ok1
		<table border='solid' id='List_Bussiness'>
			<tr><th>
				<h1>$x regra: $y</h1>
				$percentTotal% dos recursos estão configurados
				</th>
			</tr>
			<tr>
				<th>
					Conta
				</th>
				<th>
					Porcentagem 
				</th>
				<th>
					Primária
				</th>
				<th>
					Criação da regra
				</th>
			</tr>
Ok1;
		for ($i=0; $i<$rows;$i++){
			$result->data_seek($i);
			$row=$result->fetch_array(MYSQLI_NUM);
			echo <<<OK
				<tr>
					<td>$row[0]</td>
					<td>$row[1]</td>
					<td>$row[2]</td>
					<td>$row[3]</td>
					<td>
						<form method="post" action="Details_Rules.php">
							<input type="hidden" name="Acc" value="$row[0]">
							<input type="hidden" name="TableN1" value="$x">
							<input type="hidden" name="RuleN1" value="$y">
							<input type="submit" value="Delete">
						</form>
					</td>
				</tr>
OK;
		}
		echo '</table>';
	}

echo "<a href='Front_Bussiness_Rules.php'>Voltar</a>";

?>
