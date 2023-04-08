<?php  require_once "./header.php" ?>
<?php
if(isset($_POST["name"])){
    if(null!=check_pass($_POST["pass"])){
        $err=check_pass($_POST["pass"]);
    }   
    else if($_POST["pass"]!=$_POST["cpass"]){
        $err="Password does not match!";
    }
    else if(is_exist($_POST["email"])){
        $err=$_POST["email"] . ' already registered!';
    }   
    
$query = "INSERT INTO `amd` 
    (`user_name`, `email`, `pass`, `phone_no`, 
    `sec_q`, `sec_a`,
    gender, age, address) 
    VALUES ('$_POST[name]', '$_POST[email]', '$_POST[pass]', '$_POST[phone_no]', 
    '$_POST[sec_q]', '$_POST[sec_a]', 
    '$_POST[gender]',  '$_POST[age]', '$_POST[address]'    
    );";
    $r =run_sql($query);  
    $lid = mysqli_insert_id($con);    
    

//    mail_it(ADMIN_EMAIL, "New User Registered!", "Name: $_POST[name], EMail: $_POST[email]");
//    mail_it($_POST["email"], "New User Registered!", "Name: $_POST[name], EMail: $_POST[email]");
    redirect("login.php?msg=3");
    }

?>
<div class="row">
    <div class="col-sm-8 offset-sm-2">
    <h1 class="myhead3">Register</h1>
<form method="post" enctype="multipart/form-data" class="mt-4">
<input required class="form-control" placeholder="User Name" type="text" name="name" id="name"/><br>
<input  pattern="0?[6-9]{1}\d{9}" required class="form-control" placeholder="Phone No" type="tel" name="phone_no" id="phone_no"/><br>
<select required class="form-control" name="gender" id="gender">
<option value="">Select</option>
<option>Male</option>
<option>Female</option>
</select><br>
<input required class="form-control" placeholder="EMail" type="email" name="email" id="email"/><br>
<input required class="form-control" placeholder="Password" type="password" name="pass" id="pass" /><br>
<input required class="form-control" placeholder="Confirm Password" type="password" name="cpass" id="cpass" /><br>
<input required class="form-control" placeholder="Security Question" type="text" name="sec_q" id="sec_q"/><br>
<input required class="form-control" placeholder="Security Answer" type="text" name="sec_a" id="sec_a"/><br>
<input required class="form-control" placeholder="Age" type="number" name="age" id="age"/><br>
<input required class="form-control" placeholder="Address" type="text" name="address" id="address"/><br>

<?php echo "<h3 class='text-danger'>$err</h3>" ?><br>
<div class="row">
    <div class="col-sm-6">
        <button class="btn btn-primary" type="submit">Register</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </div>
</div>
</form>

    </div>
</div>


<?php  require_once "./footer.php" ?>