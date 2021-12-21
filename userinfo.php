<?php
//connecting db
$db = mysqli_connect("localhost","root","","bd_budget_beauty");

if(!$db)
    {
        die("Connection failed: ". mysqli_connect_error());  //testing is db connected or not


    }
    else
{
    echo "Connected ". "<br>";
}

//creating table
$sql1 = "CREATE TABLE user_info(id int(50) PRIMARY KEY not null auto_increment , first_name varchar(40) not null,last_name varchar(40) not null,email varchar(50) not null,phone_no int(11) not null,pass varchar(50) not null)";
if(mysqli_query($db,$sql1))
{
    echo "Table has been created";

}
else
{
    echo "There is an error:  . mysqli_error($db)";
}
/*
//initializing user input
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phoneNo'];
$pass = $_POST['password'];

//insert in table

$userInfoInsert = "INSERT INTO user_info(first_name,last_name,email,phone_no,pass) VALUES ('$first_name','$last_name','$email',$phone,$pass)";
*/


?>