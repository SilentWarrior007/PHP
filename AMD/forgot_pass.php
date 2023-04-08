<?php  require_once "./header.php" ?>
<?php
$err="";
if(isset($_POST["email"])){
    if(empty ($_POST["email"])){
        $err = "E-Mail is req!!";
    }
    else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false){
        $err = "E-Mail is incorrect!!";
    }
    else if(!is_exist ($_POST["email"])){
        $err = "E-Mail is not registered!!";
    }
    else if(empty ($_POST["sec_q"])){
        $err = "Security Question is req!!";
    }
    else if(empty ($_POST["sec_a"])){
        $err = "Security Answer is req!!";
    }
    else {
$email = filter_var($_POST["email"], FILTER_SANITIZE_MAGIC_QUOTES);
$sec_q = filter_var($_POST["sec_q"], FILTER_SANITIZE_MAGIC_QUOTES);
$sec_a = filter_var($_POST["sec_a"], FILTER_SANITIZE_MAGIC_QUOTES);
$query = "select * from amd 
    where email = '$email' 
    and sec_q = '$sec_q'
    and sec_a = '$sec_a'
    ";
    $r = run_sql($query);    
    if(mysqli_num_rows($r)>0){
       $row = mysqli_fetch_array($r); 
       $body = " Your password is $row[pass]";
       echo "<h4 class= 'text-center'>Your password is : $row[pass]</h4>";
//       mail_it($row["email"], "Your password", $body, null);
//       redirect("login.php?msg=1");
    }
    else {
        $err = "Incorrect information!";
    }
    }
}
?>
<div class="row">
    <div class="col-sm-8 offset-sm-2">
    <h1 class="myhead3">Forgot Password</h1>
<form method="post" class="mt-4">
<input class="form-control" placeholder="EMail" type="email" name="email" id="email"/><br>
<input class="form-control" placeholder="Security Question" type="text" name="sec_q" id="sec_q"/><br>
<input class="form-control" placeholder="Security Answer" type="text" name="sec_a" id="sec_a"/><br>
<?php echo "<h3 class='text-danger'>$err</h3>" ?><br>
<button class="btn btn-primary" type="submit">Submit</button>
</form>

    </div>
</div>


<?php  require_once "./footer.php" ?>