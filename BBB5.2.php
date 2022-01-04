<?php
$db = mysqli_connect("localhost","root","","bd_budget_beauty"); 


if(isset($_POST['id']))
{
//initializing user input


$user_id = $_POST['id'];
$product_name = ' GOSH ANTI POLLUTION CONDITIONER  ';
$price = 1550;
$amount = $price;


if(!empty($user_id))
{
    $id = "SELECT id from user_info where email='$user_id'";
   // $fname= "SELECT first_name from user_info where email='$email' and pass='$pass'";
   // $lname= "SELECT last_name from user_info where email='$email' and pass='$pass'";
    $result = mysqli_query($db,$id);
    $mysqli_result = mysqli_num_rows($result);
    $mysqli_result = $result -> fetch_assoc();
    $userid = $mysqli_result["id"] ;
    
    if(!$mysqli_result)
    {
        //$userInfoInsert = "INSERT INTO cart(user_id,Product_name,price,amount) VALUES ($user_id,'$product_name',$price,$amount)";
echo 'Invalid user email';




    }
    else{
        $userInfoInsert = "INSERT INTO cart(user_id,Product_name,price,amount) VALUES ($userid,'$product_name',$price,$amount)";
        if(mysqli_query($db,$userInfoInsert))

{
    date_default_timezone_set('Asia/Dhaka');
$date = date('Y-m-d H:i:s');
    $cid = "SELECT cart_id from cart where user_id='$userid' and date='$date'";
   // $fname= "SELECT first_name from user_info where email='$email' and pass='$pass'";
   // $lname= "SELECT last_name from user_info where email='$email' and pass='$pass'";
    $resulti = mysqli_query($db,$cid);
    $mysqli_resulti = mysqli_num_rows($resulti);
    $mysqli_resulti = $resulti -> fetch_assoc();
    $cartid = $mysqli_resulti["cart_id"] ;

    

}
else
{
    echo "There is an error:  . mysqli_error($db)";
}

}
    }
    
        //echo "<h1>".'Welcome '.$mysqli_result["first_name"]." ".$mysqli_result["last_name"]." to BD Budget Beauty"."</h1>";        //header('Location: afterSign}


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
    
    
        <div style="background-color:rgb(247, 48, 131); height: 400px;width: 950px;margin-top: 100px;margin-left: 150px;float: left;">
        <h1 style="color:white">ITEM HAS BEEN ADDED</h1>
        <h2>YOUR CART :</h2>
          <?php 
          
          echo "<table border='1' width='700' cellspacing='0' bgcolor='white'>";
          echo "<tr'>";
          echo"<th>User ID</th>";
          echo "<th>Cart ID</th>";
          echo "<th>Product Name</th>";
          echo "<th>Amount</th>";
          echo "</tr>";
          echo "<tr'>";
          echo"<td>".$mysqli_result["id"]."</td>";
          echo "<td>".$mysqli_resulti["cart_id"]."</td>";
          echo "<td>".$product_name."</td>";
          echo "<td>".$amount."</td>";
          echo "</tr>";
          echo "</table>";
          
          
          
          
          ?>
         
         
         

        </div> 
        
        



    
</body>
</html>