<?php


// if data was posted
if (isset($_GET["word"]))
{
	$input = $_GET["word"];
	
	$tDict = array();
	$tDict["zero"] = "0";
	$tDict["one"] = "一";
	$tDict["two"] = "二";
	$tDict["three"] = "三";
	$tDict["four"] = "四";
	$tDict["five"] = "五";
	$tDict["six"] = "六";
	$tDict["seven"] = "七";
	$tDict["eight"] = "八";
	$tDict["nine"] = "九";
	$tDict["ten"] = "十";

	if (array_key_exists($input, $tDict))
	{
		echo($tDict[$input]);
	}
	else
	{
		echo("Translate Error");	
	}
}
else 
{
	echo("<h2>IEMS5722 - Translate Service</h2>");
	echo("<p>Please send a GET request to get started</p>");
}