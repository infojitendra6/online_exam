
   <?php
include "admin_header.php";
include "../connection.php";
/* $exam_category='';
$res=mysqli_query($conn, "select * from exam_category where id=$id");
while($row=mysqli_fetch_array($res))
{
	$exam_category=$row["category"];
	$exam_time=$row["exam_time"];
} */
?>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Dash board</strong>
                            </div>
							
                             <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Exam Name</th>
                                            <th scope="col">Exam Time</th>
                                            <th scope="col">Select</th>
											
                                            
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
											<td><a href="add_edit_question.php?id=<?php echo$row["id"]; ?>"> Select </a></td>
											
                                        </tr>
										<?php
									  }
									  ?>
                                    </tbody>
                                </table>
                           
						   </div>
							
							
							
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->

                    
	
										

                                            

                                          


												
												
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
<?php
include "admin_footer.php";
?>