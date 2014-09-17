<html>
<head>
	<meta charset="utf-8">
  
	
	
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/button.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">


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
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li><a href="#">Forts</a></li>
				<li><a href="#">Hill Stations</a></li>            
            <li><a href="#">Beaches</a></li>
				<li class="divider"></li>            
            <li><a href="#">Holy Places</a></li>
            
            <li><a href="#">Museum & Parks </a></li>
            
            
          </ul>
        </li>
 
        <li><a ></a></li><li><a ></a></li><li><a ></a></li><li><a ></a></li><li><a ></a></li><li><a ></a></li><li><a ></a></li>        
			<li><a ></a></li><li><a ></a></li>
			<li><a ></a></li>        
        <li class="active"><a href="#">Sign In / Sign Up</a></li>  			
        
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

<!=================================Sign Up===============================================> 
<br>

<?php

$firstName=$lastName=$add=$passIn=$passConf=$gen=$userName="";
$ErrfirstName=$ErrlastName=$Erradd=$ErrpassIn=$ErrpassConf=$Errgen=$ErruserName="";
$passFlag=0;
$con;
$errFlag=0;
$errtemp1=$succtemp1="";

function test_input($data)
	{
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['signup']="signup")
{
	if(empty($_POST['firstName']))
	{
		$ErrfirstName="First Name Field is Empty";
		
	}	
	
	else 
	{
		$firstName=test_input($_POST['firstName']);
		$errFlag++;	
	}	
	
	if(empty($_POST['lastName']))
	{
		$ErrlastName="Last Name Field is Empty";
			
	}
	else 
	{
		$lastName=test_input($_POST['lastName']);
		$errFlag++;
	}
	
	if(empty($_POST['add']))
	{
		$Erradd="Address Field is Empty";
	}	
	else 
	{
		$add=test_input($_POST['add']);
		$errFlag++;
	}

	if(empty($_POST['passIn']))
	{
		$ErrpassIn="Password Field cannot be Empty";
		
	}
	else 
	{
		$passIn=test_input($_POST['passIn']);
		$errFlag++;
	}
	
	if(empty($_POST['passConf']))
	{
		$ErrpassConf="Confirm Password Field cannot be Empty";
		
	}
	else 
	{
		$passConf=test_input($_POST['passConf']);	
		$errFlag++;
	}

	if(empty($_POST['signupUserName']))
	{
		$ErruserName="User Name cannot be Empty";
	}	
	else 
	{
		$userName=test_input($_POST['signupUserName']);
		$errFlag++;
	}

	if(empty($_POST['gender']))
	{
		$Errgen="Gender Field is not Selected";
		
	}
	else 
	{
		$gen=test_input($_POST['gender']);
		$errFlag++;
	}	
	
	if((($_POST['passIn'])==($_POST['passConf']))  && $_POST['passIn']!="")
	{
				$passFlag=1;
				$ErrPassConf="Password Match";
				$passIn=$_POST['passIn'];
				if($_POST['passIn']=="") 
				{
					$ErrPassConf="Password Cannot be Empty";
				}
	}	
	else 
	{
				
				$ErrPassConf="Password Do not Match";
				if($_POST['passIn']=="") 
				{
					$ErrPassConf="Password Cannot be Empty";
				}
	}	
	//echo $errFlag;
	
	
}
	
	if($passFlag==1)
	{
		$con=mysqli_connect("localhost","root","","project_cnl");
		if(mysqli_connect_errno()) 
		{
			//echo "Cannot connect to the Database";	
		}	
		else 
		{
			//echo "Successfully Connected to Database";
		}
			
		if($errFlag==7)
		{
			$sq="INSERT into user values ('$firstName','$lastName','$add','$gen','$userName','$passIn')";		
		if(mysqli_query($con,$sq))
			{
				echo "Successfully inserted";
				$msg="Your Account has been created successfully";
				flush();
				header("Location:http://localhost/project1/userHome.php");			
				die();
			}
			else 
			{
								
				//echo "Cannot insert";
				die('Error:  '. mysqli_error($con));
				
			}
			
			mysqli_close($con);
			
			
		}
		
	}		

?>

