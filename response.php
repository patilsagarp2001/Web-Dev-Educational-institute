<?php
$data=$_REQUEST['datavalue'];
$a=array('CSE','IT','EXTC','MXTC');
$b=array('Human Resource Management','Leadership and Entrepreneurship','Management of Change','Management Theory and Practice');
$c=array('Microelectronics & VLSI Design','Signal Processing','Machine Learning','Cloud Computing','Cyber Security');
$d=array('Human Anatomy and Physiology I','Pharmaceutical Analysis','Remedial Mathematics','Pharmacy Practice','Social and Preventive Pharmacy');
$e=array('Pharmaceutics','Human Anatomy and Physiology II','Remedial Biology','Herbal Drug Technology');
if($data=='BTech')
{
	foreach($a as $aone)
	{
		echo "<option>$aone</option>";
	}
}
if($data=='MBA')
{
	foreach($b as $aone)
	{
		echo "<option>$aone</option>";
	}
}
if($data=='MTech')
{
	foreach($c as $aone)
	{
		echo "<option>$aone</option>";
	}
}
if($data=='BPharm')
{
	foreach($d as $aone)
	{
		echo "<option>$aone</option>";
	}
}
if($data=='MBAPharm')
{
	foreach($e as $aone)
	{
		echo "<option>$aone</option>";
	}
}

?>
