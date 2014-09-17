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




<body>
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
        <li><a href="home.php">Home</a></li>
			<li ><a href="destination.php">Destination</a></li>        
        <li><a href="booking.php">Travel Booking</a></li>
        
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
			<li ><a href="signup.php">Sign In / Sign Up</a></li>
			
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


<h3 class="text-success"> Contact Us</h3>

<table width="626" height="100%" border="0" cellpadding="0" cellspacing="0" background="/MTDC/html/Maharashtratourism/images/mainPageIms/back_curve.jpg"
      ID="Table2">
      <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
            <tr align="left" valign="top">
              <td height="100%"><!-- InstanceBeginEditable name="Generalpages" -->
                <table width="100%" border="0" cellspacing="3" cellpadding="3">
                  <tr>
                    <td align="left" valign="top" style="TEXT-ALIGN: center"><img src="/mtdc/HTML/MaharashtraTourism/images/Titles/TITLES_contact.gif" alt="Contact Us"
                        width="357" height="25"></td>
                  </tr>
                  <tr>
                    <td valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="5">
                        <!--<tr>
                          <td colspan="2" align="left" valign="top" class="mediumBold" style="TEXT-ALIGN:center">For 
                            Tourists Information</td>
                        </tr>
                        <tr>
                          <td colspan="2" align="left" valign="top">Call Toll Free No.Between 7.00 a.m to 
                            11.00 p.m. --- 1800 - 233 -&nbsp;5050
                          </td>
                        </tr>-->
                        <tr>
                          <td colspan="2" align="left" valign="top" class="mediumBold" style="TEXT-ALIGN:center">Maharashtra 
                            Tourism Development Corporation</td>
                        </tr>
                        <!--<tr>
                          <td colspan="2" align="left" valign="top" style="TEXT-ALIGN:center">
                          <img src="../../Images/New.gif" /> <font color="red"><b>MTDC's office at Express Tower has been shifted to below given address.</b></font> <img src="../../Images/New.gif" />
                           </td>
                        </tr>-->
                        <tr>
                          <td align="left" valign="top" colspan="2"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc" ID="Table4">
                              <tr>
                                <td align="left" valign="top"><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff" ID="Table5">
                                    <tr>
                                      <td align="left" valign="top"><span class="highlightedtext"><strong>OFFICE ADDRESS<img src="../../Images/New.gif" /></strong></span><strong>
                                          :</strong><br>
                                        <font color="blue" size="2"><b>C.D.O. Hutments, Opp. L.I.C.(Yogakshema) Building, Madame Cama Road, Mumbai-400 020.<br/>  <br />
                                        <table border="1" bordercolor="black" width="80%">
                                        <tr>
                                        <td>
                                          <b>For Information related to bookings</b>

                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                        <font size="2" color="blue"><b>Toll Free No: 1800 - 229930<br />
                                        Reservation Office No: 022 - 22845678</b></font>
                                        </td>
                                        </tr>
                                        </table>
                                      
                                        <a href="mailto:reservation@maharashtratourism.gov.in"><font size="2" color="blue">E-mail: reservation@maharashtratourism.gov.in</font></a>
                                          <br>
                                          Website: www.maharashtratourism.gov.in</b></font>
                                        <br />
                                        <table border="1" bordercolor="black" width="80%">
                                        <tr>
                                        <td>
                                          <b>Head Office</b>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td><font size="2" color="blue"><b>
                                          Tel:&nbsp; +91 22 2204 4040&nbsp;&nbsp;<br> Fax: +91 22 2202 4521, +91 22 2285 2182</b></font>
                                        </td>
                                        </tr>
                                        </table>
                                        
                                        <br />
                                        
                                        <!--Official email address commented as per the instruction from Dhakne Sir 
                                          E-mail: info@maharashtratourism.gov.in-->
                                          
                                          
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <!--<td align="left" valign="top">
                            <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td align="left" valign="top">
                                  <table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td height="105" align="left" valign="top"><span class="highlightedtext"><strong>MAIN 
                                            RESERVATION DIVISION</strong></span><strong> :</strong><br>
                                        <span class="text">Opp. L.I.C. Building, Madame Cama Road, Mumbai-400 020.<br>
                                          Tel:&nbsp; +91 22 2284 5678 (5 Lines)<br>
                                          Mobile: 20644489 / 93<br>
                                          Fax: +91 22 2285 2182.</span>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>-->
                        </tr>
                        <tr align="left" valign="top">
                          <td colspan="2" align="left" valign="top" class="medium" style="TEXT-ALIGN:center">Regional 
                            Offices</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" style="WIDTH: 285px"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td align="left" valign="top"><span class="highlightedtext"><strong>Aurangabad</strong></span><br>
                                        <span class="text">Holiday Resort, Station Road,
                                          <br>
                                          Aurangabad-431 001.<br>
                                          Tel: (0240) 2343169
                                          <br>
                                          Telefax: 2331198, 2334259 </span>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td align="left" valign="top"><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td align="left" valign="top"><span class="highlightedtext"><strong>Amravati</strong></span><br>
                                        Barack No 3, near Anndhanya office,<br>
                                        Collector Office, Amravati<br>
                                        Tel: (0721) 2661611 / 12
                                        <br>
                                        Fax: (0721) 2661612
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" style="WIDTH: 285px"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td><span class="highlightedtext"><strong>Nagpur</strong></span><br>
                                        <span class="text">West Highcourt Road, Near Tahasil (Gramin) Office, Civil Lines, 
                                          Nagpur-440 001.<br>
                                          Tel: (0712) 2533 325
                                          <br>
                                          Fax: 2560 680 <br>&nbsp;</span>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td><span class="highlightedtext"><strong>Nashik</strong></span><br>
                                        <span class="text">Paryatan Bhavan, Govt. Guest House Premises,<br>
                                          Near Gold Club Ground, Nashik-422 002.<br>
                                          Tel: (0253) 2570 059
                                          <br>
                                          Fax:2579 352</span></td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>




                        <tr>
                          <td align="left" valign="top" style="WIDTH: 285px"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td align="left" valign="top"><span class="highlightedtext"><strong>Pune</strong></span><br>
                                        'I' Block, Central Building,<br>
                                        Pune-411 001.<br>
                                        Tel: (020) 2612 6867 / 8169
                                        <br>
                                        Fax: 2611 9434
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td><span class="text"> <SPAN class="highlightedtext"><STRONG>Ratnagiri</STRONG></SPAN>
                                          <BR>
                                          Collector Office Compound,<BR>
                                          Near Jaystambh, Ratnagiri-415 612.<BR>
                                          Telefax: (02352) 223847, 221508 </span>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>






                        <tr>
                          <td align="left" valign="top" style="WIDTH: 285px"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td><span class="text"> <SPAN class="highlightedtext"><STRONG>Mumbai</STRONG></SPAN>
                                          <BR>
                                          P. L. Deshpande Kala Academy,<BR>
                                          Near Siddhivinayak Temple, Sayani Road,<BR>
                                          Prabhadevi, Mumbai - 400025.<br />
                                          Tel: (022) 24300413, 24313908<br />
                                          Fax: (022) 24300408 </span>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <!--<td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td><SPAN class="highlightedtext"><STRONG>Sindhudurg</STRONG></SPAN><STRONG><BR>
                                        </STRONG>New Administrative Bldg., C-Block,<BR>
                                        1 st Floor, Sindhudurga Nagari(ORAS)-416 520.<BR>
                                        Tel: 02362 228785
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>-->
                        </tr>
                        <tr>
                          <td colspan="2" align="left" valign="top" class="mediumBold" style="TEXT-ALIGN:center">Infomation 
                            and Booking Counters</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" style="WIDTH: 285px"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td class="text">Dadar, Near Pritam Hotel, <strong>
                                          <br>
                                          Mumbai.</strong>
                                        <br>
                                        Tel: 022 2414 3200</td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td class="text">C.S.T. Railway Station,<br>
                                        <strong>Mumbai.<br>
                                        </strong>Tel: 022 2262 2859</td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" style="WIDTH: 285px"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td class="text">New Administrative bldg,<br>
                                      C-Block, 1st flr, <br>
                                        
                                        <strong>Sindhudurga Nagari</strong>, (<b>ORAS</b>) - 416812<br />
                                        Tel: (02362) 228115, 228785
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td class="text">Domestic Airport, New Terminal 1/A, Santacruz,<br>
                                        <strong>Mumbai.<br>
                                        </strong>Tel: (022) 2615 6946
                                        </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        
                        
                        <tr>
                          <td align="left" valign="top" style="WIDTH: 285px"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td align="left" valign="top" class="text">
                                        Hotel Janpath, 
                                        <br>
                                        Room No. 11, Ground Floor,
                                        <br>
                                        Janpath,<br />
                                        <strong>New Delhi - 110 001.</strong><br>
                                        Tel: (011) 23346940
                                      <!--  <br>
                                      Mobile:&nbsp;+91&nbsp;9310244189&nbsp;/&nbsp;+91&nbsp;8800444126-->
                                        
                                        </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td class="text"><P>254/B Udyog Bhavan,<BR>
                                          Assembly Road, <strong>
                                            <br>
                                            Kohlapur - 416 001.</strong><br>
                                          Tel: (0231) 2652 935<br>
                                          Fax: 2659 435</P>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" style="WIDTH: 285px"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td class="text">Gateway of India,<br>
                                        Nilambari Bus(Open Deck) &amp; Elephanta Ferries
                                        <strong>Mumbai.<br>
                                        </strong>Tel: (022) 22841877</td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc" ID="Table1">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff" ID="Table3">
                                    <tr>
                                      <td class="text">C-13, Vipin Khand, Gomti Nagar,<br>
                                        <strong>Lucknow</strong> - 226010<br /><br /><br />
                                        </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <!--<td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td class="text">Pimpri Chinchwad Mahanagar Palika.<br>
                                        Tel: 020 2746 1201</td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>-->
                        </tr>
                        <tr>
                          <td align="left" valign="top" style="WIDTH: 285px"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
                                    <tr>
                                      <td class="text">Panjim Residency,
                                        <br>
                                        Panaji, <strong>Goa.<br>
                                        </strong>Tel: (0832) 2425687
                                        <br>
                                        Telfax: (0832) 2423572<br /><br /></td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc" ID="Table1">
                              <tr>
                                <td><table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff" ID="Table3">
                                    <tr>
                                      <td class="text">G-13, MTDC,<br /> Tourism Plaza (Balyogi Bhavan),<br />Paryatak Bhavan, Baigum Peth, <br /><strong>Hyderabad - 500016 <br />
                                        </strong>Tel: (040) 23410078.</td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" style="WIDTH: 284px">&nbsp;</td>
                          <td align="left" valign="top">&nbsp;</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                <!-- InstanceEndEditable --></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <!-- InstanceEnd -->
  </body>
</html>

    </td>
  </tr>
</table>

                      </TD>
                    </TR>
                  </TABLE>
                </TD>
              </TR>






<!================================================================================>
 <div id="footer1" style="position: fixed; top: 615px; background-color: #d5d5d5; width: 100%;">
 	<div class="row" style="height: 60px">
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