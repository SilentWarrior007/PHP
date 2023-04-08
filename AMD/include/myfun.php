<?php
require_once 'db.php';
function put_elipses($str, $noc){
    if(strlen($str)>$noc){
        $str = substr($str, 0, $noc-3). "...";
    }
    return $str;
}

function redirect($loc){
    header("location:$loc");
}

function is_login(){
    return isset($_SESSION["email"]);
}

function is_admin(){
    return is_login() && strcasecmp($_SESSION["role"],"admin")==0;
}

function check_login(){
    if(!is_login()){
        redirect("login.php");
    }
}

function check_admin(){
    if(!is_admin()){
        redirect("login.php");
    }
}

function check_pass($pass){
    $err= null;
    if(strlen($pass)<=7){
        $err= "Password must be 8 char long!";
    }
    else if(preg_match("/\d{1}/", $pass)==false){
        $err= "Password must contain one digit!";
    }
    else if(preg_match("/[a-z, A-Z]{1}/", $pass)==false){
        $err= "Password must contain one alphabet!";
    }
    return $err;
}

function is_exist($email){
    $res = false;
    $query = "select * from amd 
    where email = '$email'"; 
    $r = run_sql($query);    
    if(mysqli_num_rows($r)>0){
        $res = true;
    }    
    return $res;
}