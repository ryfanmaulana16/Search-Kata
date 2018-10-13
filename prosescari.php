<?php
$var1=$_POST["Ryfan"];
$indo="Indonesia tanah airku tanah tumpah darahku";
$ex = explode(" ", $indo);	
for($i=0;$i<count($ex);$i++){
	if($ex[$i] == $var1){
		echo $ex[$i] = "<b>$var1</b>"." ";
	}
	else{
		echo $ex[$i]. " ";
	}
}


