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

if(isset($_POST['username']) || isset($_POST['password']))
{
//initializing user input

$username = $_POST['username'];
$pass = $_POST['password'];

if(!empty($username) && !empty($pass))
{
    $id = "SELECT id from user_info where username='$username' and password='$pass'";
    $result = mysqli_query($db,$id);
    $mysqli_result = mysqli_num_rows($result);
    if($mysqli_result)
    {
        echo 'Login successful';
    }
    else
    {
        echo 'Invalid username or passwprd';
    }


}


}

?>