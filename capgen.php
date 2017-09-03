<?php

	//  CAPGEN **Captcha Generator Software** V1.1
	//  By Ecka Software
	//  eckasoftware@outlook.com
	//  09-01-2017
	//
	//  **** LICENSE ****
	//  This software is provided to you "As-Is" with no warranty
	//  implied, offered, or given. You use this software at your
	//  own risk. This software is NOT recommended for large-scale
	//  commercial settings or applications. You are free to download
	//  copy, edit, and distribute this software. OPEN-SOURCE LICENSE
	
	session_start();
	
	//TOGGLE LETTERS OR NUMBERS
	$toggle = rand(0,1);
	
	//SET LETTER AND SYMBOL ARRAY
	$lsarray = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","*","#","@","!");
	
	//SET VALUES
	if ($toggle == 0)
	{
		$A = rand(0,9);
	}
	else
	{
		$key = array_rand($lsarray, 1);
		$A = $lsarray[$key];
	}
	
	if ($toggle == 1)
	{
		$B = rand(0,9);
	}
	else
	{
		$key = array_rand($lsarray, 1);
		$B = $lsarray[$key];
	}
	
	if ($toggle == 1)
	{
		$C = rand(0,9);
	}
	else
	{
		$key = array_rand($lsarray, 1);
		$C = $lsarray[$key];
	}
	
	if ($toggle == 0)
	{
		$D = rand(0,9);
	}
	else
	{
		$key = array_rand($lsarray, 1);
		$D = $lsarray[$key];
	}
	
	if ($toggle == 0)
	{
		$E = rand(0,9);
	}
	else
	{
		$key = array_rand($lsarray, 1);
		$E = $lsarray[$key];
	}
	
	if ($toggle == 1)
	{
		$F = rand(0,9);
	}
	else
	{
		$key = array_rand($lsarray, 1);
		$F = $lsarray[$key];
	}

	//ADD VALUES TO ARRAY
	$cc_array = array($A,$B,$C,$D,$E,$F);
	
	//RANDOMIZE THE VALUE ARRAY
	$cc_key = array_rand($cc_array, 6);
	
	//SAVE THE FULLY RANDOM KEY
	$captcha = $cc_array[$cc_key[0]].$cc_array[$cc_key[1]].$cc_array[$cc_key[2]].$cc_array[$cc_key[3]].$cc_array[$cc_key[4]].$cc_array[$cc_key[5]];

	echo '<div style="position: relative; top: 50px; width: 131px; height: 45px; z-index: 1; background-color: transparent;"></div><div style="z-index: -5; width: 125px; text-align: center; background-color: orange; border: 3px solid black; font: 20px arial, sans;"><b>Captcha<br />'.$captcha.'</b></div>';
?>