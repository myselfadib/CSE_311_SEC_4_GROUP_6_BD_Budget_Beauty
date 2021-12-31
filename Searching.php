<?php

$db = mysqli_connect("localhost","root","","bd_budget_beauty");
/*if(!$db)
    {
        die("Connection failed: ". mysqli_connect_error());  //testing is db connected or not


    }
    else
{
    echo "Connected ". "<br>";
}*/
if(isset($_REQUEST['searchButton']))
{ 
    $searchKey = $_REQUEST['search'];
    $sql= "SELECT product_name,price,description FROM product where product_name LIKE '%$searchKey%'";
    $result = mysqli_query($db,$sql);
    $row= mysqli_num_rows($result);
    $row = $result -> fetch_assoc();
   if($row>0)
    {
        echo "<h1>".$row["product_name"]."</h1>"."<br>"."<h1>"."Price:".$row["price"]."</h1>"."<br>"."<b>"."Details about the product:"."</b>"."<br>"."<h3>".$row["description"]."</h3>";
       // header('landingPage.html');

    

    }
   


}
else
{
    echo 'No results found';
}

/*if(isset($_GET['search']) && $_GET['search'] != '')
{
    $search= trim($_GET['search']);

    $query_string="SELECT * FROM product where ";



    $keywords = explode(' ',$search);
    foreach($keywords as $word){
        $query_string .="keywords LIKE '%".$word."%' OR ";
        
    }
    $query=substr($query_string,0,strlen($query_string)-3);

    $query = mysqli_query($db,$query_string);
    $$mysqli_result = mysqli_num_rows($query);

    if (!empty($this->resource) && $this->resource !== true) {
        return @mysqli_num_rows($this->resource);
    }

    if($$mysqli_result>0)
    {
        echo '<div class="right"><b><u>'. $mysqli_result. '</u></b>Result found</div>';

    }
    else
    {
        echo 'No results found';
    }
}*/

?>