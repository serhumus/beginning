<?php
require_once "connection.php";
require_once "Accounts.php";

$test=new Accounts;

echo <<<FormAdd
		<form method="post" action="Front_Accounts.php">
		Nome*:<input type="text" name=Name></input><br>
		Negócio*:<input type="text" name=Bus></input><br>
		Conta primária<input type="text" name=Prim></input><br>
		<input type="submit" value="Adicionar"></form>
FormAdd;

//Call to remove
if (isset($_POST["id_Account"])){
	$test->Delete_Account($_POST["id_Account"]);
}


//Call to creation
if (isset($_POST["Name"]) && isset($_POST["Bus"])){
	$test->Create_Account($_POST["Name"], $_POST["Bus"],$_POST["Prim"]);
}

	//List of Entity, with option delete
	$result= mysqli_query($connection, "select * from Accounts");
	$rows= mysqli_num_rows($result);

	echo <<<___Table
		<table border='solid'>
			<tr>
				<th>Name</th>
				<th>Negócio</th>
				<th>Saldo</th>
				<th>Conta primária</th>
				<th>ID</th>
				<th>Options</th>
			</tr>
			<tr>
___Table;

	for ($i=0; $i<$rows; $i++){
		$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
		echo <<<List
			<td>$row[Name]</td>
			<td>$row[Bussiness]</td>
			<td>$row[Value]</td>
			<td>$row[Parent_Account]</td>
			<td>$row[Account_ID]</td>
			<td><form method='post' action='Front_Accounts.php'><input type='hidden' name='id_Account' value='$row[Account_ID]'><input type='hidden' name='delete' value='1'><input type='submit' value='Delete!'></form></td>
		</tr>
List;
	}
	echo '</table>';
	
	echo "<a href='index.php'>Home</a>";
