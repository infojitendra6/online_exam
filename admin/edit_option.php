
   <?php
include "admin_header.php";
include "../connection.php";
$id=$_GET["id"];
 $id1=$_GET["id1"];
 $question="";
 $opt1="";
 $opt2="";
 $opt3="";
 $opt4="";
 $answer="";
$res=mysqli_query($conn, "select * from questions where id=$id");
while($row=mysqli_fetch_array($res))
{
	$question=$row["question"];
 $opt1=$row["opt1"];
 $opt2=$row["opt2"];
 $opt3=$row["opt3"];
 $opt4=$row["opt4"];
 $answer=$row["answer"];
	
} 
?>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Edit Option</strong>
                            </div>
                           <form action="" method="post" name="form1" >
                            <div class="card-body">
                                 <div class="card-body card-block">
							
							
                                <div class="form-group"><label for="company" class=" form-control-label"> Update Question </label><input type="text" name="question" placeholder=" add question " value="<?php echo $question ; ?>"  class="form-control">
								</div>
								
								 <div class="form-group"><label for="company" class=" form-control-label"> Add opt1 </label><input type="text" name="opt1" placeholder="Add opt1" value="<?php echo $opt1 ; ?>"  class="form-control">
								</div>
								 <div class="form-group"><label for="company" class=" form-control-label"> Add opt1 </label><input type="text" name="opt2" placeholder="Add opt1" value="<?php echo $opt2 ; ?>"  class="form-control">
								</div>
								 <div class="form-group"><label for="company" class=" form-control-label"> Add opt1 </label><input type="text" name="opt3" placeholder="Add opt1" value="<?php echo $opt3 ; ?>"   class="form-control">
								</div>
								 <div class="form-group"><label for="company" class=" form-control-label"> Add opt1 </label><input type="text" name="opt4" placeholder="Add opt1" value="<?php echo $opt4 ; ?>"  class="form-control">
								</div>
								<div class="form-group"><label for="company" class=" form-control-label"> Add answer </label><input type="text" name="answer" placeholder="answer" value="<?php echo $answer ; ?>"   class="form-control">
								</div>
                                    

										<button type="submit" name="submit1" class="btn btn-success btn-flat m-b-30 m-t-30">Update Question</button>
													
                                                    
													
													</div>

                            </div>
							</form>
							
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->

                    
	
										

                                            

                                          


												
												
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
				<?php
 if(isset($_POST["submit1"]))
 {
 mysqli_query($conn, "update questions set question='$_POST[question]', opt1='$_POST[opt1]', opt2='$_POST[opt2]', opt3='$_POST[opt3]', opt4='$_POST[opt4]', answer='$_POST[answer]' where id=$id");
 
 ?>	   
<script type="text/javascript">
	
	window.location="add_edit_question.php?id=<?php echo $id1 ?>";
</script> 
<?php
 }
 ?>						
									
<?php
include "admin_footer.php";
?>