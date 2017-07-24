<?php 
  include("includes/layouts/header.php");
  include("db.php");
  include("includes/functions.php");
?>
      <div style="" class="row">

      <center><h3 style="font-family:franklin gothic heavy;font-weight: bold">JOB SUBMISSION</h3></center>


      </div>
      
      <div style="height: auto;" class="row">
      
       <center><form action="postjob.php" method="POST" style=" margin-left: 50px; border-style: solid; border-color: #039be5; border-width: 1px;border-style: none; border-radius: 20px; height: 400px; width: 500px; ">
       <!-- <img style="width: 100px; height: 100px; margin-top:-45px;" src="images/employer.jpg" class="img-circle" class="img-responsive"> -->
  <div style="width: 500px;" class="form-group">
    <label style="color: #000;" for="job">Job Title:</label>
    <input style="background-color: #fff;color: #2196f3;font-size: 20px;" type="text" class="form-control" id="title" name="title" required>
  </div>
  <div class="form-group">
    <label style="color: #000;" for="description">Job Description:</label>
      <textarea style="background-color: #fff; height: 150px;color: #2196f3;font-size: 20px;" class="form-control" rows="3" id="description" type="text" name="description" required=""></textarea>
  </div>
  <div style="width: 500px;" class="form-group">
    <label style=" color: #2196f3;" for="apply">How to Apply:</label>
    <label style=" color: #000;">By Email</label>
    <input style="background-color: #fff;color: #2196f3;font-size: 20px;" type="email" class="form-control" id="apply" name="apply" placeholder="e.g text@gmail.com" required="">
  </div>
  <div class = "row">
  <div class = "col-sm-6">
    <div style="" class="form-group">
       <label style="margin-left: 10px; color: #000; font-weight: bold;" for="terms">Job Category:</label>
      
       <select style=" color: #2196f3; font-size: 20px; " class="form-control" name="category" id="terms" required>   
       
        <option placeholder="#"></option>
         <option style="color: #2196f3;">Information Technology</option>
         <option style="color: #2196f3;">Secretarial</option>
         <option style="color: #2196f3;">Engineering</option>
         <option style="color: #2196f3;">Accounting</option>
         <option style="color: #2196f3;">Marketing</option>
         <option style="color: #2196f3;">Software Development</option>

         </select>

      </div>
  </div>
  <div class = "col-sm-6">
    <div style="" class="form-group">
       <label style="margin-left: 10px; color: #000; font-weight: bold;" for="terms">Company:</label>
      
       <input style=" color: #2196f3; font-size: 20px; " class="form-control" name="company" id="terms" required>   
       
        

      </div>
  </div>
  </div>
      <br>

    <div class = "row">
       <div class = "col-sm-6">
    <div style="" class="form-group">
       <label style="margin-left: 10px; color: #000; font-weight: bold;" for="terms">Contract Type:</label>
      
       <select style=" color: #2196f3; font-size: 20px; " class="form-control" name="contract" id="terms" required>   
       
        <option placeholder="Type of contract"></option>
        <option style="color: #2196f3;">Permanent</option>
         <option style="color: #2196f3;">Part Time</option>
          <option style="color: #2196f3;">Consultancy</option>
         <option style="color: #2196f3;">Internship</option>
         <option style="color: #2196f3;">Part Time</option>
         <option style="color: #2196f3;">Fixed Term</option>

         </select>

      </div>
      </div>
        <div class = "col-sm-6">
          <div style="margin-left: 10px;" class="form-group">
        <label style=" color: #000;" for="website">Websites:</label>
        <input style="background-color: #fff;color: #2196f3;font-size: 20px;" type="text" class="form-control" id="website" name="website" required>
        </div>
        </div>
    </div>
    <div class = "row">
  <div class = "col-sm-6">
          <div style="margin-left: 10px;" class="form-group">
        <label style=" color: #000;" for="skills">Required Languages:</label>
        <input style="background-color: #fff;color: #2196f3;font-size: 20px;" type="text" class="form-control" id="language" name="language" placeholder = "English, Spanish" required>
        </div>
        </div> 
      <div class = "col-sm-6">
          <div style="margin-left: 10px;" class="form-group">
        <label style=" color: #000;" for="skills">City:</label>
        <input style="background-color: #fff;color: #2196f3;font-size: 20px;" type="text" class="form-control" id="city" name="city" placeholder = "Nairobi, Kigali etc.." required>
        </div>
        </div>
  </div>
      <br>

  <div class = "row">
  <div class = "col-sm-6">
  <label style=" color: #000;" for="date">Deadline:</label>
      <div class="input-group date">
    <input style="background-color: #fff; color: #2196f3;font-size: 20px;s" type="Date" class="form-control" id="date" name="date"  value="" placeholder="Date/Month/Year" required="">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
</div>
<div class = "col-sm-6">
    <div style="margin-left: 10px;" class="form-group">
       <label style="margin-left: 10px; color: #000; font-weight: bold;" for="terms">Country:</label>
      
       <select style=" color: #2196f3; font-size: 20px; " class="form-control" name="country" id="country" required>   
       
        <option placeholder="country"></option>
         <option style="color: #2196f3;">Kenya</option>
         <option style="color: #2196f3;">Uganda</option>
         <option style="color: #2196f3;">Tanzania</option>
         <option style="color: #2196f3;">Rwanda</option>

         </select>

      </div>
  </div>

</div><br/>



  
  <a href="postajob2.php"><button style="background-color: #2196f3; margin-bottom: 20px; " type="submit" class="btn btn-default">POST</button></a>
</form></center>
</div>
<?php 
  include("includes/layouts/footer.php");
?>

