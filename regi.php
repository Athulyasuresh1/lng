<?php
$conn = mysqli_connect('localhost','root'");
$m = mysqli_select_db($conn,'db2');
$userid = $_POST['user_id'];
$name = $_POST['name'];
$phno = $_POST['phno'];
$address = $_POST['address'];
$pass = $_POST['password'];
$q = "insert in to user_reg values('$userid','$name','phno','$address','$pass')";
echo"$q";
$exe = mysqli_query($conn,"insert into login values($name,$pass,$userid')");
echo"<script>alert('Register successfully');
location.href = 'contact.html';
</script>";
}
?>