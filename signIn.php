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
    $id = "SELECT id,first_name,last_name from user_info where email='$email' and pass='$pass'";
   // $fname= "SELECT first_name from user_info where email='$email' and pass='$pass'";
   // $lname= "SELECT last_name from user_info where email='$email' and pass='$pass'";
    $result = mysqli_query($db,$id);
    $mysqli_result = mysqli_num_rows($result);
    $mysqli_result = $result -> fetch_assoc();
    if(!$mysqli_result)
    {
        header("Location:Invalidpass.html");


    }
    
        //echo "<h1>".'Welcome '.$mysqli_result["first_name"]." ".$mysqli_result["last_name"]." to BD Budget Beauty"."</h1>";        //header('Location: afterSign}


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

<form action="Searching.php" method="post">
        <div style="background-color:rgb(247, 48, 48); height: 50px;width: 1270px;margin-top: -8px;margin-left: -8px;">
            <input type="text" name="search" id="search" placeholder="Search here" style="width: 220px; height: 28px;margin-top: 10px;margin-left: 20px;">
            <input type="submit" name="searchButton" id="searchButton" value="Search" style="height: 20px;width: 60px; margin-left: 02px; ">
        </form>
           <!-- <a title="Login for further procedure" href="loginPage.html" style="color: rgb(253, 249, 249); margin-left: 700px; font-family: 'Times New Roman', Times, serif;font-weight: bold;text-decoration: none;">Login/Signup</a> -->
           <?php 
           
            echo "<a style='color:white;margin-left: 700px;font-family: 'Times New Roman', Times, serif;font-weight: bolder;'>".$mysqli_result["first_name"]." ".$mysqli_result["last_name"]."</a>"; 
            //echo "hi";

           
           ?>
           <?php //echo 'Hi';?>
            <a title="View what you have added" href="#" style="margin-left: 10px;color: rgb(253, 250, 250);font-weight: bold;font-family: 'Times New Roman', Times, serif;text-decoration: none;">🛒 Cart</a>

        </div>
        
        <div style="height: 200px;background-color: white;width: 1300;margin-left: -8px;">
            <a href="landingPage.html" style="text-decoration: none;color: black;"><p1 style="margin-left: 575px; font-weight: bolder; font-size: 480%;margin-top: -06px;">𝕭𝕭𝕭</p1></a>
            <a style="font-family: 'Times New Roman', Times, serif;padding-left:578px ;font-size: 100%;font-weight: bold;padding-top: -50px;">Be the best version of you</a>
           <a href="#"> <img title="Follow us on Facebook" src="facebook.jpg" style="height: 20px;width: 20px;padding-left: 280px;"></a>
           <a href="#"> <img title="Subscribe to our channel to be updated!" src="youtube.jpg" style="height: 22px;width: 22px;padding-left: 14px;"> </a>
            <a href="#"><img title="Follow us on Instagram" src="instagram.jpg" style="height: 20px;width: 20px;padding-left: 14px;"></a>
           <a href="#"> <img title="Email us if you have any queries" src="email.jpg" style="height: 20px;width: 20px;padding-left: 14px;"></a>

        </div>
