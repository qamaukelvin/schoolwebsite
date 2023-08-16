<?php
require_once("connection.php");

$id=$_POST["id"];
$fullname=$_POST["fullname"];
$email=$_POST["email"];
$phone=$_POST["phonenumber"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];

  
$sql="UPDATE `contact_us` SET `fullname` = '$fullname', `email` = '$email', `phonenumber` = '$phone', `password` = '$password', `cpassword` = '$cpassword' WHERE `contact_us`.`id` =$id ";
$update=mysqli_query($conn,$sql);
if($update){
    ?> 
        <script>
            window.alert("Update is sucessfull");
            window.location.href="contact_us.php";
        </script>
    <?php
}else{
    ?>
        <script>
            window.alert("Could not update");
            window.location.href="contact_us.php";
        </script>
    <?php
}
?>