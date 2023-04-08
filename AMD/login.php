<?php  require_once "./header.php" ?>
<?php
$msg = "";
if(isset($_REQUEST["msg"])){
    if($_REQUEST["msg"]==1){        
        $msg = "Your password has been sent!";
    }
    else if($_REQUEST["msg"]==2){        
        $msg = "Your password has been changed!";
    }
    else if($_REQUEST["msg"]==3){        
        $msg = "Registration Successful!";
    }
}

if(isset($_POST["email"]))
{
    $email = filter_var($_POST["email"], FILTER_SANITIZE_MAGIC_QUOTES);
    $pass = filter_var($_POST["pass"], FILTER_SANITIZE_MAGIC_QUOTES);
    $query = "select * from amd 
    where email = '$email' 
    and pass = '$pass' ";
    $r = run_sql($query);    
    if(mysqli_num_rows($r)>0){
       $row = mysqli_fetch_array($r); 
       $_SESSION["uname"]=$row["user_name"];
       $_SESSION["email"]=$row["email"];
       $_SESSION["id"]=$row["id"];
       redirect("index.php");
    }
    else {
        $err="Incorrect User Name or Password!!";
    }
}
?>
<div class="row">
    <div class="col-sm-8 offset-sm-2">
    <h3 style="color: red;"><?=$msg?></h3>
    <h1 class="myhead3">Login</h1>
<form method="post" class="mt-4">
<input class="form-control" placeholder="EMail" type="text" name="email" id="email"/><br>
<input class="form-control" placeholder="Password" type="password" name="pass" id="pass" /><br>
<?php  echo "<h4 class='text-danger'>$err</h4>" ?>
<div class="row">
    <div class="col-sm-6">
        <button class="btn btn-primary" type="submit">Login</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </div>
    <div class="col-sm-6">
        <p class="ml-auto" style="text-align: right;">
        <a href="register.php" class="mr-4">Register</a>
        <a  href="forgot_pass.php">Forgot Password</a>
        </p>
    </div>
</div>
</form>

    </div>
</div>


<?php  require_once "./footer.php" ?>