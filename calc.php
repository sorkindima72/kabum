<?php

if (isset($_POST["summn"]) && isset($_POST["summadd"]) && isset($_POST["date"])&& isset($_POST["vybor"])&& isset($_POST["years"])) { 
	
	$summn=$_POST["summn"];
	$summadd=$_POST["summadd"];
	$date=$_POST["date"];
	$vybor=$_POST["vybor"];
	$time=strtotime($date);
	$month=date("n",$time);
	$year=date("Y",$time);
	$years=	$_POST["years"];
	$county=0;
	if($years=="1 год")
	{
		$county=1;
	}
	else if($years=="2 года")
	{
		$county=2;
	}
	else if($years=="3 года")
	{
		$county=3;
	}
	else if($years=="4 года")
	{
		$county=4;
	}
	else if($years=="5 лет")
	{
		$county=5;
	}
	$result=$summn;
	for($i=0;$i<$county;$i++)//про года конечно забыл
	{ 
		$year++;
		$dayinyear=($year%4==0)?366:365;
		for($j=0;$j<12;$j++) // понял свою ошибку, ибо формула расчитывает на месяц а не на год
		{
			$dayinmonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
			if($vybor=="yes")
			{
				$result=$result+($result+$summadd)*$dayinmonth*(10/100/$dayinyear)+$summadd;//если мы пополняемто пополненные деньги же каждый месяц никуда не пропадают верно? Поэтому +$summadd
			}
			else
			{
				$result=$result+$result*$dayinmonth*(10/100/$dayinyear);
			}
			$month++;
			if($month==13)
			{
				$month=1;
			}
		}
	}
	
    echo round($result); 
}

?>
