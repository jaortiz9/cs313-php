<?php
session_start();
if(isset($_SESSION['userName'])){
    header('Location: survey.php');
    exit();
}
?>

<!DOCTYPE html?
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<h1>Let's Talk Cupcakes</h1>

<form name="myForm" method="POST" action="handle.php">
    What is your name:
    <input type="text" name="userName" value="" required>

    <br/><br/>
    How often do you eat cupcakes?<br/>
        <input type="radio" name="frequent" value="day">Every Day<br>
        <input type="radio" name="frequent" value="weekly">Once a week<br>
        <input type="radio" name="frequent" value="twice">Twice a month<br>
        <input type="radio" name="frequent" value="month" required>Once a month<br>

    <br/>

      Which flavor would you prefer?<br/>
        <input type="radio" name="flavor" value="vanilla">Vanilla<br>
        <input type="radio" name="flavor" value="chocolate">Chocolate<br>
        <input type="radio" name="flavor" value="red">Red Velvet<br>
        <input type="radio" name="flavor" value="mint" required>Mint Chocolate Chip<br>
        
    <br/>

      What special event do you have coming up?<br/>
        <input type="radio" name="date" value="birthday">Birthday<br>
        <input type="radio" name="date" value="anniversary">Anniversary<br>
        <input type="radio" name="date" value="wedding">Wedding<br>
        <input type="radio" name="date" value="holiday" required>Holiday<br>
        
    <br/>

    
    <input type="submit" value="Submit"></input>
    </form>
    <br/><a href="surveyResults.php">See results</a>

</body>
</html>