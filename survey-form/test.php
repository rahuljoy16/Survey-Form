<?php
$mysqli = new mysqli("localhost","root","12345","survey-form");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform a query, check for error
if (!$mysqli -> query("insert into questions(gender, mob, dob, yob, nationality, educ, sim, simp, simpy, simply, txtMsg1, txtMsg2, txtMsg3) VALUES ('m', 'Jan', 10, 1998, 'india', 'educ', 'sim', 'simp', 'simpy', 'simply', 'txtMsg1', 'txtMsg2', 'txtMsg3')")) {
  echo("Error description: " . $mysqli -> error);
}

$mysqli -> close();
?>