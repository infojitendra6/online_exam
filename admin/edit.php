
   <?php
include "admin_header.php";
include "../connection.php";

$id=$_GET["id"];
$res=mysqli_query($conn, "select * from exam_category where id=$id");
while($row=mysqli_fetch_array($res))
{
	$exam_category=$row["category"];
	$exam_time=$row["exam_time"];
}
?>

        <div class="col-lg-6">
                        <div class="card">
						  <form action="" method="post" name="form1">
                            <div class="card-header"><strong>Edit Exam </strong></div>
                            <div class="card-body card-block">
							
							
                                <div class="form-group"><label for="company" class=" form-control-label">New Exam category</label><input type="text" name="examname" placeholder="New Exam category" value="<?php echo $exam_category ; ?>" class="form-control">
								</div>
                                    <div class="form-group"><label for="vat" class=" form-control-label">Exam time</label><input type="text" name="examtime" placeholder="Exam time" value="<?php echo $exam_time ; ?>" class="form-control"></div>
                                         <button type="submit" name="submit1" class="btn btn-success btn-flat m-b-30 m-t-30">Update Exam</button>
													
                                                    
													
													</div>
													</form>
                                                </div>
                                            </div>
									
<?php
 if(isset($_POST["submit1"]))
 {
 mysqli_query($conn, "update exam_category set category='$_POST[examname]', exam_time='$_POST[examtime]' where id=$id ");
 
 ?>	   
<script type="text/javascript">
	
	window.location="exam_category.php";
</script> 
<?php
 }
 ?>											
<?php
include "admin_footer.php";
?>