<!--
        <div>
            <a href="#" style="text-decoration: none; color: red; font-family: 'Times New Roman', Times, serif;font-weight: bolder;margin-top: -7px;margin-left: 60px;">HOT SELLERS!</a>
            <a style="text-decoration: none;font-weight: bolder;font-size: 150%;margin-left: 15px;">|</a>
            <a href="#" style="text-decoration: none;color: red; font-family: 'Times New Roman', Times, serif;font-weight: bolder;margin-top: -7px;margin-left: 10px;">YOU MAY LIKE</a>
            <a style="font-weight: bolder;font-size: 150%;margin-left: 15px;">|</a>
            <a href="#" style="text-decoration: none;color: red; font-family: 'Times New Roman', Times, serif;font-weight: bolder;margin-top: -7px;margin-left: 10px;">VISIT OUR SHOWROOM</a>
        </div>-->

        <div>
            <a href="BBB1.HTML"><img src="BBB1.jpg" style="height: 350px;width: 400px;margin-left: 0px;"></a>
            <a href="BBB2.HTML"><img src="bbb2.jpg" style="height: 350px;width: 400px;margin-left: -4pxpx;"></a>
            <a href="BBB3.HTML"><img src="bbb3.jpg" style="height: 350px;width: 400px;margin-left: -4pxpx;"></a>
        </div>

        <div style="background-color: rgb(253, 249, 249);height: 200px;width: 1260px;">
            <div style="background-color: rgb(255, 255, 255);height: 200px;width: 403px;float: left; margin-top: 20px;">
                <a href="#" style="color: rgb(14, 13, 13);margin-top: 10px; text-decoration: none;"><p1  style="color: black;font-weight: bolder;margin-left: 20px;font-family: sans-serif;font-size: 130%">GET READY WITH MAKEUP FROM TOP EUROPEAN AND INTERNATIONAL</p1>
                <p1 style="color: black;font-weight: bolder;margin-left: 150px;font-family: sans-serif;font-size: 130%">Brands</a>
                </a><br><br>
                <a style="color: black;margin-left: 20px;font-family: sans-serif; text-decoration: none;">Lot's Of Exciting Offers On All Exclusive Brands. 🙆‍♀️</a><br>
                <a style="color: black;font-family: sans-serif;margin-left: 5px;text-decoration: none;">🙆‍♀️ Explore Something New & Be The Best Version</a><br>
                <a style="color: black;font-family: sans-serif;margin-left: 150px;text-decoration: none;">Of You 💃💃❤️</a>
                
            </div>
            <div style="width: 403px;height: 200px;background-color: white;float: left;margin-top: 20px;">
                <a href="#" style="color: black;margin-top: 10px;text-decoration: none;"><p1  style="color: black;font-weight: bolder;margin-left: 20px;font-family: sans-serif;font-size: 130%">TRY OUR EXCLUSIVE HAIR CARE RANGE FROM TOP BEAUTY BRANDS</p1>
                    <p1 style="color: black;font-weight: bolder;margin-left: 150px;font-family: sans-serif;font-size: 130%">Brands</a>
                    </a><br><br>
                    <a style="color: black;margin-left: 20px;font-family: sans-serif;">Shop for the best Hair Care products from top</a><br>
                    <a style="color: black;font-family: sans-serif;margin-left: 5px;">quality brands at the best price❤️😍😃  Achieve</a><br>
                    <a style="color: black;font-family: sans-serif;margin-left: 10px;">Your Hair Goals & Be The Best Version Of You 😍</a>
            
            </div>
            <div style="float: right;width: 452px;height: 200px;background-color: white;margin-top: 20px;">
                <a href="#" style="text-decoration: none; color: black;margin-top: 10px;"><p1  style="color: black;font-weight: bolder;margin-left: 60px;font-family: sans-serif;font-size: 130%">INDULGE YOUR BODY WITH</p1>
                    <p1 style="color: black;font-weight: bolder;margin-left: 150px;font-family: sans-serif;font-size: 130%">FRESHNESS</a>
                    </a><br><br>
                    <a style="color: black;margin-left: 35px;font-family: sans-serif;">Shop for the best quality premium Body Care</a><br>
                    <a style="color: black;font-family: sans-serif;margin-left: 26px;">products from top quality brands at the best price</a><br>
                    <a style="color: black;font-family: sans-serif;margin-left: 10px;">❤️😍😃stay refresh & beautiful all the day with</a><BR>
                    <a style="color: black;font-family: sans-serif;margin-left: 60px;">BBB exclusive Body care Range 😍😍</a>
            
            </div>

            <h1 style="text-align: center;">♥YOUR FAVOURITE BRANDS♥ Exclusively Available @ BBB 💃😍</h1>
            <hr>


        </div>
        <br>
        <div style="background-color: white;height: 580px;width: 1270px;margin-top: 80px;">
            <div style="background-color: white;height: 570px;width: 650px;float: left;">
                <a href="EvalineMakeup.html">
                    <?php// header("Location:EvelineMakeup.php"); ?>
                    <img src="bbb4.jpg" style="height: 500px;width: 540px; margin-left: 50px;box-shadow:0 0 2px 1px black;">
                    <br><a style="font-style: normal;font-family: sans-serif;font-weight: bold;margin-left: 250px;">Eveline Makeup</a>
                </a>

            </div>


            <div style="float: left;height: 570px;width: 610px;background-color: white;">
                <a href="GOSH_COPEN.HTML">
                    <img src="bbb5.jpg" style="height: 500px;width: 540px;box-shadow:0 0 2px 1px rgb(10, 10, 10)">
                    <br><a style="font-style: normal;font-family: sans-serif;font-weight: bold;margin-left: 200px;">Gosh Copenhagen</a>
                </a>

            </div>


        </div>

        <div style="background-color: white;height: 580px;width: 1270px;margin-top: 80px;">
            <div style="background-color: white;height: 570px;width: 650px;float: left;">
                <a href="EvelineCare.html">
                    <img src="bbb6.jpg" style="height: 500px;width: 540px; margin-left: 50px;box-shadow:0 0 2px 1px black;">
                    <br><a style="font-style: normal;font-family: sans-serif;font-weight: bold;margin-left: 250px;">Eveline Care</a>
                </a>

            </div>


            <div style="float: left;height: 570px;width: 610px;background-color: white;">
                <a href="Bielenda.html">
                    <img src="bbb7.jpg" style="height: 500px;width: 540px;box-shadow:0 0 2px 1px rgb(10, 10, 10)">
                    <br><a style="font-style: normal;font-family: sans-serif;font-weight: bold;margin-left: 230px;">Bielenda</a>
                </a>

            </div>


        </div>
