<?php
include "../connection.php";
$id=$_GET["id"];
 $id1=$_GET["id1"];
mysqli_query($conn, "delete from questions where id=$id");
?>
<script type="text/javascript">
alert("deleted succesfully");
	window.location="add_edit_question.php?id=<?php echo $id1 ?>";
</script> 