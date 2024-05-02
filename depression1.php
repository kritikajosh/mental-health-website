<?php
if(isset($_POST["submit"])){
    $q1=$_POST["q1"];
    $q2=$_POST['q2'];
    $q3=$_POST['q3'];
    $q4=$_POST['q4'];
    $q5=$_POST['q5'];
    $q6=$_POST['q6'];
    $q7=$_POST['q7'];
    $q8=$_POST['q8'];
    $q9=$_POST['q9'];
    $qx=$_POST['qx'];
    $answers=array('q1'=>$q1,'q2'=>$q2,'q3'=>$q3,'q4'=>$q4,'q5'=>$q5,'q6'=>$q6,'q7'=>$q7,'q8'=>$q8,'q9'=>$q9,'qx'=>$qx);
    $num=array_count_values($answers);
    $max=max($num);
    $answer=array_search($max,$num);
    switch($answer){
        case 'Not at all':
            include 'no_depression.html';
            break;
        case 'Several Days':      
            include 'minimal_depression.html';
            break;
        case 'More than half of the days':
            include 'mild_depression.html';
            break;
        case 'Nearly every day':
            include 'pakka_depression.html';
            break;
        }
}
?>