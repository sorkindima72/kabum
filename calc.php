<?php

if (isset($_POST["summn"]) && isset($_POST["summadd"]) && isset($_POST["date"])&& isset($_POST["vybor"])) { 

	$summn=$_POST["summn"];
	$summadd=$_POST["summadd"];
	$date=$_POST["date"];
	$vybor=$_POST["vybor"];
	$time=strtotime($date);
	$month=date("n",$time);
	$year=date("Y",$time);	
	$dayinmonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
	$dayinyear=($yaer%4==0)?366:365;
	if($vybor=="yes")
	{
		$result=round($summn+($summn+$summadd)*$dayinmonth*(10/$dayinyear));
	}
	else
	{
		$result=round($summn+$summn*$dayinmonth*(10/$dayinyear));
	}
    echo $result; 
}

?>