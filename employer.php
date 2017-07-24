<?php 
  include("includes/layouts/header.php");
?>

 <form class="form-horizontal  col-md-8"  method="POST" action="register.php" style="margin-left: 10%; margin-top: 4%;">
        <div class="form-group" style="margin-top:4%">
    <label for="inputPassword3" class="col-sm-2 control-label">Company Name</label>
    <div class="col-sm-8">
       <input type="text" class="form-control" id="inputEmail3" placeholder="Name of the employer" name="companyname" required="required">
    </div>
  </div>
  <div class="form-group" >
    <label for="inputEmail3" class="col-sm-2 control-label">Company Phone Number</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" placeholder="International format e.g +2547XXXXX" name="companyphone" required="required">
    </div>
  </div>
  <div class="form-group" >
      <div class="registration-block">
        <h3 class="margin-top-zero">Contact person</h3>
        <p class="dark-grey">Fill in below your details. You can later add more users to the account. Contact details are not shown to the job seekers, but only for us at Fuzu.</p>
      </div>





    <label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" placeholder="First name" name="firstname" required="required">
    </div>
  </div>
   <div class="form-group" >
    <label for="inputEmail3" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Last name of contact person" name="lastname" required="required">
    </div>
  </div>
  <div class="form-group" >
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" placeholder="email of contact person" name="email" required="required">
    </div>
  </div>
  
  
  <div class="form-group" >
    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputEmail3" placeholder="password" name="password" required="required">
    </div>
  </div>
  <div class="form-group" >
    <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputEmail3" placeholder="Confirm password" name="cpass" required="required">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary btn-lg" name="inputdata" style="font-size: 1.8em;">Submit</button>
    </div>
  </div>
  </form>
<?php 
  include("includes/layouts/footer.php");
?>







   