<?php
require_once "Transations.php";

$con=$GLOBALS["connection"];
if ($_SERVER['REQUEST_METHOD']=='POST'){
//Call to Add "Entrada" (don't is final method...):
	if (!empty($_POST['Value'])
			&& !empty($_POST['Bussiness'])
				&& !empty($_POST['Rule'])
					&& !empty($_POST['Origin'])
		){
			$P=$_POST['Product'];
			$V=$_POST['Value'];
			$B=$_POST['Bussiness'];
			$R=$_POST['Rule'];
			$D=!empty($_POST['Details'])?$_POST['Details']:null;
			$EO=7;
			$O=$_POST['Origin'];
			$Dt=date('Y-m-d');
			$H=date('H:i:s');
			$t=new Transations;
			$t->input($EO,$P,$O,$V,$B,$R,$D,$Dt,$H);
		}
}

echo <<<FormAdd
<h1>Entrada:</h1>
	<table border='solid'>
		<tr>
			<th>
				<form method="post" action="Front_Transations.php">
				Origem do montante:
			</th>
FormAdd;
echo 
			"<td>
				<select name='Origin'>";
				$query="select * from Entity";
				
				$result=mysqli_query($con, $query);
				$rows=$result->num_rows;
					for ($i=0;$i<$rows;$i++){
						$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
						$EnID=$row['Entity_ID'];
						$NOri=$row['Name'];
						echo "<option value='$EnID'>"."$NOri"." ".$row['Function_Occup']."</option>";
					}
echo 			"</select>
			</td>
		</tr>";
echo <<<Form
		<tr>
			<th>Produto ou serviço:</th>
			<td><input type="text" name=Product></input></td>
		</tr>
		<tr>
			<th>Valor*:</th>
			<td><input type="text" name=Value></input></td>
		</tr>
		<tr>
			<th>Bussiness:</th>
			<td><input type="text" name=Bussiness></input></td>
		</tr>
		<tr>
			<th>Regra:</th>
			<td><input type="text" name=Rule></input></td>
		</tr>
		<tr>
			<th>Details:</th>
			<td><input type="text" name=Details></input><br></td>
		</tr>
		<tr>
			<td><input type="submit" value="Adicionar"></form></td>
		</tr>
	</table>
Form;

echo "<hr />
		<a href='Front_Products_Services.php'>Criar novo produto ou serviço</a><br />";
echo "<a href='Front_Entitys.php'>Criar nova Entidade (Origem do montante)</a><br />";

echo "<a href='Front_Bussiness_Rules.php'>Criar novo Negócio ou regra</a><br />";

echo "<hr />";

echo <<<FormAdd
<h1>Saída:</h1>
	<table border='solid'>
		<tr>
			<th>
				<form method="post" action="Front_Transations.php">
				Negócio:
			</th>
FormAdd;
echo 
			"<td>
				<select name='Bussiness'>";
				$query="select * from Bussiness_Rule";
				
				$result=mysqli_query($con, $query);
				$rows=$result->num_rows;
					for ($i=0;$i<$rows;$i++){
						$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
						$EnID=$row['Bussiness'];
						echo "<option value='$EnID'>"."$EnID"."</option>";
					}
echo 			"</select>
			</td>
		</tr>";
echo <<<Form
		<tr>
			<th>Produto ou serviço:</th>
			<td><input type="text" name=Product></input></td>
		</tr>
		<tr>
			<th>Valor*:</th>
			<td><input type="text" name=Value></input></td>
		</tr>
		<tr>
			<th>Bussiness:</th>
			<td><input type="text" name=Bussiness></input></td>
		</tr>
		<tr>
			<th>Regra:</th>
			<td><input type="text" name=Rule></input></td>
		</tr>
		<tr>
			<th>Details:</th>
			<td><input type="text" name=Details></input><br></td>
		</tr>
		<tr>
			<td><input type="submit" value="Adicionar"></form></td>
		</tr>
	</table>
Form;

?>