<!--
        <div style="background-color: white;height: 580px;width: 1270px;margin-top: 80px;">
            <div style="background-color: white;height: 570px;width: 650px;float: left;">
                <a href="#">
                    <img src="bbb8.jpg" style="height: 500px;width: 540px; margin-left: 50px;box-shadow:0 0 2px 1px black;">
                    <br><a style="font-style: normal;font-family: sans-serif;font-weight: bold;margin-left: 250px;">Isabelle Dupont</a>
                </a>

            </div>


            <div style="float: left;height: 570px;width: 610px;background-color: white;">
                <a href="#">
                    <img src="bbb9.jpg" style="height: 500px;width: 540px;box-shadow:0 0 2px 1px rgb(10, 10, 10)">
                    <br><a style="font-style: normal;font-family: sans-serif;font-weight: bold;margin-left: 230px;">Lottie London</a>
                </a>

            </div>
        -->


        </div>
        <br>
        <h1 style="text-align: center;">♥SHOP BY YOUR SKIN CONCERN♥</h1>
        <hr>
        <div style="height: 320px;width: 1250px;background-color:white;">

            <div style="background-color:white;height: 270px;width: 312.5px;float: left;">
                <a href="suntanRemoval.html">
                    <img src="bbb10.jpg" style="height: 270px;margin-left: 20px; width: 300pxpx;box-shadow:0 0 2px 1px rgb(10, 10, 10)">
                    <br><a style="font-style: normal;font-family: sans-serif;font-weight: bold;text-align: center;margin-left: 30px;">Suntan Removal & Brightening</a>
                </a>

            </div>

            <div style="background-color:white;height: 270px;width: 312.5px;float: left;">
                <a href="ACNE.html">
                    <img src="bbb11.jpg" style="height: 270px;margin-left: 20px; width: 300pxpx;box-shadow:0 0 2px 1px rgb(10, 10, 10)">
                    <br><a style="font-style: normal;font-family: sans-serif;font-weight: bold;text-align: center;margin-left: 133px;">Acne</a>
                </a>

            </div>

            <div style="background-color:white;height: 270px;width: 312.5px;float: left;">
                <a href="oilControl.html">
                    <img src="bbb12.jpg" style="height: 270px;margin-left: 20px; width: 300pxpx;box-shadow:0 0 2px 1px rgb(10, 10, 10)">
                    <br><a style="font-style: normal;font-family: sans-serif;font-weight: bold;text-align: center;margin-left: 115px;">Oil Control</a>
                </a>



            </div>

            <div style="background-color:white;height: 270px;width: 312.5px;float: left;">
                <a href="Dryness.html">
                    <img src="bbb13.jpg" style="height: 270px;margin-left: 20px; width: 300pxpx;box-shadow:0 0 2px 1px rgb(10, 10, 10)">
                    <br><a style="font-style: normal;font-family: sans-serif;font-weight: bold;text-align: center;margin-left: 125px;">Dryness</a>
                </a>

            </div>


        </div>

        <!--

        <div style="height: 303px;width: 1250px;background-color:white;">

            <div style="background-color:white;height: 270px;width: 312.5px;float: left;">
                <a href="#">
                    <img src="bbb14.jpg" style="height: 270px;margin-left: 20px; width: 300pxpx;box-shadow:0 0 2px 1px rgb(10, 10, 10)">
                    <br><a style="font-style: normal;font-family: sans-serif;font-weight: bold;text-align: center;margin-left: 75px;">Pores & Blackheads</a>
                </a>

            </div>

            <div style="background-color:white;height: 270px;width: 312.5px;float: left;">
                <a href="#">
                    <img src="bbb15.jpg" style="height: 270px;margin-left: 20px; width: 300pxpx;box-shadow:0 0 2px 1px rgb(10, 10, 10)">
                    <br><a style="font-style: normal;font-family: sans-serif;font-weight: bold;text-align: center;margin-left: 110px;">Under Eyes</a>
                </a>

            </div>

            <div style="background-color:white;height: 270px;width: 312.5px;float: left;">
                <a href="#">
                    <img src="bbb16.jpg" style="height: 270px;margin-left: 20px; width: 300pxpx;box-shadow:0 0 2px 1px rgb(10, 10, 10)">
                    <br><a style="font-style: normal;font-family: sans-serif;font-weight: bold;text-align: center;margin-left: 115px;">Sensitivity</a>
                </a>



            </div>

            <div style="background-color:white;height: 270px;width: 312.5px;float: left;">
                <a href="#">
                    <img src="bbb17.jpg" style="height: 270px;margin-left: 20px; width: 300pxpx;box-shadow:0 0 2px 1px rgb(10, 10, 10)">
                    <br><a style="font-style: normal;font-family: sans-serif;font-weight: bold;text-align: center;margin-left: 120px;">Anti-Aging</a>
                </a>

            </div>
        -->

        </div>
        <h1 style="text-align: center;">YOU MAY LIKE</h1>
            <hr>

            <div style="background-color:white;height: 455px;width: 1250px;margin-left: 10px;">

                <div style="float: left;background-color: white;height: 290px;width: 312px;">
                    <img src="BBB31.jpg" style="width: 312px;height: 290px;">
                    <button style="height: 50PX;width: 100PX;margin-left: 90PX;background-color: rgb(255, 21, 157);;">QUICK SHOP</button>
                <BR><br><a style="margin-left: 20PX;">GOSH DEXTREME HIGH COVERAGE</a>
                    <a style="text-align: center;margin-left: 104px;">POWDER</a><br><br>
                    <a style="font-weight: bolder; margin-left: 100px;">TK 1,650.00</a>

                
                
                </div>

                <div style="float: left;background-color: white;height: 290px;width: 312px;">
                    <img src="BBB32.jpg" style="width: 312px;height: 290px;">
                    <button style="height: 50PX;width: 100PX;margin-left: 105PX;background-color: rgb(255, 21, 157);">QUICK SHOP</button>
                    <BR><br><a style="margin-left: 50PX;">EVELINE SELFIE TIME 2 IN 1 </a>
                        <a style="text-align: center;margin-left: 64px;">COVERING FOUNDATION</a><br><br>
                        <a style="font-weight: bolder; margin-left: 120px;">TK 850.00</a>
                
                </div>

                <div style="float: left;background-color: white;height: 290px;width: 312px;">
                    <img src="BBB33.jpg" style="width: 312px;height: 290px;">
                    <button style="height: 50PX;width: 100PX;margin-left: 100PX;background-color: rgb(255, 21, 157);">QUICK SHOP</button>
                    <BR><br><a style="margin-left: 50PX;">BIELENDA BLUEBERRY C-TOX </a>
                        <a style="text-align: center;margin-left: 44px;">Brightening FACE WASH ALL SKIN</a><br><br>
                        <a style="font-weight: bolder; margin-left: 120px;">TK 1,200.00</a>
                
                
                </div>

                <div style="float: left;background-color: white;height: 290px;width: 312px;">
                    <img src="BBB34.jpg" style="width: 312px;height: 290px;">
                    <button style="height: 50PX;width: 100PX;margin-left: 100PX;background-color: rgb(255, 21, 157);">QUICK SHOP</button>
                    <BR><br><a style="margin-left: 50PX;">RUDE- STAR PARTY LIQUID  </a>
                        <a style="text-align: center;margin-left: 54px;">EYESHADOW - SOLSTICE</a><br><br>
                        <a style="font-weight: bolder; margin-left: 120px;">TK 1,250.00</a>
                
                
                </div>

            </div>

            <div style="background-color:white;height: 455px;width: 1250px;margin-left: 10px;">

                <div style="float: left;background-color: white;height: 290px;width: 312px;">
                    <img src="BBB35.jpg" style="width: 312px;height: 290px;">
                    <button style="height: 50PX;width: 100PX;margin-left: 90PX;background-color: rgb(255, 21, 157);;">QUICK SHOP</button>
                <BR><br><a style="margin-left: 20PX;">GOSH HIGH COVERAGE CONCEALER</a>
                    <a style="text-align: center;margin-left: 104px;">POWDER</a><br><br>
                    <a style="font-weight: bolder; margin-left: 100px;">TK 1,490.00</a>

                
                
                </div>

                <div style="float: left;background-color: white;height: 290px;width: 312px;">
                    <img src="BBB36.jpg" style="width: 312px;height: 290px;">
                    <button style="height: 50PX;width: 100PX;margin-left: 105PX;background-color: rgb(255, 21, 157);">QUICK SHOP</button>
                    <BR><br><a style="margin-left: 50PX;">EVELINE ART MAKE-UP ANTI  </a>
                        <a style="text-align: center;margin-left: 10px;">SHINE COMPLEX PRESSED POWDER</a><br><br>
                        <a style="font-weight: bolder; margin-left: 120px;">TK 850.00</a>
                
                </div>

                <div style="float: left;background-color: white;height: 290px;width: 312px;">
                    <img src="BBB37.jpg" style="width: 312px;height: 290px;">
                    <button style="height: 50PX;width: 100PX;margin-left: 100PX;background-color: rgb(255, 21, 157);">QUICK SHOP</button>
                    <BR><br><a style="margin-left: 50PX;">BIELENDA SMOOTHY CREAM </a>
                        <a style="text-align: center;margin-left: 14px;">PREBIOTIC CREAMY FOAM FACE WASH</a><br><br>
                        <a style="font-weight: bolder; margin-left: 120px;">TK 1,250.00</a>
                
                
                </div>

                <div style="float: left;background-color: white;height: 290px;width: 312px;">
                    <img src="BBB38.jpg" style="width: 312px;height: 290px;">
                    <button style="height: 50PX;width: 100PX;margin-left: 100PX;background-color: rgb(255, 21, 157);">QUICK SHOP</button>
                    <BR><br><a style="margin-left: 50PX;">RUDE- STAR PARTY LIQUID  </a>
                        <a style="text-align: center;margin-left: 34px;">EYESHADOW - SHE'S A STAR</a><br><br>
                        <a style="font-weight: bolder; margin-left: 120px;">TK 1,250.00</a>
                
                
                </div>

            </div>

            <div style="background-color:white;height: 455px;width: 1250px;margin-left: 10px;">

                <div style="float: left;background-color: white;height: 290px;width: 312px;">
                    <img src="BBB39.jpg" style="width: 312px;height: 290px;">
                    <button style="height: 50PX;width: 100PX;margin-left: 90PX;background-color: rgb(255, 21, 157);;">QUICK SHOP</button>
                <BR><br><a style="margin-left: 20PX;">RUDE STAR PARTY LIQUID</a>
                    <a style="text-align: center;margin-left: 24px;">EYESHADOW- FALLING STAR</a><br><br>
                    <a style="font-weight: bolder; margin-left: 100px;">TK 1,250.00</a>

                
                
                </div>

                <div style="float: left;background-color: white;height: 290px;width: 312px;">
                    <img src="BBB40.jpg" style="width: 312px;height: 290px;">
                    <button style="height: 50PX;width: 100PX;margin-left: 105PX;background-color: rgb(255, 21, 157);">QUICK SHOP</button>
                    <BR><br><a style="margin-left: 50PX;">EVELINE BIO BURDOCK THERAPY  </a>
                        <a style="text-align: center;margin-left: 90px;">BIOACTIVE SHAMPOO</a><br><br>
                        <a style="font-weight: bolder; margin-left: 120px;">TK 1,000.00</a>
                
                </div>

                <div style="float: left;background-color: white;height: 290px;width: 312px;">
                    <img src="BBB41.jpg" style="width: 312px;height: 290px;">
                    <button style="height: 50PX;width: 100PX;margin-left: 100PX;background-color: rgb(255, 21, 157);">QUICK SHOP</button>
                    <BR><br><a style="margin-left: 50PX;">CIATE LONDON THE EDITOR </a>
                        <a style="text-align: center;margin-left: 114px;">PALETTE</a><br><br>
                        <a style="font-weight: bolder; margin-left: 120px;">TK 4,500.00</a>
                
                
                </div>

                <div style="float: left;background-color: white;height: 290px;width: 312px;">
                    <img src="BBB42.jpg" style="width: 312px;height: 290px;">
                    <button style="height: 50PX;width: 100PX;margin-left: 100PX;background-color: rgb(255, 21, 157);">QUICK SHOP</button>
                    <BR><br><a style="margin-left: 50PX;">EVELINE VELVET MATT LIPSTICK  </a>
                        <a style="text-align: center;margin-left: 124px;">NO. 511</a><br><br>
                        <a style="font-weight: bolder; margin-left: 120px;">TK 690.00</a>
                
                
                </div>

            </div>

            <div style="background-color:white;height: 455px;width: 1250px;margin-left: 10px;">

                <div style="float: left;background-color: white;height: 290px;width: 312px;">
                    <img src="BBB43.jpg" style="width: 312px;height: 290px;">
                    <button style="height: 50PX;width: 100PX;margin-left: 90PX;background-color: rgb(255, 21, 157);;">QUICK SHOP</button>
                <BR><br><a style="margin-left: 20PX;">BIELENDA BLUEBERRY C-TOX</a>
                    <a style="text-align: center;margin-left: 10px;">MOISTURIZING & BRIGHTENING MASK</a><br><br>
                    <a style="font-weight: bolder; margin-left: 100px;">TK 250.00</a>

                
                
                </div>

                <div style="float: left;background-color: white;height: 290px;width: 312px;">
                    <img src="BBB44.jpg" style="width: 312px;height: 290px;">
                    <button style="height: 50PX;width: 100PX;margin-left: 105PX;background-color: rgb(255, 21, 157);">QUICK SHOP</button>
                    <BR><br><a style="margin-left: 50PX;">EVELINE CONTOUR STROBING </a>
                        <a style="text-align: center;margin-left: 70px;">SENSATION 4 PALETTE</a><br><br>
                        <a style="font-weight: bolder; margin-left: 120px;">TK 1,550.00</a>
                
                </div>

                <div style="float: left;background-color: white;height: 290px;width: 312px;">
                    <img src="BBB45.jpg" style="width: 312px;height: 290px;">
                    <button style="height: 50PX;width: 100PX;margin-left: 100PX;background-color: rgb(255, 21, 157);">QUICK SHOP</button>
                    <BR><br><a style="margin-left: 50PX;">RUDE STAR PARTY LIQUID </a>
                        <a style="text-align: center;margin-left: 14px;">EYESHADOW GALACTIC VOYAGE</a><br><br>
                        <a style="font-weight: bolder; margin-left: 120px;">TK 1,250.00</a>
                
                
                </div>

                <div style="float: left;background-color: white;height: 290px;width: 312px;">
                    <img src="BBB46.jpg" style="width: 312px;height: 290px;">
                    <button style="height: 50PX;width: 100PX;margin-left: 100PX;background-color: rgb(255, 21, 157);">QUICK SHOP</button>
                    <BR><br><a style="margin-left: 50PX;">GOSH DEXTREME FULL  </a>
                        <a style="text-align: center;margin-left: 34px;">COVERAGE FOUNDATION</a><br><br>
                        <a style="font-weight: bolder; margin-left: 120px;">TK 1,950.00</a>
                
                
                </div>

            </div>

            


            


            <h1 style="text-align: center;">~BBB Exclusive Brands~</h1>

            <div style="background-color:white;height: 385PX;width: 1250PX;">
                <div style="float: left;background-color: white;height: 80px;width: 270px; margin-left: 40px;">
                    <a href="#">
                        <img src="bbb18.jpg" style="height: 90px;">
                    </a>

                </div>

                <div style="float: left;background-color:white;height: 80px;width: 270px; margin-left: 40px;">
                    <a href="#">
                        <img src="bbb19.jpg" style="height: 90px; width: 260px;">
                        
                    </a>

                </div>

                <div style="float: left;background-color:white;height: 80px;width: 270px; margin-left: 40px;">
                    <a href="#">
                        <img src="bbb20.jpg" style="width:250px; height: 90px;">
                    </a>

                </div>

                <div style="float: left;background-color:white;height: 80px;width: 270px; margin-left: 40px;">
                    <a href="#">
                        <img src="bbb21.jpg" style="width:250px; height: 90px;">
                    </a>

                </div>

                <div style="float: left;background-color:white;height: 80px;width: 270px; margin-left: 40px;margin-top: 30px;">
                    <a href="#">
                        <img src="bbb22.jpg" style="width:250px; height: 90px;">
                    </a>

                </div>

                <div style="float: left;background-color:white;height: 80px;width: 270px; margin-left: 40px;margin-top: 30px;">
                    <a href="#">
                        <img src="bbb23.jpg" style="width:250px; height: 90px;">
                    </a>

                </div>

                <div style="float: left;background-color:white;height: 80px;width: 270px; margin-left: 40px;margin-top: 30px;">
                    <a href="#">
                        <img src="bbb24.jpg" style="width:250px; height: 90px;">
                    </a>

                </div>

                <div style="float: left;background-color:white;height: 80px;width: 270px; margin-left: 40px;margin-top: 30px;">
                    <a href="#">
                        <img src="bbb25.jpg" style="width:250px; height: 90px;">
                    </a>

                </div>

                <div style="float: left;background-color:white;height: 80px;width: 270px; margin-left: 160px;margin-top: 30px;">
                    <a href="#">
                        <img src="bbb26.jpg" style="width:250px; height: 90px;">
                    </a>

                </div>

                <div style="float: left;background-color:white;height: 80px;width: 270px; margin-left: 40px;margin-top: 30px;">
                    <a href="#">
                        <img src="bbb27.jpg" style="width:250px; height: 90px;">
                    </a>

                </div>

                <div style="float: left;background-color:white;height: 80px;width: 270px; margin-left: 40px;margin-top: 30px;">
                    <a href="#">
                        <img src="bbb28.jpg" style="width:200px; height: 110px;">
                    </a>

                </div>

            </div><br><n>

            <p1 style="font-family: sans-serif;font-weight: 600%; font-size: large; margin-top: 10px;">Welcome to <b> BD Budget Beauty (BBB)</b>, the official and <b>Sole</b> distributor of some of the best and most famous brands from all over Europe and USA. Which means you can find <b>Authentic</b> and <b>Original</b> cosmetics products of these brands <b>Freshly Manufactured</b> at the best price <b>only</b> from <b>BBB</b> retail stores, distribution points and online store in Bangladesh.</p1>
            <br><br><br><p1 style="font-family: sans-serif;font-weight: 600%; font-size: large; margin-top: 10px;">Providing our customers with the <b>best quality</b> products and <b>service<b> is a priority for us. The <b>unique</b> range of products and brands along with <b>great & intimate</b> customer service make<b> BBB</b> the <b>best cosmetics store</b> in Bangladesh.</p1>
            <br><br><br><p1 style="font-family: sans-serif;font-weight: 600%; font-size: large; margin-top: 10px;">Buy directly from trusted sources of <b>BBB</b> to avail 100% <b>Authentic</b> products from our <b>Exclusive</b> brands ❤️.</p1>

            <h1 style="text-align: center;"><a href="#" style="text-decoration: none;color: black;">FOllOW BBB ON INSTAGRAM</a></h1>
            <hr>

            <div style="background-color: rgb(247, 48, 48); width: 1250px;height: 400px; margin-top: 40px;">
                <br>
                <div style="height: 200px;width: 300px;margin-top: 20px;float: left;">
                <a style="color:white;padding-top: 20px;margin-left: 38px;font-family: sans-serif;font-size: x-large;font-weight: bold;">Information & Legal</a>
                <br><br>
                <a href="#" style="text-decoration: none;margin-left: 80px;color: white;">Terms of Service</a><br>
                <a href="#" style="text-decoration: none;margin-left: 90px;color: white;">Privacy Policy</a><br>
                <a href="#" style="text-decoration: none;margin-left: 110px;color: white;">About us</a><br>
                </div>
                <div style="height: 200px;width: 400px;margin-left: 110px;float: left; margin-top: 20px;">
                    <a style="color: white;font-size:x-large; margin-left: 60px;font-family: sans-serif;">Sign up for our newsletter</a><br><br>
                    
                    <a style="margin-left: 40px;font-size: small;color: white;">Sign up to get the latest on sales, new releases and more…</a>
                    <br><br>
                    <a href="signUpPage.html" style="text-decoration: none;color: white;margin-left: 160px;font-size: x-large;"   >Sign up</a>

                </div>

                <div style="height: 200px;width: 300px;margin-left: 100px;float: left;margin-top: 20px;">
                    <a style="color: white;font-size:x-large; margin-left: 90px;font-family: sans-serif;">Contact us</a>
                    <br><br>
                    <a style="margin-left: 40px;color: white;">Contact us at : 01723321346 or</a><br>
                    <a style="color: white;margin-left: 45px;">email us at : bbb@gmail.com </a>
                    <a style="margin-left: 95px;color: white;">for any queries</a>

                </div>
                <hr style="width: 1090px;">

                <br>
                <a style="color: white;margin-left: 500px;">&copy 2021 BD Budget Beauty (BBB)</a>


            </div>

    
</body>
</html>
