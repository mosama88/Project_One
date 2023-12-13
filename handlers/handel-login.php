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
$_SESSION['employee'][] =[
    'name' => $name,
    'email' => $email,
    'password' => $password
];
if(empty($errors)){
    $data = file_get_contents("../data/users.csv");
    $data = json_decode($data, true);
    $data = [$name, $email, sha1($password)];

    $_SESSION['auth'] = [$name, $email, sha1($password)];
    redirect("../profile.php");
    die();

    //  Validation Error 
}else{
    $_SESSION ['errors'] = $errors;
    redirect("../login.php");
    die;    
}



// if (!file_exists("products.json")) {
//     $data = file_get_contents("https://dummyjson.com/products");
//     file_put_contents("products.json", $data);
// }
// $data = file_get_contents("products.json");
// $data = json_decode($data, true);