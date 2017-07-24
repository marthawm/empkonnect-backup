<?php

include 'db.php';

      $image=['image'];
      if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }

     




?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Admin Home Page</title>
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
 
 <style>
     
.career{
    background-color: red;
}


 </style>

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
                            <div class="block-content collapse in">
                                <div class="span8">
                                   <center><h2 style="font-family: franklin gothic heavy;">PERSONAL INFORMATION</h2></center>
                                   <div class="col-sm-3">



     <!--php upload code-->

         
         <div style="background-color: #e0e0e0;" class="well">
         <h5 style="color:#e65100; font-weight: bold;">WORK EXPERIENCE</h5>
         <P style="color: #000;">Tell us about your work experience in this section</P>
         
          <span class="pull-center"><a href="#"><button style="margin-bottom: 10px; " type="submit" class="btn btn-default">Edit here</button></a></span>
          <span class="pull-left"><a href="work.php"><button style="margin-bottom: 10px; " type="submit" class="btn btn-default">Fill in work experience</button></a></span>
         </div>
         </div>

          <div class="well">
         <h5 style="color:#e65100; font-weight: bold;">EDUCATION</h5>
         <P style="color: #000;">Fill in your education background </P>
         
         <span class="pull-center"><a href="#"><button style="margin-bottom: 10px; " type="submit" class="btn btn-default">Edit here</button></a></span>
          <span class="pull-left"><a href="#"><button style="margin-bottom: 10px; " type="submit" class="btn btn-default">Your Education</button></a></span>
         </div>  

          <div style="background-color: #e0e0e0;" class="well">
         <h5 style="color:#e65100; font-weight: bold;">LANGUAGE</h5>
         <P style="color: #000;">Choose the language</P>
        
         <span class="pull-center"><a href="#"><button style="margin-bottom: 10px; " type="submit" class="btn btn-default">Edit here</button></a></span>
          <span class="pull-left"><a href="#"><button style="margin-bottom: 10px; " type="submit" class="btn btn-default"> Language</button></a>  </span>
         </div>  

          <div style="background-color:;" class="well">
         <h5 style="color:#e65100; font-weight: bold;">ATTRIBUTES</h5>
         <P style="color: #000;">Choose one or more attributes</P>
         
          <span class="pull-center"><a href="#"><button style="margin-bottom: 10px; " type="submit" class="btn btn-default">Edit here</button></a></span>
          <span class="pull-left"><a href="#"><button style="margin-bottom: 10px; " type="submit" class="btn btn-default">Attributes</button></a></span>
         </div>


          <div style="background-color: #e0e0e0;" class="well">
         <h5 style="color:#e65100; font-weight: bold;">SKILLS</h5>
         <P style="color: #000;">Select any skill in this field you have</P>
         
          <span class="pull-center"><a href="#"><button style="margin-bottom: 10px; " type="submit" class="btn btn-default">Edit here</button></a></span>
          <span class="pull-left"><a href="#"><button style="margin-bottom: 10px; " type="submit" class="btn btn-default">Skills</button></a></span>
         </div>   
          
             
                       
                                   </div>

                                </div>
                                
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>
           
        </div>
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>

</html>