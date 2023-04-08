<?php require_once "./include/constant.php" ?>
<?php
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS) or exit("could not connect");
echo "connected<br>";

$query = "drop schema if exists $dbname ";
mysqli_query($con, $query);
echo "deleted<br>";

$query = "create schema $dbname ";
mysqli_query($con, $query);
echo "created<br>";

mysqli_select_db($con, $dbname);

$query = "CREATE  TABLE amd (
    id INT NOT NULL AUTO_INCREMENT ,
    user_name VARCHAR(45) NULL ,
    email VARCHAR(100) NULL ,  
    pass VARCHAR(45) NULL ,
    phone_no VARCHAR(45) NULL ,
    sec_q VARCHAR(200) NULL ,
    sec_a VARCHAR(100) NULL ,
    gender VARCHAR(10) NULL ,
    age int NULL , 
    address VARCHAR(100) NULL,
    PRIMARY KEY (id) ,
    UNIQUE INDEX email_UNIQUE (email ASC) );";
  $r = mysqli_query($con, $query) or exit(mysqli_error($con));
  echo "table created<br>";

  $query = "INSERT INTO amd ( user_name, email, pass,
   phone_no, sec_q, sec_a,
    gender,  age, address) 
    VALUES ('admin', 'admin@gmail.com', 'admin',
    '911' , 'admin', 'admin',
    'male', '35', 'WRS Colony Raipur CG');";
  $r = mysqli_query($con, $query) or exit(mysqli_error($con));
  echo "row inserted<br>";

?>