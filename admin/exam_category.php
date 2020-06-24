
   <?php
include "admin_header.php";
include "../connection.php";
?>

        <div class="col-lg-6">
                        <div class="card">
						  <form action="" method="post" name="form1">
                            <div class="card-header"><strong>add</strong><small> Exam</small></div>
                            <div class="card-body card-block">
							
							
                                <div class="form-group"><label for="company" class=" form-control-label">New Exam category</label><input type="text" name="examname" placeholder="New Exam category" class="form-control">
								</div>
                                    <div class="form-group"><label for="vat" class=" form-control-label">Exam time</label><input type="text" name="examtime" placeholder="Exam time" class="form-control"></div>
                                         <button type="submit" name="submit1" class="btn btn-success btn-flat m-b-30 m-t-30">add exam</button>
													
                                                    
													
													</div>
													</form>
                                                </div>
                                            </div>
<div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Add Exam</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Exam Name</th>
                                            <th scope="col">Exam Time</th>
                                            <th scope="col">Edit</th>
											<th scope="col">Delete</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$count=0;
                                       $res=mysqli_query($conn, "select *from exam_category") or die(mysqli_error($conn));
	                                  while($row=mysqli_fetch_array($res))
									  {
										$count=$count+1;  
									  										  
	                                     ?>
                                        <tr>
                                            <th scope="row"><?php echo $count; ?></th>
                                            <td ><?php echo $row["category"]; ?></td>
                                            <td><?php echo $row["exam_time"]; ?></td>
											<td><a href="edit.php?id=<?php echo$row["id"]; ?>"> Edit </a></td>
											<td><a href="delete.php?id=<?php echo$row["id"]; ?>"> Delete </a></td>
                                        </tr>
										<?php
									  }
									  ?>
                                    </tbody>
                                </table>
                            </div>
							
							
							
                        </div>
                    </div>

		
<?php
 if(isset($_POST["submit1"]))
 {
 mysqli_query($conn, "insert into exam_category values(NULL, '$_POST[examname]', '$_POST[examtime]')");
 
 ?>	   
<script type="text/javascript">
	alert("exam added succesfully");
	window.location.herf=window.location.herf;
</script> 
<?php
 }
 ?>											
<?php
include "admin_footer.php";
?>