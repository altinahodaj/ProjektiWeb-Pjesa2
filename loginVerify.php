<?php
require 'variables.php';
<session-start></session-start>
//code to verify login
if(isset$_POST['login-btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(verifyEmpty($username, $password)){
        header("Location:index.php");
    }else if(verifyLogin($username, $password)){
    }else{
        header("Location:index.php");
    }
}
else{
    header("Location:index.php");
}

function verifyEmpty($username, $password){
    if(empty($username) || empty($password))
    return true;
    return false;
}

function verifyLogin($username, $password){
    foreach($users as $user){
        if($user['username']==$username && $user['password']==$password){
            $_SESSION['role']=$user['role'];
            $_SESSION['username']=$user['username'];
            $_SESSION['Date']=$user['Date'];
        }
    }
}