<form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="row">
	
  			<div class="row" >
   	 		<div class="col-md-2 col-md-offset-2"><legend  class="control-label">Sign Up</legend></div>
   	 		<div class="col-md-2 col-md-offset-2"><legend  class="control-label">Sign In</legend></div>
   		</div>
  
	  		<div class="row" style="padding: 7px;">
   			 <div class="col-md-1 col-md-offset-1"><label class="control-label"  >Name</label></div>
   			 <div class="col-md-2"><input  class="form-control" type="text"  placeholder="First Name" name="firstName"><span  class="text-danger"><?php echo $ErrfirstName;?></span></div>
   			 <div class="col-md-2 "><input class="form-control" type="text"  placeholder="Last Name" name="lastName"><span  class="text-danger"><?php echo $ErrlastName;?></span></div>    
  		  	
  		  		<div class="col-md-1 col-md-offset-1"><label class="control-label" >Username</label></div>
    			<div class="col-md-2"><input class="form-control" type="text"  placeholder="Username" name="signinUserName"></div>  		  	
  		  	</div>
  
  			<div class="row" style="padding: 7px;">
  	 			<div class="col-md-1 col-md-offset-1 "><label class="control-label" >Address</label></div>
    			<div class="col-md-4  col-xs-4 "><input type="text" class="form-control"  placeholder="Current Address" name="add"><span  class="text-danger"><?php echo $Erradd;?></span></div>
  			
  				<div class="col-md-1 col-md-offset-1"><label class="control-label" for="inputPassword">Password</label></div>
    			<div class="col-md-2"><input class="form-control" type="password"  placeholder="Enter password" name="signinPass"></div>
  			</div>

			<div class="row" style="top-padding: 7px;left-padding: 7px;right-padding: 7px;">
    			<div class="col-md-1 col-md-offset-1"><label class="control-label" >Gender</label></div>
    			<div class="col-md-1 "><input  type="radio" name="gender" value="male"><span class="text-muted" >Male</span></div>
    			<div class="col-md-1 "><input  type="radio" name="gender" value="female"><span class="text-muted">Female</span></div>
   			
   				<div class="col-md-3 "><span  class="text-danger"><?php echo $Errgen;?></span></div> 


   			<div class="col-md-3 "> 
      		<button type="submit" class="btn btn-default" name="signin">Sign In</button><?php echo $errtemp1;?><?php echo $succtemp1;?>
    			</div>
   		
   		</div>
  			<!--div class="row" >
  			
  			 
   			<div class="col-md-4 col-md-offset-2"> 
      	<?php echo $Errgen;?>
    			</div>
  			</div-->

			<div class="row" style="padding: 7px;">
   	 		<div class="col-md-1 col-md-offset-1"><label class="control-label" >Username</label></div>
    			<div class="col-md-2"><input class="form-control" type="text"  placeholder="Username" name="signupUserName"> <span  class="text-danger"><?php echo $ErruserName;?></span></div>
   		</div>
    
    		<div class="row" style="padding: 7px;">
    			<div class="col-md-1 col-md-offset-1"><label class="control-label" for="inputPassword">Password</label></div>
    			<div class="col-md-2"><input class="form-control" type="password"  placeholder="Choose ur password" name="passIn"><span  class="text-danger"><?php echo $ErrpassIn;?></span></div>
  			</div>

			<div class="row" style="padding: 7px;">
    			<div class="col-md-1 col-md-offset-1"><label class="control-label"  for="inputPassword">Confirm Password</label></div>
    			<div class="col-md-2"><input class="form-control" type="password"  placeholder="Retype ur password" name="passConf"><span  class="text-danger"><?php echo $ErrpassConf;?></span></div>
  			</div>

		  <div class="row" style="padding: 7px;">
    			<div class="col-md-2 col-md-offset-2"> 
      		<button type="submit" class="btn btn-default" name="signup">Sign Up</button>
    			</div>
 		 </div>
 	
 </div>
 
</form>

<!================================================================================>
 <div id="footer1" style=" background-color: #d5d5d5; width: 100%;">
 	<div class="row" style="height: 40px">
	   <div class="col-md-2 col-md-offset-1"><a href="contactus.php" ><h4><span class="glyphicon glyphicon-envelope"></span>  Contact Us</h4></a></div>
	   <div class="col-md-2 "><a href="aboutus.php" ><h4><span class="glyphicon glyphicon-user"></span>  About Us</h4></a></div>
	   <div class="col-md-3 "><h5><span class="glyphicon glyphicon-copyright-mark"></span>  Copyrights :Aniket Bino Tushar Gaurav</h5></div>
		<div class="col-md-2 "><a href="" ><h4><img src="faceboo_icon.png" >  Facebook</h4></a></div>
		<div class="col-md-2 "><a href="" ><h4><img  src="twitter_icon.png" >  Twitter</h4></a></div>  
   </div>
 </div>
 
 <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	<script src="js/collapse.js"></script>
	<script src="js/dropdown.js"></script>
</body>
</html>