 <?php
include "admin_header.php";
include "../connection.php";
 $exam_category='';
 $id=$_GET["id"];

$res=mysqli_query($conn, "select * from exam_category where id=$id");
while($row=mysqli_fetch_array($res))
{
	$exam_category=$row["category"];
	
} 
?>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Add new question inside <?php echo $exam_category; ?></strong>
                            </div>
							<form action="" method="post" name="form1" enctype="multipart/form-data">
                            <div class="card-body">
                                 <div class="card-body card-block">
							
							
                                <div class="form-group"><label for="company" class=" form-control-label"> Add Question </label><input type="text" name="question" placeholder=" add question "  class="form-control">
								</div>
								
								 <div class="form-group"><label for="company" class=" form-control-label"> Add opt1 </label><input type="text" name="opt1" placeholder="Add opt1"  class="form-control">
								</div>
								 <div class="form-group"><label for="company" class=" form-control-label"> Add opt1 </label><input type="text" name="opt2" placeholder="Add opt1"  class="form-control">
								</div>
								 <div class="form-group"><label for="company" class=" form-control-label"> Add opt1 </label><input type="text" name="opt3" placeholder="Add opt1"  class="form-control">
								</div>
								 <div class="form-group"><label for="company" class=" form-control-label"> Add opt1 </label><input type="text" name="opt4" placeholder="Add opt1"  class="form-control">
								</div>
								<div class="form-group"><label for="company" class=" form-control-label"> Add answer </label><input type="text" name="answer" placeholder="answer"  class="form-control">
								</div>
                                    

										<button type="submit" name="submit1" class="btn btn-success btn-flat m-b-30 m-t-30">Add Question</button>
													
                                                    
													
													</div>

                            </div>
							
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->
                      <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Add new question inside <?php echo $exam_category; ?></strong>
                            </div>
							
                            <div class="card-body">
                                 <div class="card-body card-block">
							
							
                                <div class="form-group"><label for="company" class=" form-control-label"> Add Question </label><input type="text" name="fquestion" placeholder=" add question "  class="form-control">
								</div>
								
								 <div class="form-group"><label for="company" class=" form-control-label"> Add opt1 </label><input type="file" name="fopt1" class="form-control">
								</div>
								 <div class="form-group"><label for="company" class=" form-control-label"> Add opt1 </label><input type="file" name="fopt2"  class="form-control">
								</div>
								 <div class="form-group"><label for="company" class=" form-control-label"> Add opt1 </label><input type="file" name="fopt3"  class="form-control">
								</div>
								 <div class="form-group"><label for="company" class=" form-control-label"> Add opt1 </label><input type="file" name="fopt4"  class="form-control">
								</div>
								<div class="form-group"><label for="company" class=" form-control-label"> Add answer </label><input type="file" name="fanswer"  class="form-control">
								</div>
                                    

										<button type="submit" name="submit2" class="btn btn-success btn-flat m-b-30 m-t-30">Add Question</button>
													
                                                    
													
													</div>

                            </div>
							
							
							</form>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->

                    
	
										

                                            

                                          


												
												
                                            </div>
                                       
  <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Add new question inside <?php echo $exam_category; ?></strong>
                            </div>
							   <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">Question6</th>
                                            <th scope="col">Opt1</th>
                                            <th scope="col">Opt2</th>
											 <th scope="col">Opt3</th>
                                            <th scope="col">Opt4</th>
											<th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
											
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									
                                       $res=mysqli_query($conn, "select *from questions where category='$exam_category' order by question_no asc") or die(mysqli_error($conn));
	                                  while($row=mysqli_fetch_array($res))
									  {									  
	                                    echo "<tr>";
										echo "<td>"; echo $row["question_no"]; echo "</td>";
										echo "<td>"; echo $row["question"]; echo "</td>";
										echo "<td>";
										if(strpos($row["opt1"],'opt_images/')!=false)
										{
											?>
											<img src="<?php echo $row["opt1"];?>" height="50" width="50">
											<?php
										}
										else
										{
											echo $row["opt1"];
										}
										echo "</td>";
										echo "<td>";
										if(strpos($row["opt2"],'opt_images/')!=false)
										{
											?>
											<img src="<?php echo $row["opt2"];?>" height="50" width="50">
											<?php
										}
										else
										{
											echo $row["opt2"];
										}
										echo "</td>";
										echo "<td>";
										if(strpos($row["opt3"],'opt_images/')!=false)
										{
											?>
											<img src="<?php echo $row["opt3"];?>" height="50" width="50">
											<?php
										}
										else
										{
											echo $row["opt3"];
										}
										echo "</td>";
										echo "<td>";
										if(strpos($row["opt4"],'opt_images/')!=false)
										{
											?>
											<img src="<?php echo $row["opt4"];?>" height="50" width="50">
											<?php
										}
										else
										{
											echo $row["opt4"];
										}
										echo "</td>";
										echo "<td>"; 
										if(strpos($row["opt4"],'opt_images/')!=false)
										{
											?>
											<a href="edit_option_images.php?id=<?php echo$row["id"]; ?>&id1=<?php echo $id;?>"> Edit</a>
											<?php
										}
										else
										{
											?>
											<a href="edit_option.php?id=<?php echo$row["id"]; ?>&id1=<?php echo $id;?>"> Edit</a>
											<?php
										}

										echo "</td>";
										
										echo "<td>"; 
											?>
											<a href="delete_option.php?id=<?php echo$row["id"]; ?>&id1=<?php echo $id;?>"> Delete</a>
											<?php
										echo "</td>";
										
										 echo "<tr>";
									  }
									  ?>
                                    </tbody>
                                </table>
                           
							
							
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->
                     
					
					
                    <!--/.col-->

                    
	
										

                                            

                                          


												
												
                                            </div>
                                       


									   </div><!-- .animated -->
                                    </div><!-- .content -->
									
									<?php
 if(isset($_POST["submit1"]))
 {
	 echo "jitendra";
	 $loop=0;
	 $count=0;
 $res=mysqli_query($conn, "select * from questions where category='$exam_category' order by id asc");
 $count=mysqli_num_rows($res);
if($count==0)
{
	
}
else
{
	while($row=mysqli_fetch_array($res))
{
$loop=$loop+1;
	 mysqli_query($conn, "update questions set question_no='$loop' where id=$row[id]");
 
} 
} 
$loop=$loop+1;
mysqli_query($conn, "insert into questions values(NULL, '$loop', '$_POST[question]', '$_POST[opt1]', '$_POST[opt2]', '$_POST[opt3]', '$_POST[opt4]', '$_POST[answer]', '$exam_category')");
 
 
 }
 
 if(isset($_POST["submit2"]))
 {
	 echo "jitendra";
	 $loop=0;
	 $count=0;
 $res=mysqli_query($conn, "select * from questions where category='$exam_category' order by id asc");
 $count=mysqli_num_rows($res);
if($count==0)
{
	
}
else
{
	while($row=mysqli_fetch_array($res))
{
$loop=$loop+1;
	 mysqli_query($conn, "update questions set question_no='$loop' where id=$row[id]");
 
} 
} 
$loop=$loop+1;
$tm=md5(time());

$fnm1=$_FILES["fopt1"]["name"];
$dst1="./opt_images/".$tm.$fnm1;
$dst_db1="./opt_images/".$tm.$fnm1;
move_uploaded_file($_FILES["fopt1"]["tmp_name"], $dst1);


$fnm2=$_FILES["fopt2"]["name"];
$dst2="./opt_images/".$tm.$fnm2;
$dst_db2="./opt_images/".$tm.$fnm2;
move_uploaded_file($_FILES["fopt2"]["tmp_name"], $dst2);


$fnm3=$_FILES["fopt3"]["name"];
$dst3="./opt_images/".$tm.$fnm3;
$dst_db3="./opt_images/".$tm.$fnm3;
move_uploaded_file($_FILES["fopt3"]["tmp_name"], $dst3);


$fnm4=$_FILES["fopt4"]["name"];
$dst4="./opt_images/".$tm.$fnm4;
$dst_db4="./opt_images/".$tm.$fnm4;
move_uploaded_file($_FILES["fopt4"]["tmp_name"], $dst4);

$fnm5=$_FILES["fanswer"]["name"];
$dst5="./opt_images/".$tm.$fnm5;
$dst_db5="./opt_images/".$tm.$fnm5;
move_uploaded_file($_FILES["fanswer"]["tmp_name"], $dst5);


mysqli_query($conn, "insert into questions values(NULL, '$loop', '$_POST[fquestion]', '$dst_db1', '$dst_db2', '$dst_db3', '$dst_db4', '$dst_db5', '$exam_category')");
 
 
 }
 ?>	
<?php
include "admin_footer.php";
?>