
   <?php
   session_start();
include "../connection.php";
include "admin_header.php";
?>
	
        <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

            <div class="col-lg-6 col-lg-push-3" style="background-color: white;"></div>
                 <h1>Old Result</h1>
				 <?php
				 $count=0;
				 $res=mysqli_query($conn, "select * from exam_result order by id desc");
				$count=mysqli_num_rows($res);
				if($count==0)
				{

					?>
					<h1> Result Not found </h1>
					<?php
				}
				else
				{
					echo "<table class='table table-bordered'>";
					echo "<tr style='background-color:#006df0'>";
					echo "<th>"; echo "username"; echo "</th>";
					echo "<th>"; echo "exam type"; echo "</th>";
					echo "<th>"; echo "total question"; echo "</th>";
					echo "<th>"; echo "currect answer"; echo "</th>";
					echo "<th>"; echo "wrong answer"; echo "</th>";
					echo "<th>"; echo "exam time"; echo "</th>";
					echo "</tr>";
					while($row=mysqli_fetch_array($res))
					{
					echo "<tr>";
					echo "<td>"; echo $row["username"]; echo "</td>";
					echo "<td>"; echo $row["exam_type"]; echo "</td>";
					echo "<td>"; echo $row["total_question"]; echo "</td>";
					echo "<td>"; echo $row["current_answer"]; echo "</td>";
					echo "<td>"; echo $row["worng_answer"]; echo "</td>";
					echo "<td>"; echo $row["exam_time"]; echo "</td>";
					echo "</tr>";	
					}
					echo "</table>";
				}
				 ?>
        </div>

						
									
<?php
include "admin_footer.php";
?>