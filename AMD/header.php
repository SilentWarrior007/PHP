<?php
ob_start();
function e_hand($eno, $emsg) {    
}
set_error_handler("e_hand");

session_start();
date_default_timezone_set("asia/kolkata");
$today = date("Y-m-d");
?>
<?php
require_once 'include/constant.php';
require_once 'include/db.php';
require_once 'include/myfun.php';
?>

<link rel="stylesheet" href="./vender/bs/css/bootstrap.min.css">
<script src="./vender/jquery-3.3.1.min.js"></script>
<script src="./vender/popper.min.js"></script>
<script src="./vender/bs/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./vender/fa/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

<div class="myhead1 p-3" >

<nav id="nav1" class="navbar navbar-expand-sm navbar-dark">
<a class="navbar-brand" href="index.php"></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active" class="content">
            <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="./processors.php">Processors</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./graphics.php">Graphics</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./gtech.php">Technology</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./contact.php">Contact Us</a>
            </li>
            <?php 
            if(is_login()){
                echo ' <li class="nav-item active">
                     <a class="nav-link" href="donors.php">Buy</a>
                    </li>';                  
            }            
            ?>
        </ul>
        <ul class="navbar-nav">
        <?php
        if(is_login()){
            echo '<li class="nav-item">
                    <a class="btn btn-outline-light" href="logout.php">Logout</a>
                </li>';
        }
        else {
            echo '<li class="nav-item">
                <a class="btn btn-outline-light" href="login.php">Login to Buy/View</a>
                </li>';
        }        
        ?>
        </ul>
    </div>
</nav>

</div>
<main class="container-fluid py-3 px-5">