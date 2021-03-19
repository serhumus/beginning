<?php
require_once "connection.php";

class Accounts{
	function Create_Account($N,$B,$P){
		$con=$GLOBALS["connection"];
		$PrimP=$P==""?$N:$P;
		$query="insert into Accounts values('$N', '$B', 0,'$P', null)";
		$result=mysqli_query($con, $query);
		if (!$result) echo $con->error;
	}
	
	function Delete_Account($A){
		$con=$GLOBALS["connection"];
		$query="delete from Accounts where Account_ID=$A";
		$result=mysqli_query($con, $query);
		if (!$result) echo $con->error;
	}
	
	function UpdateValue($A,$V){
		$con=$GLOBALS["connection"];
		$query="select Value from Accounts where Account_ID='$A'";	
		$result=mysqli_query($con, $query);
		if (!$result){
			 echo $con->error;
			 return 0;
		}else {
			$row=mysqli_fetch_row($result);
			$sum=$row[0]+$V;
			$result=mysqli_query($con, "update Accounts set Value=$sum where Account_ID=$A");
			if (!$result){
				echo $con->error;
				return 0;
			}else return 1;
		}
	}
}
?>
