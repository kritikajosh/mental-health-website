<?php
if(isset($_POST['submit'])){
$username=$_POST['uname'];
$password=$_POST['pass'];
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"php");
$query1="select * from users";
$result1=mysqli_query($conn,$query1);
$num=mysqli_num_rows($result1);
$query="insert into users(username,password) values('$username','$password')";
mysqli_query($conn,$query);
$result2=mysqli_query($conn,$query1);
$num1=mysqli_num_rows($result2);
if($num1>$num){
    echo "record inserted.";
    setcookie("username",$username,time()+60,"");
    setcookie("password",$password,time()+60,"");
    include 'contac.html';
}
}
?>