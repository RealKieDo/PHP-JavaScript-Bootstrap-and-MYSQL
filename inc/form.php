<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$errors = [
    'firstNameError' => '' ,
    'lastNameError' => '' ,
    'emailError' => '' ,

];

if(isset($_POST['submit'])){




//echo $firstName . ' ' . $lastName . ' '. $email;



    if(empty($firstName)) {
        $errors['firstNameError'] = 'enter the first name';
    } 
    
    
    if(empty($lastName)) {
        $errors['lastNameError'] = 'enter the last name';
    } 
    
    
    if(empty($email)) {
    $errors['emailError'] = 'enter the email address';
    } 
    
    
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailError'] = 'enter valid email';
    } 

    if(!array_filter($errors)) {
     $firstName =mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email     = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "INSERT INTO users(firstName, lastName, email) 
    VALUES ('$firstName', '$lastName', '$email')";

if( mysqli_query($conn, $sql)) {
    header('Location: index.php');
} else {
    echo 'Fail: ' . mysqli_error($conn);
}    
}

}

/*
$firstName =mysqli_real_escape_string($conn, $_POST['firstName']);
$lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
$email =    mysqli_real_escape_string($conn, $_POST['email']);

     $sql = "INSERT INTO users(firstName, lastName, email) 
        VALUES ('$firstName', '$lastName', '$email')";
*/

