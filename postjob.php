<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $con = mysqli_connect("localhost", "root", "", "demo");

    // Check connection

    if($con === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $apply = mysqli_real_escape_string($con, $_POST['apply']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $company = mysqli_real_escape_string($con, $_POST['company']);
    $contract = mysqli_real_escape_string($con, $_POST['contract']);
    $language = mysqli_real_escape_string($con, $_POST['language']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $website = mysqli_real_escape_string($con, $_POST['website']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    

    // attempt insert query execution
    $query = "INSERT INTO jobs(title, description, apply, category, contract, language,date, website, city, company, country) VALUES ('$title','$description', '$apply', '$category', '$contract', '$language', '$date', '$website', '$city', '$company', '$country')";

    if(mysqli_query($con, $query)){
        echo "your job have been posted.";
    } else{
        echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
    }

    // close connection
    mysqli_close($con);



?>

