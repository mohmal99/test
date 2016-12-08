<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">




function shows(){
	
$.ajax({
    			type: "POST",
   				 url: 'table.php',
   				
 			    success: function(data) {
          
      		    $('#show').html(data);
				
				
     }       
  			 });
			 
}



function checks(x){
	
$.ajax({
    			type: "GET",
   				 url: 'add.php',
   				data:{counts:x},
 			    success: function(data) {
          
      		    $('#a').html(data);
				
				
     }       
  			 });
			 
}




</script>

<body>

<nav class="navbar navbar-default">

<div class="container">

				<div class="navbar-header">

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collpase">

						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>

					</button>

					
				</div>


				

			  	<div class="collapse navbar-collapse" id="navbar-collpase">
					<ul class="nav navbar-nav ">

						
						


					</ul>
					<ul class="nav navbar-nav navbar-right">

        				<li><a href="#"><div id="a"></div><big><span class="glyphicon glyphicon-bell" style="color:#580000"></span></big></a></li>
        				
        			</ul>
				</div>
		</div>
	</nav>


	<form method="post">
		<center><input type="submit" value="Press" class="btn btn-primary" name="press"></center><br><br><br>
		<center><input type="button" value="Show" class="btn btn-primary" onClick="shows();"></center><br><br><br>
		<center><input type="button" value="ADD" class="btn btn-primary" onClick="checks(<?php echo rand(1, 10);?>);"></center><br><br><br>
	</form>

<?php 
	if(isset($_POST['press'])){
		echo "Press";
	}
?>
<div id="show">


</div>



</body>
</html>

















