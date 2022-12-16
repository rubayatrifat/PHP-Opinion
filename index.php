<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
   <?php
        

        if(isset($_POST['submit'])){
            $d_of_user = $_POST['your_number'];
            $rahim = $d_of_user;


                if($rahim > 100){
                echo "<p class='txt'>The number you received is not correct. </p>";
                }elseif($rahim >= 90 && $rahim <= 100){
                    echo "<p class='txt'> Very good. </p>";
                }elseif($rahim <= 89 && $rahim >= 80){
                    echo "<p class='txt'> Good . </p>";
                }elseif($rahim <= 79 && $rahim >= 70){
                    echo "<p class='txt'>The estimate is good.</p>";
                }elseif($rahim <= 69 && $rahim >= 40){
                    echo "<p class='txt'>Must do better. </p>";
                }elseif($rahim <= 39 && $rahim >= 33){
                    echo "<p class='txt'> Not so good. </p>";
                }elseif($rahim < 33 && $rahim > 0){
                    echo "<p class='txt'> Unfortunately you could not pass. </p>";
                }elseif($rahim < 0){
                    echo " <p class='txt'> The number you received is not correct.</p> ";
                }

        }  

        

   ?>
  
  

   <form action="" method="POST">
     <h1>See the opinion of php in your result .</h1>  
     <input type="text" class="input-txt" name="your_number" placeholder="Please Type A Number">
     <?php
     if(isset($_POST['your_number'])){
        if(empty($rahim)){
                    $empty_field = "<p class='allert'> Input Field Is Empty ! </p>" ;
                    echo $empty_field;
                }
     }
     ?>
     <input type="submit" class="input-sub" value="Submit" name="submit"> 
     <p><b>Description :</b>You Can Write your exam number into the input filed. php give you a output about your examination.</p>
   </form>
   




</body>
</html>