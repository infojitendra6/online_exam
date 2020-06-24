<?php
session_start();
include "../connection.php";
$question_no="";
$question="";
$opt1="";
$opt2="";
$opt3="";
$opt4="";
$answer="";
$count=0;
$ans="";
$queno=$_GET["questionno"];
if(isset($_SESSION["answer"][$queno]))
{
	$ans=$_SESSION["answer"][$queno];
}
$res=mysqli_query($conn, "select * from questions where category='$_SESSION[exam_category]'&& question_no=$_GET[questionno]");
$count=mysqli_num_rows($res);
if($count==0)
{
	echo "over";
}
else
{
	while($row=mysqli_fetch_array($res))
{
    $question_no=$row["question_no"];
	$question=$row["question"];
	$opt1=$row["opt1"];
	$opt2=$row["opt2"];
	$opt3=$row["opt3"];
	$opt4=$row["opt4"];
}
	?>
	<br>
	
	<table >
  <tr>
    <td style="font-weight: bold;" colspan="2" >
	<?php echo "(".$question_no.")".$question; ?>
	</td>
  </tr>
</table>

<input type="radio" id="r1" name="gender" value="<?php echo $opt1; ?>" onclick="radioclick(this.value, <?php echo $question_no ?>);"
<?php if($ans==$opt1)
	{
		echo "ehecked";
	}
	
	?>>
	<?php 
	if(strpos($opt1, 'images/')!=false)
		{
			 ?>
			 <img src="admin/<?php echo $opt1; ?>" height="30" width="30" >
			 <?php
		}
		else
		{
			echo $opt1;
		}

	?>
  <input type="radio" id="r1" name="gender" value="<?php echo $opt1; ?>" onclick="radioclick(this.value, <?php echo $question_no ?>);"
  <?php if($ans==$opt2)
	{
		echo "ehecked";
	}
	
	?>>
	<?php 
	if(strpos($opt2, 'images/')!=false)
		{
			 ?>
			 <img src="admin/<?php echo $opt2; ?>" height="30" width="30" >
			 <?php
		}
		else
		{
			echo $opt2;
		}

	?>
 
  <input type="radio" id="r1" name="gender" value="<?php echo $opt3; ?>" onclick="radioclick(this.value, <?php echo $question_no ?>);"
<?php if($ans==$opt3)
	{
		echo "ehecked";
	}
	
	?>>
	<?php 
	if(strpos($opt3, 'images/')!=false)
		{
			 ?>
			 <img src="admin/<?php echo $opt3; ?>" height="30" width="30" >
			 <?php
		}
		else
		{
			echo $opt3;
		}

	?>

<input type="radio" id="r1" name="gender" value="<?php echo $opt4; ?>" onclick="radioclick(this.value, <?php echo $question_no ?>);"
<?php if($ans==$opt4)
	{
		echo "ehecked";
	}
	
	?>>
	<?php 
	if(strpos($opt4, 'images/')!=false)
		{
			 ?>
			 <img src="admin/<?php echo $opt4; ?>" height="30" width="30" >
			 <?php
		}
		else
		{
			echo $opt4;
		}

	?>
	<?php

}
?>