<?php
include ('config/config.php');

$isSubmit = false;
$errMsg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = trim($_POST['email']);

    if($email === ''){
        $errMsg = 'Please Enter a Valid E-mail';
        
    }else{
        $post = ['email' => $email];
        insert('soon_email', $post);
        $isSubmit = true;
    }
}else{

    $email = '';
}


