<?php
if (isset($_POST['submit'])){
$user=$_POST['firstname'];
$mail=$_POST['email'];
$userMsg=$_POST['subject'];
$subject="<b>Feedback received</b>";
$msg="Thank you for your feedback on heit's mental health website. It means a lot and we appreciate it.<br><br>
Here are some therapists in our recommendations:<br><br>Mr. Apple +91 2497857240<br> Ms. Tomato +91 2485863220<br><br> Feedback received:<i>'$userMsg'</i>";

include 'feedback.html';
}
?>