<?php 
  include("includes/layouts/header.php");
  include("db.php");
  include("includes/functions.php");
// session_start();
  $error = "";
  if(isset($_POST['login'])){

      $email = mysqli_real_escape_string($con, $_POST['email']);
      $password = mysqli_real_escape_string($con, $_POST['password']);

      if(email_exists($email, $con)){

        $result = mysqli_query($con, "SELECT password FROM employer_register WHERE email = '$email'");
        $retrievepassword = mysqli_fetch_assoc($result);

        if(($password) != $retrievepassword['password']){
          echo "wrong password/username";
        }else{
          // echo "good password";
          $_SESSION['email'] = $email;
          redirectto("addjob.php");
        }
          
          // $error = "email exists";
      }else{
          $error = "does not exists";
      }
  }
?>
       
      <div style="height:500px; width: 500px; background-color: #fff; margin-top: 100px; border-radius: 10px; " class="container">

       <center><h4 style="color: #000; font-weight: bold; font-family: franklin gothic heavy;">WELCOME TO MKONNECT!</h4></center><br>
        <!-- to be validated 'login.php'-->
        <form method="POST" action="login.php" style="margin-top: 30px;background-color:  ;" " class="form-horizontal">

        <a href="#" style="background-color: #0d47a1; box-shadow: 5px; margin-left: 50px;  border-radius: 20px;" class="btn btn-info" role="button">LOGIN WITH FACEBOOK</a><br><br>


        <div class="form-group">
      <label style="margin-left: 10px; color: #000;" for="username">User Name:</label>
      <input style="margin-left: 10px; margin-right: 10px;" type="text" class="form-control" id="username" placeholder="Enter Your Username/email" name="email" required = "required">
    </div>
    

    <div class="form-group">
      <label style="margin-left: 10px; color: #000;" for="pwd">Password:</label>
      <input style="margin-left: 10px; margin-right: 10px;" type="password" name = "password" class="form-control" id="pwd" placeholder="Enter password"  required = "required">
    </div>

    <div class="form-group">
      <input type="checkbox" name="keep">
      <label style="margin-left: 10px; color: #000;">Keep me logged in</label>
     
    </div>


    
    <center><button style="margin-bottom: 10px; background-color: #f57c00;" name = "login" type="submit" class="btn btn-default">LOGIN</button></center>
  </form>
  </div>

  <?php 
  include("includes/layouts/footer.php");
?>
