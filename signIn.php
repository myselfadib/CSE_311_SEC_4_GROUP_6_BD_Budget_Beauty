<?php
$db = mysqli_connect("localhost","root","","bd_budget_beauty");

/*if(!$db)
    {
        die("Connection failed: ". mysqli_connect_error());  //testing is db connected or not


    }
    else
{
    echo "Connected ". "<br>";
}
*/
if(isset($_POST['email']) || isset($_POST['pass']))
{
//initializing user input

$email = $_POST['email'];
$pass = $_POST['pass'];

if(!empty($email) && !empty($pass))
{
    $id = "SELECT id from user_info where email='$email' and pass='$pass'";
    $fname= "SELECT first_name from user_info where email='$email' and pass='$pass'";
    $lname= "SELECT last_name from user_info where email='$email' and pass='$pass'";
    $result = mysqli_query($db,$id);
    $mysqli_result = mysqli_num_rows($result);
    if($mysqli_result)
    {
        echo "Welcome to BD Budget Beauty";
        
    }
    else
    {
        echo 'Invalid username or password';
    }


}


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    
</body>
</html>
