<?php
require_once("connection.php");


$fullname=$_POST["fullname"];
$email=$_POST["email"];
$phone=$_POST["phonenumber"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];

$sql="INSERT INTO `contact_us` (`id`, `fullname`, `email`, `phonenumber`, `password`, `cpassword`) VALUES (NULL, '$fullname', '$email', '$phone','$password', '$cpassword')";
$insert=mysqli_query($conn,$sql);
if($insert){
    ?>
    <script>
window.alert("Thank You For Contacting Us");
window.location.href="/schoolwebsite/pages/contact.html";
    </script>
    
    
    <?php
}else{
    ?>
    <script>
        window.alert("Oops!...something happens");
        window.location.href="/schoolwebsite/pages/contact.html";
    </script>
    <?php
}


?>