<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
include("db.php");
$error = "";
include("includes/functions.php");
// session_start();
if(isset($_POST['login'])){

    $email = mysqli_real_escape_string( $con, $_POST['email']);
    $password = mysqli_real_escape_string( $con, $_POST['password']);

    if(email_exists($email, $con)){
        echo var_dump($result);
    }else{
        $error = "does not exists";
    }
}

// $result = mysqli_query("SELECT * FROM employer_register WHERE email='$email'");

// echo var_dump($result);

// if (mysqli_num_rows($con, $result) == 0 ){ // User doesn't exist
//     $_SESSION['message'] = "User with that email doesn't exist!";
//     header("location: error.php");
// }
// else { // User exists
//     $user = mysqli_fetch_assoc();

//     if ( password_verify($_POST['password'], $user['password']) ) {
        
//         $_SESSION['email'] = $user['email'];
//         $_SESSION['firstname'] = $user['firstname'];
//         $_SESSION['lastname'] = $user['lastname'];
//         // $_SESSION['active'] = $user['active'];
        
//         // This is how we'll know the user is logged in
//         // $_SESSION['logged_in'] = true;

//         echo "successful login";
//         // header("location: profile.php");
//     }
//     else {
//         $_SESSION['message'] = "You have entered wrong password, try again!";
//         header("location: error.php");
//     }
// }
// }
// 
?>