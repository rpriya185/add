<?php
if($_POST)
{
	$connection=new Mongo();
	$db=$connection->mongophp;
	$rec['email']=$_POST['email'];
	$rec['fname']=$_POST['fname'];
	$db->precord->insert($rec);
}
?>