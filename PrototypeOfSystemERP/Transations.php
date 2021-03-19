<?php
require_once "Accounts.php";

class transations{
//Create data on Input table;
	function Input($EOp,$P,$O,$V,$B,$RN,$D,$Dt,$H){
		$con=$GLOBALS["connection"];
//Issue on Input's table
		$Pr=!$P?'null':"'$Pr'";
		$query="insert into Input values('$EOp',$Pr,'$O','$V','$B','$RN','$D','$Dt','$H',null )";
		$result=mysqli_query($con, $query);
			if (!$result){
				echo $con->error;
			}else {
//Request rules:
				$query="select * from TableRules_$B"."_$RN where Account_Name=Parent";
				$result=mysqli_query($con, $query);
				if (!$result){
					echo $con->error;
				}else {
//Application Rules to Value
					$rows=$result->num_rows;
					for ($i=0; $i<$rows; $i++){
						$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
						$VRuled=($V/100)*$row['Percentage'];
						$Account_NM=$row['Account_Name'];
//Get Account ID:
						$query="select * from Accounts where Name='$Account_NM' and Bussiness='$B'";
						$resultInElseFor=mysqli_query($con, $query);
						if (!$resultInElseFor){
							echo "Result in for:".$con->error;
						}else {
							$rowInElseFo=mysqli_fetch_array($resultInElseFor, MYSQLI_ASSOC);
							$Ac_ID=$rowInElseFo['Account_ID'];
							$t=new Accounts;
//Apply Value ruled to Account							
							if ($t->UpdateValue($Ac_ID, $VRuled)){
//Doing details
								$P2Details=$row['Percentage'];
								$D2Movi="$P2Details% do valor total de $V foram registrados neste movimento.";
//Get Input_ID...

								$query="select * from Input where Operator_ID='$EOp' and Bussiness_Rule='$B' and Hour='$H' and Value='$V'";
								$resultGetInput=mysqli_query($con, $query);
								if (!$resultGetInput){
									echo $con->error;
								}else {
//Registring moviment
									$rowGetInput=mysqli_fetch_array($resultGetInput, MYSQLI_ASSOC);
									$Input_ID=$rowGetInput['ID'];
									$Origin=$O;
									$Destiny=$Ac_ID;
									$query="insert into Moviments values('$VRuled','$Dt','$H','$EOp','$B',null,'$Input_ID',null,'$Origin','$Destiny','$D2Movi')";
									$resultInMoviment=mysqli_query($con, $query);
									if (!$resultInMoviment){
										echo $con->error;
									}else echo "Regra de ". $row['Percentage']."% ($VRuled) aplicados na conta: $Account_NM. <br />";
								}
							}
						}
					}
				}
			}
		}
		
		
//Create data on Output table;
	function Output($V,$B,$RN,$D,$Assets,$OpID,$DestID,$Ac1,$Ac2,$Ac3,$V1,$V2,$V3,$InID,$Dt,$H){
		$con=$GLOBALS["connection"];
//Doing Detaiils
		
		$Det=$InID>0?"Custo de serviço distribuído igualmente: $D":$D;
//Issue on Output's table
		$query="insert into Output values('$V',$B,'$RN','$Det', null,'$Assets','$OpID','$DestID','$Ac1','$Ac2','$Ac3',$V1,$V2,$V3,$InID,'$Dt','$H')";
		$result=mysqli_query($con, $query);
			if (!$result){
				echo $con->error;
			}else {
//In case of cust of service "run Input Function reverse":
					if ($InID>0){
//Request rules:
						$query="select * from TableRules_$B"."_$RN where Account_Name=Parent";
						$result=mysqli_query($con, $query);
						if (!$result){
							echo $con->error;
						}else {
//Application Rules to Value
							$rows=$result->num_rows;
							for ($i=0; $i<$rows; $i++){
								$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
								$VRuled=($V/100)*$row['Percentage'];
								$Account_NM=$row['Account_Name'];
//Get Account ID:
								$query="select * from Accounts where Name='$Account_NM' and Bussiness='$B'";
								$resultInElseFor=mysqli_query($con, $query);
								if (!$resultInElseFor){
									echo "Result in for:".$con->error;
								}else {
									$rowInElseFo=mysqli_fetch_array($resultInElseFor, MYSQLI_ASSOC);
									$Ac_ID=$rowInElseFo['Account_ID'];
									$t=new Accounts;
//Apply Value ruled to Account							
									if ($t->UpdateValue($Ac_ID, -$VRuled)){
//Doing details
										$P2Details=$row['Percentage'];
										$D2Movi="$P2Details% do valor total de $V foram registrados neste movimento.";
//Get Output_ID...

										$query="select * from Output where Operator_ID='$OpID' and Bussiness_Rule='$B' and Hour='$H' and Value='$V'";
										$resultGetInput=mysqli_query($con, $query);
										if (!$resultGetInput){
											echo $con->error;
										}else {
//Registring moviment
											$rowGetInput=mysqli_fetch_array($resultGetInput, MYSQLI_ASSOC);
											$Output_ID=$rowGetInput['ID'];
											$Origin=$O;
											$Destiny=$Ac_ID;
											$query="insert into Moviments values('$VRuled','$Dt','$H','$EOp','$B',null,null,$Output_ID,'$Origin','$Destiny','$D2Movi')";
											$resultInMoviment=mysqli_query($con, $query);
											if (!$resultInMoviment){
												echo $con->error;
											}else echo "Pela regra de ". $row['Percentage']."%, R$$VRuled,00 foram descontados da conta: $Account_NM. <br />";
										}
									}
								}
							}
						}
					}
					else{
						echo "Nada";
						}
					
				}
			}
		}

?>
