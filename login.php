<?php

if(isset($_POST['submit'])){
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"php");
$query="select username,password from users where username='$uname' and password='$pass'";
$result=mysqli_query($conn,$query);
if($result!=NULL){
    include 'contac.html';
    session_start();
    $_SESSION['username']=$uname;
    $_SESSION['password']=$pass;
}
}
?>