<?php
require_once 'connection.php';
require_once "Accounts.php";

class Bussiness_Rule{
//Regard of bussiness's rules:	
	function Create_Bussiness_Rule($Bussiness,$Number_Rule){
		$dt=date("Y-m-d H-i-s");
		$con=$GLOBALS["connection"];
		$query="insert into Bussiness_Rule VALUES ('$Bussiness', '$Number_Rule', '$dt')";
		$result=mysqli_query($con, $query);
		if (!$result) echo $con->error;
		else return 1;
	}
	
	
	function Delete_Bussiness_Rule($Bussiness, $Number_Rule){
		$con=$GLOBALS["connection"];
		$query="delete from Bussiness_Rule where Bussiness='$Bussiness' and Rule='$Number_Rule'";
		$result=mysqli_query($con, $query);
		if (!$result) echo $con->error;
		else return 1;
	}
	
	function List_Bussiness_Rules(){
		$con=$GLOBALS["connection"];
		$query="select * from Bussiness_Rule";
		$result=mysqli_query($con, $query);
		if (!$result) echo $con->error;
		return $result;
	}
	
//To Create the especifc table for the respective bussiness's rule:
	function Create_Table_Rules($Table_Bussiness,$Rule){
		$con=$GLOBALS["connection"];
		$query="create table TableRules_$Table_Bussiness"."_$Rule (Account_Name varchar(27) not null unique, 
		Percentage tinyint(2) not null, Parent varchar(27) null, Last_modify datetime not null)";
		$result=mysqli_query($con, $query);
		//if (!$result) echo $con->error;
		//else return 1;
	}
	
	function Delete_Table_Rules($x,$y){
		$con=$GLOBALS["connection"];
		$query="drop table TableRules_$x"."_$y";
		$result=mysqli_query($con, $query);
		if (!$result) echo $con->error;
		else return 1;		
	}

//To Create or edit the rules:	
	function Create_Update_Rule($Table_Name, $Rule, $Name, $Percentage, $Parent_Name=null){
		$Parent_Name=$Name;
		$dt=date("Y-m-d H-i-s");
		$con=$GLOBALS["connection"];
		$query="insert into TableRules_$Table_Name"."_$Rule VALUES ('$Name', '$Percentage', '$Parent_Name', '$dt')";
		$result=mysqli_query($con, $query);
		//Update case duplicate fail:
		if (!$result and $con->errno==1062){
			$query="update TableRules_$Table_Name"."_$Rule set Percentage=$Percentage where Account_Name='$Name'";
			$result=mysqli_query($con, $query);
			if (!$result) echo $con->error;			
		}
		//Create Account case no existence:
		$query="select * from Accounts where Bussiness='$Table_Name' and Name='$Name'";
		$result=mysqli_query($con, $query);
		if ($result->num_rows==0){
			$TEST=new Accounts;
			$TEST->Create_Account($Name,$Table_Name,$Parent_Name);
		}
	}
	

	function Delete_Rule($Table_Name,$Rule, $Name){
		$dt=date("Y-m-d H-i-s");
		$con=$GLOBALS["connection"];
		$query="delete from TableRules_$Table_Name"."_$Rule where Account_Name = '$Name'";
		$result=mysqli_query($con, $query);
		if (!$result) echo $con->error;
	}
	
	function List_Rules($x,$y){
		$con=$GLOBALS["connection"];
		$query="select Account_Name,Percentage from TableRules_$x"."_$y where Account_Name=Parent";
		$result=mysqli_query($con, $query);
		if (!$result) echo $con->error;
		return $result;
	}
}
?>

