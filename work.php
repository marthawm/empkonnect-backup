<?php

include 'db.php';


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
       
       
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="js/form.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> User <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="jobseeker.html">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Dashboard</a>
                            </li>
                           
                          
                            
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div  class="container-fluid">
            <div  class="row-fluid">
                <div  class="span3" id style="background-color:;" ="sidebar">
                    <ul  class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li style="height: 100px;" class="active">
                            <a href="dashbd.php"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li style="height: 100px;">
                            <a href="calendar.html"><i class="icon-chevron-right"></i> Calendar</a>
                        </li>

                        <li style="height: 100px;">
                            <a href="notifications.html"><i class="icon-chevron-right"></i> Notifications <span style="background-color: red;  width: 20px;" class="badge">5</span></a>
                        </li>
                        <li style="height: 100px;">
                            <a href="availablejobs.html"><i class="icon-chevron-right"></i> Available Jobs  <span style="background-color: red;  width: 20px;" class="badge">5</span></a>
                        </li>
                        
                       
                        

                       

                       
                    </ul>
                </div>

                <div class="span9" id="content">
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                        <div class="navbar navbar-inner block-header">
                     <div class="muted pull-center">PROFILE</div>
                               
                </div>            

                   

                <div style="background-color:" class="block-content collapse in">
                    <div class="span8">
                      <center><h2 style="font-family: franklin gothic heavy;">WORK EXPERIENCE</h2></center> 
                    </div>
                </div> 

                <form action="work.php" method="POST">

                   <div class="col-sm-6">	
                   <div class="form-group">
                   <label style="margin-left: 10px; color: #000;font-weight: bold;" for="username">Name of Employer:</label>
                   <input style="margin-left: 10px; margin-right: 10px;height: 30px;width: 400px;" type="text" class="form-control" id="username" name="employer" required = "required">
                   </div>
                   </div>

                   <div class="col-sm-6">	
                   <div class="form-group">
                   <label style="margin-left: 10px; color: #000;font-weight: bold;" for="username">Job title:</label>
                   <input style="margin-left: 10px; margin-right: 10px; height: 30px;width: 400px;" type="text" class="form-control" id="username" name="jbtitle" required = "required">
                   </div>
                   </div>

                   <div class="form-group">   
                   <label style="margin-left: 10px; color: #000; font-weight: bold;" for="name">Job level:</label>
                   <select style="margin-left: 10px;height:30px;" class="form-control" name="jblevel">   
       
                     <option placeholder="#"></option>
					 <option>Graduate trainee</option>
					 <option>Volunteer/Internship</option>
					 <option>Entry Level</option>
					 <option>Mid-Level</option>
					 <option>Senior Level</option>
					 <option>Manager Level</option>
					 <option>Executive Level</option>
					 
				   </select>
				   </div>

    			   <div class="form-group">
    			   <label style="margin-left: 10px; color: #000; font-weight: bold;" for="name">Location:</label>
			       <select style="margin-left: 10px;" class="form-control" name="location"  id="location">  
			       
			        <option placeholder="#"></option>
			         <option>Nairobi</option>
			         <option>Kisumu</option>
			         <option>Thika</option>
			         <option>Mombasa</option>
			         <option>Nakuru</option>
			         <option>Eldoret</option>
			         <option>Naivasha</option>
			         <option>Garissa</option>
			         <option>Meru</option>
			         <option>Embu</option>
			         <option>Nanyuki</option>
			         <option>Kitui</option>
			         <option>Limuru</option>
			         <option>Nyahururu</option>
			         <option style="color: grey;" placeholder="--Any other--"></option>

			      </select>
			      </div>


			      <div class = "form-group">
				  <label style=" color: #000;margin-left: 10px;font-weight: bold;" for="date">Start Date:</label>
				  <div class="input-group date">
				    <input style="background-color: #fff; color: #000;margin-left: 10px;height: 30px;" type="Date" class="form-control" id="date" name="date"  value="" placeholder="Date/Month/Year" required="">
				    <div class="input-group-addon">
				        <span class="glyphicon glyphicon-th"></span>
				    </div>
				    </div>
				  </div>

				  <div class = "form-group">
				  <label style=" color: #000;margin-left: 10px;font-weight: bold;" for="date">End Date:</label>
				  <div class="input-group date">
				    <input style="background-color: #fff; color: #000;margin-left: 10px;height: 30px;" type="Date" class="form-control" id="date" name="date"  value="" placeholder="Date/Month/Year" required="">
				    <div class="input-group-addon">
				        <span class="glyphicon glyphicon-th"></span>
				    </div>
				    </div>
				  </div>

				  <div class="form-group">

                     <label style="color: #000; font-weight: bold;margin-left: 10px;font-family:">Description:</label>
                     <textarea style="background-color: #fff;margin-left: 10px;width: 500px; height: 200px; class="form-control" name="description"></textarea>




				  </div>
                  <center><button style="margin-bottom: 10px; background-color:;" name = "save" type="submit" class="btn btn-default">SAVE</button></center>
              
             </form>

                                


</body>
</html>