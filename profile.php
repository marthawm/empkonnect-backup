<?php 

require 'db.php';
require 'insert.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form wizard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/agency.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/form.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--favicon-->
       
     <link href="images/favicon-32x32.png" rel="shortcut icon" type="image/x-icon">
     
</head>
<body style="background-image: url(images/mtd1.jpg);background-size: cover;background-repeat: no-repeat;background-attachment: fixed;" class="img-responsive">

<div class="container">
  
<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a style="background-color: #dd2c00;" href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p style="color:#000;"></p>
      </div>
      <div class="stepwizard-step">
        <a style="background-color: #dd2c00;" href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p style="color:#000;"></p>
      </div>
      <div class="stepwizard-step">
        <a style="background-color: #dd2c00;" href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p style="color:#000;"></p>
      </div>
    </div>
  </div>

  
  
  <form role="form" action="userlogin.php" method="POST">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3 style="color:#76ff03;" > Step 1</h3>
          <h5 style="color:#dd2c00;font-weight: bolder;font-size: 20px;">Contact details</h5>
          <div class="form-group">
            <label style="color: #000;" class="control-label">Full Names</label>
            <input style="background-color: transparent;color: #76ff03;" maxlength="100" name = "firstname" type="text" required="required" class="form-control" placeholder="Enter First Name">
          </div></input><br>

          <div class="form-group">
            <label style="color: #000;" class="control-label">Email address</label>
            <input style="background-color: transparent;color: #76ff03;" maxlength="100" type="text"  name = "email" required="required" class="form-control" placeholder="Enter your email address">
          </div></input><br>
  
          <div class="form-group">
            <label style="color: #000;" class="control-label">Phone Number</label>
            <input style="background-color: transparent;color: #76ff03;" maxlength="100" type="text" name = "phonenumber" required="required" class="form-control" placeholder="Enter your phone number"></input>
          </div><br>
          <div class="form-group">
          <button class="btn btn-block btn-primary nextBtn " name="next" type="button">Next</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3 style="color:#76ff03;"> Step 2</h3>
          <h5 style="color: #dd2c00;font-weight: bolder;font-size: 20px;">Experience</h5>
          
            <div style="background-color:" class="row">
           <div class="col-sm-6">
            <div class="form-group">
           
           <label style="color: #000;" class="control-label">Job title:</label>
           <input style="background-color: transparent;color: #76ff03;" maxlength="100" type="text" required="required" name="jobtitle" class="form-control" placeholder="Enter job title"></input>
            </div>
           </div>

            <div class="col-sm-6">
            <div class="form-group">
           
           <label style="color: #000;" class="control-label">Job level:</label>
           <select style="height:30px;background-color: transparent;color: #76ff03;border-color: green;" class="form-control" name="joblevel" required="required">   
       
           <option placeholder="#"></option>
           <option style="background-color: transparent;">Graduate trainee</option>
           <option>Volunteer/Internship</option>
           <option>Entry Level</option>
           <option>Mid-Level</option>
           <option>Senior Level</option>
           <option>Manager Level</option>
           <option>Executive Level</option>
           
           </select>
            </div>
           </div>
           </div><!--end of row-->


           <div class="row"> 
           <div class="col-sm-12">
           <div class="form-group">
           <label style="margin-left: 10px;color: #000;" class="control-label">Description:</label>
           <textarea style="background-color: transparent;color: #76ff03;margin-left: 0px; height: 200px;" class="form-control" name="description"></textarea>
           </div>
           </div>
           </div>

           <div class="row"> 
           <div class="col-sm-12">
            <div class="form-group">
           <label style="color: #000;" class="control-label">Location</label>
           <input style="background-color: transparent;color: #76ff03;" maxlength="100" type="text" required="required" name="location" class="form-control" placeholder="Where you worked"></input>
            </div>
           </div>

          </div><!--end of row-->

           <div class="row"> 
           <div class="col-sm-6">
            <div class="form-group">
           <label style="color: #000;" class="control-label">Start Date:</label>
            <div class="input-group date">
            <input style="background-color: transparent;color: #76ff03;height: 30px;" type="Date" class="form-control" id="date" name="stdate"  value="" placeholder="Date/Month/Year" required="">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
            </div>
            </div>
           </div>

           <div class="col-sm-6">
            <div class="form-group">
           <label style="color: #000;" class="control-label">End Date:</label>
            <div class="input-group date">
            <input style="background-color: transparent;color: #76ff03;height: 30px;" type="Date" class="form-control" id="date" name="endate"  value="" placeholder="Date/Month/Year" required="">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
            </div>
            </div>
            </div>


          </div><!--end of row-->
          
          <div class="row">
          <div class="form-group">
          <div class="col-sm-6">  
          <button class="btn btn-block btn-primary prevBtn" type="button">Previous</button>
          </div>
          <div class="col-sm-6">
          <button class="btn btn-block btn-primary nextBtn pull-right" type="button">Next</button>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3 style="color:#76ff03;"> Step 3</h3>
          <!-- editing-->

          
          <h5 style="color:#dd2c00;font-weight: bolder;font-size: 20px;">Education</h5>
          <div class="row">
           <div class="col-sm-12">
            <div class="form-group">
           
           <label style="color: #000;" class="control-label">Name of school:</label>
           <input style="background-color: transparent;color: #76ff03; maxlength="100" type="text" required="required" name="school" class="form-control" placeholder="Enter name of your school"></input>
            </div>
           </div>
           </div><br>


          <div class="row">
           <div class="col-sm-6">
            <div class="form-group">
           
           <label style="color: #000;" class="control-label">Education Level:</label>
          <select style="height:30px;background-color: transparent;" class="form-control" name="level" required="required">   
       
           <option>Certificate</option>
           <option>Diploma</option>
           <option>Degree</option>
           <option>Masters</option>
           <option>PHD</option>
          
          </select>
            </div>
           </div>
           
           <div class="col-sm-6">
            <div class="form-group">
           
           <label style="color: #000;" class="control-label">Qualification:</label>
           <input style="background-color: transparent;color: #76ff03; maxlength="100" type="text" required="required" name="qualification"n class="form-control" placeholder="e.g Cert/Diploma/Degree/ in computer science"></input>
            </div>
           </div>
           </div><!--end of row-->

            <div  class="row">
             <div class="col-sm-6">
              <div class="form-group">
           
           <label style="color: #000;" class="control-label">Start Date:</label>
             <div class="input-group date">
            <input style="background-color: transparent;color: #76ff03;height: 30px;" type="Date" class="form-control" id="date" name="startdate"  value="" placeholder="Date/Month/Year" required="">
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
            </div>
            </div>
           </div>

            <div class="col-sm-6">
              <div class="form-group">
           
           <label style="color: #000;" class="control-label">End Date:</label>
             <div class="input-group date">
            <input style="background-color: transparent;color: #76ff03;height: 30px;" type="Date" class="form-control" id="date" name="enddate"  value="" placeholder="Date/Month/Year" required="">
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
            </div>
            </div>
           </div>
           </div><br>

            <div class="form-group">
            <label style="color: #000;" style="margin-left: 15px;" class="control-label">Skills:</label>
            <input style="background-color: transparent;color: #76ff03;" maxlength="100" type="text" required="required" name="skills" class="form-control" placeholder="Enter your qualifications"></input>
          </div><br>
          <div class="form-group">
            <label style="margin-left: 15px;color:#000;" class="control-label">Areas of expertise:</label>
            <textarea style="background-color: transparent;color: #76ff03;" required="required" class="form-control" name="expertise" placeholder="Enter your certifications"></textarea>
          </div><br>
          
          <!-- <div class="form-group">
            <label class="control-label">Referees</label>
            <textarea required="required" class="form-control" name="referees" placeholder="Enter your referees"></textarea>
          </div> -->
          <div class="form-group">
            <label  style="margin-left: 15px;color: #000;" class="control-label">Referees</label>
            <textarea style="background-color: transparent;color: #76ff03;" required="required" class="form-control" name="referees" placeholder="Enter your referees"></textarea>
          </div>

          
          <div class="row">
          <div class="col-sm-6">
          <button class="btn btn-block btn-primary prevBtn" type="button">Previous</button>
          </div>
        
          <div class="col-sm-6">
          <button class="btn btn-block btn-success" name="submit" type="submit">Submit</button>
          </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  
  
</div>









</body>
</html>






   










