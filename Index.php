<!DOCTYPE html>
<html lang="en">
<head>
<?php
error_reporting(0);
$precos= array (0,65,85,70); //hotels prices
$preco= "";
$hotelPHP = $_GET["hotel"];
$checkinPHP = $_GET["checkin"];
$checkoutPHP = $_GET["checkout"];
$date1 = strtotime($checkinPHP);
$date2 = strtotime($checkoutPHP);
$days = ($date2-$date1)/86400; // subtraction by dividing by total seconds in a day, gives result in days and not in seconds

switch($hotelPHP){
    case 1:
        $preco = $precos[1];
        break;
    case 2:
        $preco = $precos[2];
        break;
    case 3:
        $preco = $precos[3];
        break;
    }
    $total = (int)$days * (int)$preco;
    
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet"> 
    <title>Prices</title>
    
    <link rel="stylesheet" href="./css.css">
</head>
<body>
    <!--choose hotel-->    
    <div class="container">
    <form name="form" id="form" method="GET" action=""> 
        <h1 class="heading">Eurodollars calculation</h1>
        <select name="hotel" id="hotel" onchange="loadHotel(this)">
            <option value="0">Choose an hotel</option>
            <option value="1">Konpeki Plaza</option>
            <option value="2">The Havenford</option>
            <option value="3">Pacifica</option>
        </select>
    <!--shows the faction -->
            <input type="text" disabled placeholder="Faction" id="faction">
    <!--check in / out dates -->

            <p class="heading">Check-In</p>
            <input type="date" id="checkin" name="checkin">
            <p>Check-out</p> 
            <input type="date" id="checkout" name="checkout"> 
            <input type="submit" value="Calculate" class="submit-button" target="_blank">
    <!--Shows total price-->
            <p id="total">Price: <?php echo "$total" ?> €.</p>
    </form>
    
    <script>

        function loadHotel(id){
           var v = document.getElementById("hotel")
           var faction = v.value;
           switch(faction){
               case "1":
                   document.getElementById("faction").value = "Arasaka";
                   document.getElementById("faction").disabled = false;
                   break;
               case "2":
                   document.getElementById("faction").value= "Maelstrom";
                   document.getElementById("faction").disabled = false;
                   break;
               case "3":
                   document.getElementById("faction").value= "Moxes";
                   document.getElementById("faction").disabled= false;
                   break;
           }
           
       }

   </script>
    
    </div>
    
</body>
</html>
