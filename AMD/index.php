<video autoplay muted loop id="myVideo">
  <source src="./videos/AMD Radeon VII.mp4" type="video/mp4">
</video>

<div id="color" class="content">
<h1 class="myhead3">Welcome to AMD</h1>
<p>Advanced Micro Devices, Inc. (AMD) is an American multinational semiconductor company based in Santa Clara, California and Austin, 
    Texas that develops computer processors and related technologies for business and consumer markets. While initially it 
    manufactured its own processors, the company later outsourced its manufacturing, a practice known as fabless, after 
    GlobalFoundries was spun off in 2009. AMD's main products include microprocessors, motherboard chipsets, embedded 
    processors and graphics processors for servers, workstations and personal computers, and embedded systems applications.
    Founded in 1969 as a Silicon Valley start-up, the AMD journey began with dozens of employees focused on leading-edge 
    semiconductor products. From those modest beginnings, AMD has grown into a global company of 10,000 people, achieving 
    many important industry firsts along the way. AMD today develops high-performance computing and visualization products to 
    solve some of the world’s toughest and most interesting challenges. There has never been a better time to be in the 
    semiconductor industry, and we are ready to tackle the next 50 years with high-performance computing and graphics solutions 
    that transform all of our lives.</p>
</div>

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

<nav id="nav1" class="navbar navbar-expand-sm navbar-dark">
<a class="navbar-brand" href="index.php"></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active" class="content">
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
                     <a class="nav-link" href="buy.php">Buy</a>
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
