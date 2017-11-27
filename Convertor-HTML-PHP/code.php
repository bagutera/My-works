<?php

if (!empty($_GET['inputInform']))
	$inputInform = $_GET['inputInform'];

if (!empty($_GET['convertTypes']))
	$convertTypes = $_GET['convertTypes'];


function changeCase($inputInform,$convertTypes)
{
	if ($convertTypes == "firstCapt")
	{
		$strConvert1 = ucwords(strtolower($inputInform)) //Convert the first character of each word to uppercase
		echo $strConvert1."<br>";
		
		$strSum1 = (str_word_count($inputInform)); //Count the number of words found in the string
		if ($strSum1 == 1)
		{
			echo "In a sentence ".$strSum1." word, and ";
		}
		
		else
		{
			echo "In a sentence ".$strSum1." words, and ";
		}
			
		$symbSum1 = (iconv_strlen($inputInform)); // Return the length of the string
		if ($symbSum1 == 1)
		{
			echo $symbSum1." symbol."."<br>";
		}
		
		else
		{
			echo $symbSum1." symbols."."<br>";
		}
			
		return $strConvert1;
	}
	else if ($convertTypes == "commons")
	{	 
		$strConvert2 = strtolower($inputInform); //Convert all characters to lowercase
		echo $strConvert2."<br>";
		
		$strSum2 = (str_word_count($inputInform));
		if ($strSum2 == 1)
		{
			echo "In a sentence ".$strSum2." word, and ";
		}
		
		else
		{
			echo "In a sentence ".$strSum2." words, and ";
		}
			
		$symbSum2 = (iconv_strlen($inputInform));
		if ($symbSum2 == 1)
		{
			echo $symbSum2." symbol."."<br>";
		}
		else
		{
			echo $symbSum2." symbols."."<br>";
		}
			
		return $strConvert2;
	}
	else if ($convertTypes == "allCapts")
	{	
		$strConvert3 = strtoupper($inputInform); // Convert all characters to uppercase
		echo $strConvert3."<br>";
		
		$strSum3 = (str_word_count($inputInform));
		if ($strSum3 == 1)
		{
			echo "In a sentence ".$strSum3." word, and ";
		}
		else
		{
			echo "In a sentence ".$strSum3." words, and ";
		}
			
		$symbSum3 = (iconv_strlen($inputInform));
		if ($symbSum3 == 1)
		{
			echo $symbSum3." symbol."."<br>";
		}
		else
		{
			echo $symbSum3." symbols."."<br>";
		}
			
		return $strConvert3;
	}
}

//check on input
if (!empty($inputInform) && !empty($convertTypes))
	changeCase($inputInform,$convertTypes);
?>

-------------------------------------------------------------TEST------------------------------------------------------------------

<?php
include('kod_form.php');
if(changeCase('mari.liis','firstCapt')==="Mari.liis"){
echo "Test is successfully completed.<br><br>";
}else{echo "Test failed";}
if(changeCase('mari.liis','commons')==="mari.liis"){
echo "Test is successfully completed.<br><br>";
}else{echo "Test failed";}
if(changeCase('mari.liis','allCapts')==="MARI.LIIS"){
echo "Test is successfully completed.<br><br>";
}else{echo "Test failed";}
?>
