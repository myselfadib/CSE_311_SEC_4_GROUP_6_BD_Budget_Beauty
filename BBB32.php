<?php
$db = mysqli_connect("localhost","root","","bd_budget_beauty"); 


if(isset($_POST['id']))
{
//initializing user input

$user_id = $_POST['id'];
$product_name = ' EVELINE SELFIE TIME 2 IN 1 COVERING FOUNDATION  ';
$price = 850;
$amount = $price;


if(!empty($user_id))
{
    $id = "SELECT id from user_info where id='$user_id'";
   // $fname= "SELECT first_name from user_info where email='$email' and pass='$pass'";
   // $lname= "SELECT last_name from user_info where email='$email' and pass='$pass'";
    $result = mysqli_query($db,$id);
    $mysqli_result = mysqli_num_rows($result);
    $mysqli_result = $result -> fetch_assoc();
    if(!$mysqli_result)
    {
        //$userInfoInsert = "INSERT INTO cart(user_id,Product_name,price,amount) VALUES ($user_id,'$product_name',$price,$amount)";
echo 'Invalid user id';




    }
    else{
        $userInfoInsert = "INSERT INTO cart(user_id,Product_name,price,amount) VALUES ($user_id,'$product_name',$price,$amount)";
        if(mysqli_query($db,$userInfoInsert))
{
    echo "Information added";

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
<style>

table

{

border-style:solid;

border-width:2px;

border-color:black;

}
<body>
    
    
        <div style="background-color:rgb(247, 48, 131); height: 400px;width: 740px;margin-top: 100px;margin-left: 300px;float: left;">
         
         <?php //echo "added";?>
        <?php echo "<table>" ?>
 <?php echo "<tr>" ?>
  <?php echo "<th>"."User_ID"."</th>" ?>
   <?php //echo "<th>"."Cart_ID"."</th>" ?>
   <?php echo "<th>" ."Product Name"."</th>" ?>
  <?php // echo " <th>"."Date"."</th>" ?>
  <?php echo "<th>"."Amount"."</th>" ?>
  <?php echo "</tr>" ?>
  <?php echo "<tr>" ?>
  <?php echo "<td>".$user_id."</td>" ?>
  <?php  echo "<td>".$product_name."</td>" ?>
  <?php //echo "<td>".$user_id."</td>" ?>
  <?php  echo "<td>".$amount."</td>" ?>
   <?php //echo "<td>".Germany."</td>" ?>
 <?php echo "</tr>" ?>
 
<?php "</table>" ?>
         
         

        </div> 
        
        



    
</body>
</html>