<?php
include "../connection.php";
$id=$_GET["id"];
mysqli_query($conn, "delete from exam_category where id=$id");
?>
<script type="text/javascript">
alert("deleted succesfully");
	window.location="exam_category.php";
</script> 