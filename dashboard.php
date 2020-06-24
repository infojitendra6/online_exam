<?php
session_start();
include "header.php";
include "connection.php";

?>


        <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

            <div class="col-lg-6 col-lg-push-3" style=" background-color: white;">
			<br>
			<div class="row">
			
			<div class="col-lg-2 col-lg-push-10">
			<div id="c" style="float:left">0</div>
			<div id="current_que" style="float:left">0</div>
			<div  style="float:left">/</div>
			<div id="total_que" style="float:left">0</div>
			<div id="jk" style="float:left"></div>
			</div>
			<div class="row" style="margin-top:30px"> 
            <div class="row" > 
            <div   id="load_questions">
			
			</div>
 <div  style=" background-color: white;" id="demo">

 <div id="demo2"></div>
 <div id="demo1"></div>
			</div>			
			</div>
			</div>
			<div class="row" style="margin-top:10px"> 
           
            <div class="col-lg-10 col-lg-push-1" style="min-height: 50px;" >
			<div class="col-lg-10 text-center" >
			<input type="button" class="btn btn-warning" value="previous" onclick="load_previous();">
			<input type="button" class="btn btn-warning" value="Next" onclick="load_next();" >
			</div>
			     
			</div>
			</div>
			
			</div>
			</div>
			

        </div>
		<script type="text/javascript">

		
   var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("jk").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "forajax/load_total_que.php", true);
  xhttp.send();
   </script>
   <script type="text/javascript">

function radioclick(radiovalue, questionno)
{
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo2").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "forajax/save_answer_in_session.php?questionno=" +questionno+ "&value1=" +radiovalue, true);
  xhttp.send();
}
   </script>
		<script>
		var questionno="1";
	loadDoc(questionno);
function loadDoc(questionno) {
	
	document.getElementById("current_que").innerHTML=questionno;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
		
      document.getElementById("demo1").innerHTML =
      this.responseText;
			 
    }
  };
  xhttp.open("GET", "forajax/load_questions.php?questionno="+questionno, true);
  xhttp.send();
}


function load_previous()
	{
		if(questionno=="1")
		{
		loadDoc(questionno);
		}
		else
		{
		questionno=eval(questionno)-1;
		loadDoc(questionno);
		}
	}
	function load_next()
	{
		questionno=eval(questionno)+1;
		loadDoc(questionno);
	}
</script>
		
<?php
include "footer.php";
?>
