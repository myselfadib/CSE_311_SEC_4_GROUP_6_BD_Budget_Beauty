<?php

$db = mysqli_connect("localhost","root","","bd_budget_beauty");

/*if(!$db)
    {
        die("Connection failed: ". mysqli_connect_error());  //testing is db connected or not


    }
    else
{
    echo ";
}
*/
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
    /*$id = "SELECT id,first_name,last_name from user_info where firts_name='$first_name' and email='$email'";
   // $fname= "SELECT first_name from user_info where email='$email' and pass='$pass'";
   // $lname= "SELECT last_name from user_info where email='$email' and pass='$pass'";
    $result = mysqli_query($db,$id);
    $mysqli_result = mysqli_num_rows($result);
    $mysqli_result = $result -> fetch_assoc();*/

}
else
{
    echo "There is an error:  . mysqli_error($db)";
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
    <?php // echo  "<a style='color:pink;font-family: 'Times New Roman', Times, serif;font-weight: bolder;'>".$mysqli_result["first_name"]." ".$mysqli_result["last_name"].","."Welcome to BD BUDGET BEAUTY" ."</a>"   ?>
    <a style="font-family: 'Times New Roman', Times, serif;font-weight: bolder;color:red;font-size:30px">Welcome to BD Budget Beauty. Now you can login to our site using your email and password.</a> <br>
    <a href="SignInpage.html" >Sign IN</a>

</body>
</html>