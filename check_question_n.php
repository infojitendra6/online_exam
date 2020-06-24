<?php
session_start();
include "connection.php";
if(isset($_POST['submit']))
{
	if(!empty($_POST['quizcheck']))
	{
		$count=count($_POST['quizcheck']);
		echo "total selected qoestion ".$count;
		$result=0;
		$i=1;
		$selected=$_POST['quizcheck'];
		print_r($selected);
		$q= "select * from question";
		$res=mysqli_query($conn, $q);
		while($row=mysqli_fetch_array($res))
{  
print_r($row['ans_id']);
$checked=$row['ans_id']==$selected[$i] ;
if($checked)
{
	$result++;
}
$i++;
}
echo "result= ".$result;
	}
}
?>