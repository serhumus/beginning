<?php
require_once "connection.php";
require_once "Entitys.php";

if ($_SERVER['REQUEST_METHOD']=='POST'){
//Call to delete:
		if (isset($_POST['delete']) && isset($_POST['id'])){
			$Ent_ID=$_POST['id'];
			$query="delete from Entity where Entity_ID='$Ent_ID'";
			$result=mysqli_query($connection, $query);
			if (!$result) echo $connection->error;
		}
		
//Call to Add user
		if (isset($_POST["Name"])){
				if ($_POST["Name"]!="" &&
			$_POST["Function"]!="" &&
			$_POST["Login"]!="" &&
			$_POST["Pass"]!=""){
				$NameP=$_POST["Name"];
				$FunctionP=$_POST["Function"];
				$WhatsAppP=(isset($_POST["WhatsApp"]))?$_POST["WhatsApp"]:null;
				$TelP=(isset($_POST["Tel"]))?$_POST["Tel"]:null;
				$EmailP=(isset($_POST["Email"]))?$_POST["Email"]:null;
				$LoginP=$_POST["Login"];
				$PassP=$_POST["Pass"];
				$BussinessP=(isset($_POST["Bussiness"]))?$_POST["Bussiness"]:null;
				$RuleP=$_POST["Bussiness_Rule"];
				
				$query="insert into Entity values('$NameP','$FunctionP','$WhatsAppP','$TelP','$EmailP','$LoginP','$PassP', null,'$BussinessP','$RuleP')";
				$result=mysqli_query($connection, $query);
				if (!$result) echo $connection->error;
			
	//Create Account to new Entity		
				$Acc=new Accounts;
				$Acc->Create_Account("$NameP","$RuleP","$FunctionP");
				}
			}
		
	echo "Por favor, preencha corretamente os campos com *";
}
	
echo <<<FormAdd
		<form method="post" action="Front_Entitys.php">
		Nome*:<input type="text" name=Name></input><br>
		Função*:<input type="text" name=Function></input><br>
		WhatsApp:<input type="text" name=WhatsApp></input><br>
		Telefone<input type="text" name=Tel></input><br>
		Email:<input type="text" name=Email></input><br>
		Login*:<input type="text" name=Login></input><br>
		Senha*:<input type="text" name=Pass></input><br>
		Bussiness:<input type="text" name=Bussiness></input><br>
		Bussiness_Rule*:<input type="text" name=Bussiness_Rule></input><br>		
		<input type="hidden" name=Request></input><br>
		<input type="submit" value="Adicionar"></form>
FormAdd;

	//List of Entity, with option delete
	$result= mysqli_query($connection, "select * from Entity");
	$rows= mysqli_num_rows($result);

	echo <<<___Table
		<table border='solid'><tr>
			<th>Name</th>
			<th>Function</th>
			<th>Login</th>
			<th>ID</th>
			<th>Bussiness_Rule</th>
			<th>Options</th>
			</tr>
			<tr>
___Table;

	for ($i=0; $i<$rows; $i++){
		$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
		echo <<<List
		<td>$row[Name]</td>
		<td>$row[Function_Occup]</td>
		<td>$row[Login]</td>
		<td>$row[Entity_ID]</td>
		<td>$row[Bussiness_Rule]</td>
		<td><form method='post' action='Front_Entitys.php'><input type='hidden' name='id' value='$row[Entity_ID]'><input type='hidden' name='delete' value='1'><input type='submit' value='Delete!'></form></td>
		</tr>
List;
	}
	
	echo '</table>';
	
	echo "<a href='index.php'>Home</a>";
?>
