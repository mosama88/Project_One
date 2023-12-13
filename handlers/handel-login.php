<?php

session_start();
include '../core/functions.php';
include '../core/validations.php';
$errors = [];



if (getrequesetmethod('POST') && checkpostinput('email')){

    $email = sanitizeInput($_POST['email']);
    $password =sanitizeInput($_POST['password']);

// foreach($_POST as $key => $value){
//     echo $key. " : " . $value. "<br>";
// }


} else{
    echo  "The Wrong Key";
};


// Start Validation INPUT Email
if (!requierdVal($email)){
    $errors []= "برجاء كتابة البريد الالكترونى";
} elseif (!emailVal($email)){
    $errors []= "برجاء كتابة البريد الالكترونى بطرقة صحيحة";
}

// END Validation INPUT Email

// Start Validation INPUT Password
if (!requierdVal($password)){
    $errors []= "برجاء أدخال كلمة السر";
} elseif (!minVal($password, 3)){
    $errors []= "كلمة السر لا تقل عن 3 حروف";
}elseif (!maxVal($password, 30)){
    $errors []= "كلمة السر لا تزيد عن 30 حرف";
}
// END Validation INPUT Password


//  Validation For Saving File 
if(!empty($errors)){
    $users_file = fopen("../data/users.csv", "a+");
    // file_get_contents()
    $data = [$name, $email, sha1($password)];
    fputcsv($users_file, $data);
    $_SESSION['auth'] = [$name, $email];
    redirect("../index.php");
    die();

    //  Validation Error 
}else{
    $_SESSION ['errors'] = $errors;
    redirect("../login.php");
    die;    
}
