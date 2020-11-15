<?php
    $gender = $_POST['gender'];
    /*$mob = `Mar`;
    $dob = `14`;
    $yob = `1999`;*/
    $exp = $_POST['exp'];
    $nationality = $_POST['nationality'];
    $dept = $_POST['dept'];
    $sim = $_POST['sim'];
    $simp = $_POST['simp'];
    $simpy = $_POST['simpy'];
    $simply = $_POST['simply'];
    $txtMsg1 = $_POST['txtMsg1'];
    $txtMsg2 = $_POST['txtMsg2'];
    $txtMsg3 = $_POST['txtMsg3']; 

    //Database Connection
    $conn = new mysqli('localhost','root','12345','survey-form');
    if($conn->connect_errno){
        //die('Connection Failed: '.$conn->connect_error);
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    }
    else{
        if(!$conn->query("insert into questions(gender, dept, nationality, exp, question1, question2, question3, question4, thoughts, email, comments) values ('".$gender."','".$dept."','".$nationality."','".$exp."','".$sim."','".$simp."','".$simpy."','".$simply."','".$txtMsg1."','".$txtMsg2."','".$txtMsg3."')")){
            echo("Error description: " . $conn -> error);
        }
        else{
            header("Location: sent.html");
        }
        $conn->close();
    }
    //($gender, $mob, $dob, $yob, $nationality, $educ, $sim, $simp, $simpy, $simply, $txtMsg1, $txtMsg2, $txtMsg3)
?>