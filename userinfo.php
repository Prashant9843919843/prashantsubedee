<?php
 $con = mysqli_connect('localhost','root',);

if($con){
    echo "Connection Succesful";
} else{
    echo "Connection Failed";
}

mysqli_select_db($con, 'prashantusersinfo');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userinfodata (user, email, mobile, comment)
values('$user', '$email', '$mobile','$comment') ";

mysqli_query($con,$query);

echo "$query";
header('location:index.php');
?>