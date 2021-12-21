<?php

$db = mysqli_connect("localhost","root","","bd_budget_beauty");

if(!$db)
    {
        die("Connection failed: ". mysqli_connect_error());  //testing is db connected or not


    }
    else
{
    echo "Connected ". "<br>";
}
if(isset($_POST['fname']) || isset($_POST['lname']) || isset($_POST['email']) || isset($_POST['phoneNo']) || isset($_POST['pass']))
{
//initializing user input
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phoneNo'];
$pass = $_POST['pass'];

//insert in table

$userInfoInsert = "INSERT INTO user_info(first_name,last_name,email,phone_no,pass) VALUES ('$first_name','$last_name','$email',$phone,'$pass')";

if(mysqli_query($db,$userInfoInsert))
{
    echo "Information added";

}
else
{
    echo "There is an error:  . mysqli_error($db)";
}

}






?>