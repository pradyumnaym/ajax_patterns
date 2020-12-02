<?php

	extract($_GET);
	$file=file_get_contents("seats.json","r");
	$jason=json_decode($file,true);
	$file=file_get_contents("seats.json","w");
	if($value=="CSE")
	{
		if($jason["cse"]>0)
		{
				$jason["cse"]=$jason["cse"]-1;
				$newstring=json_encode($jason);
				echo $newstring;
				file_put_contents("seats.json", $newstring);
		}
	}
	if($value=="ECE")
	{
		if($jason["ece"]>0)
		{
			$jason["ece"]=$jason["ece"]-1;
			$newstring=json_encode($jason);
			file_put_contents("seats.json", $newstring);
		}
	}
	if($value=="ME")
	{
		if($jason["me"]>0)
		{
				$jason["me"]=$jason["me"]-1;
				$newstring=json_encode($jason);
				file_put_contents("seats.json", $newstring);
		}
	}
	if($value=="BT")
	{
		if($jason["bt"]>0)
		{
				$jason["bt"]=$jason["bt"]-1;
				$newstring=json_encode($jason);
				file_put_contents("seats.json", $newstring);
		}
	}
	$file=file_get_contents("seats.json");
	$jason=json_decode($file,true);
	echo $jason["cse"].".".$jason["ece"].".".$jason["me"].".".$jason["bt"];
	sleep(3);
	




?>