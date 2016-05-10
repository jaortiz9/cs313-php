<?php
session_start(); // resume existing session
// get data

$name = htmlspecialchars($_POST["userName"]);
$frequent = htmlspecialchars($_POST["frequent"]);
$flavor = htmlspecialchars($_POST["flavor"]);
$date = htmlspecialchars($_POST["date"]);
$happy = htmlspecialchars($_POST["happy"]);

$line = "$name:$frequent:$flavor:$date:$happy\n";

// update session variable
$_SESSION["userName"] = "$name";


// append data to file
file_put_contents("results.txt", $line, FILE_APPEND);

// redirect to messages.php
header('Location: surveyResults.php');
?>