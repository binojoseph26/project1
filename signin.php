<html>
<head>
	<meta charset="utf-8">
    <!meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	
	
	
	<title>Smart Trip</title>	
	<!link href="css1/a.css" rel="stylesheet">
	<!link href="css1/a2.css" rel="stylesheet">
	<!script src="js1/javascript.js"></script>


<!--=====================================================================================================-->

<style type="text/css">
#carousel {
			
        width: 1000px;
        height: 400px;
        overflow:hidden;
    }

    #carousel ul {
        width: 2000px;
        padding: 0;
        margin: 0;
    }

    #carousel ul li {
        width:1000px;
        text-align: center;
        height: 400px;
        list-style: none;
        float:  left;
    }
   .a
   {
		position: fixed;
		top: 190px;
		left: 170px;  
   }
   
   <!------------------------------------------------>
   
#footer1
{
	position: fixed;
	top: 100px;
	left: 50px;
	width: 100%; 
}
.container {
  
  max-width: 680px;
  padding: 0 15px;
}
.container .text-muted {
  margin: 20px 0;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js" type="text/javascript"><!--mce:0--></script>
<script type="text/javascript">
  	$(document).ready(function(){

		$("#carousel ul").each(function(){
			// Set the interval to be 10 seconds
			var t = setInterval(function(){
				$("#carousel ul").animate({marginLeft:-1000},1000,function(){
					// This code runs after the animation completes
					$(this).find("li:last").after($(this).find("li:first"));
					// Now we've taken out the left-most list item, reset the margin
					$(this).css({marginLeft:0});
				})
			},4000);
		});
	});
  </script>
<!--=====================================================================================================-->
	</head>




<body style="background-image:url('backgroung.jpg') ";>
	<div class="page-header">
		<h1>Smart Trip <small> Holidays for FUN...</small></h1>
	</div>
	

	
	<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"> Smart Trip </span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav">
        <li ><a href="home.php">Home</a></li>
			<li><a href="#">Destination</a></li>        
        <li><a href="#">Travel Booking</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Most Visited <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Alibagh</a></li>
            <li><a href="#">Mahabaleshwar</a></li>
            <li><a href="#">Ganpati Pule</a></li>
            <li class="divider"></li>
            <li><a href="#">Forts </a></li>
            <li class="divider"></li>
            <li><a href="#">Hill Stations</a></li>
          </ul>
        </li>
 
        <li><a ></a></li><li><a ></a></li><li><a ></a></li><li><a ></a></li><li><a ></a></li><li><a ></a></li><li><a ></a></li>        
			<li><a ></a></li><li><a ></a></li>
			<li class="active"><a href="#" >Sign In</a></li>        
        <li ><a href="signup.php">Sign Up</a></li>  			
        <li><a ></a></li>
  			<form class="navbar-form navbar-left " role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Go</button>
      </form>    
         
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

 

<!================================================================================>
 <div id="footer1" style="position: fixed; top: 615px; background-color: #d5d5d5; width: 100%;">
 	<div class="container">
	   <p class="text-muted">Place sticky footer content here.</p>
   </div>
 </div>
</body>
</html>