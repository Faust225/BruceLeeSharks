<?php

if(isset($_POST['done'])) {
    $visibility = 'visibility: hidden';
    $absolute = 'position: absolute;
                 width: 300px;
                 height: 300px;';
    
    $pad_style = 'width: 600px;
                height: 600px;';
    
    $pad = 'pad.png';
    
    foreach ($_POST['transport'] as $car) {
        
        // write if selected val for cars
        if($car == 'volvo') {
            $first_price = 100;
            $car_img = 'volvo.png'; 
            
        } elseif ($car == 'saab') {
            $first_price = 200;
            $car_img = 'saab.png'; 
            
        }elseif($car == 'opel') {
            $first_price = 150;
            $car_img = 'opel.png'; 
            
        }elseif($car == 'audi') {
            $first_price = 400;
            $car_img = 'audi.png'; 
        }
    }
    
    
    // Swords
    foreach ($_POST['swords'] as $sword) {
        
        // write if selected val for cars
        if($sword = 'katana') {
            $second_price = 10;
            $sword_img = 'katana.png';
            
        } elseif($sword = 'sword') {
            $second_price = 16;
            $sword_img = 'sword.png';
            
        }elseif($sword = 'axe') {
             $second_price = 5;
             $sword_img = 'axe.png';
            
        }elseif($sword = 'hummer') {
             $second_price = 11;
             $sword_img = 'hummer.png';
        }
    }
    
    
        // Vegetables
    foreach ($_POST['vegetables'] as $vegetable) {
        
        // write if selected val for cars
        if($vegetable = 'potato') {
            $third_price = 1;
            $vegetable_img = 'potato.gif';
            
        } elseif($vegetable = 'apple') {
            $third_price = 3.50;
            $vegetable_img = 'apple.png';
            
        }elseif($vegetable = 'orange') {
            $third_price = 14;
            $vegetable_img = 'orange.png';
            
        }elseif($vegetable = 'cherry') {
            $third_price = 4;
            $vegetable_img = 'cherry.png';
        }
    }
    
    $sum += + $first_price + $second_price + $third_price;
    
} else {
    $sum = '';
    $pad_style = '';
    
    $pad = '';
    $absolute = '';
    
    $first_price = '';
    $car_img = '';
    
    $second_price = '';
    $sword_img = '';
    
    $third_price = '';
    $vegetable_img = '';
}
    
?>
<!DOCTYPE html> 
<html> 
    <head> 
        <title></title> 
        <meta charset="utf-8">
        <style>
            html {
                background-image: url(pizza_strike.gif);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            
            .center {
                display: flex;
                justify-content: center;
            }
            
            form {
                <?php print $visibility; ?>
            }
            
            img {
                <?php print $absolute; ?>
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            
            .pad {
                z-index:auto;
                <?php print $pad_style; ?>
            }
            
            .cars {
                z-index: 1;
            }
            
            .swords {
                z-index: 2;
            }
            
            .vegetables {
                z-index: 3;
            }
            
            .index-section {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            
            .index-nav a{
                text-decoration: none;
                color: white;
                font-size: 2vh;
                padding: 1vh;
                border: 0.1vh solid white;
            }

            .index-nav a:hover {
                background-color: white;
                color: black;
                font-weight: bold;
            }
        </style>
    </head> 
    <body>
        <header class="index-section">
            <nav class="index-nav">
                <a class="index-hover" href="/pz2apica.php">PZ2A Bruce Lee SHARKS pica</a>
                <a class="index-hover" href="/about.php">About Bruce Lee SHARKS</a>
                <a class="index-hover" href="/index.php">Is naujo i picerija</a>
            </nav>
        </header>
        <div class="center"><h1>PZDAPICA TAU!</h1></div>
        <div class="center">
            <form method="post">
                <label>Kokia tavo megstamiausia transporto priemone </label>
                <select name="transport[]">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select><br>
                <label>Kiek sluoksniu turi tavo tualetinis popierius? </label>
                <select name="swords[]">
                    <option value="katana">katana</option>
                    <option value="sword">sword</option>
                    <option value="axe">axe</option>
                    <option value="hummer">hummer</option>
                </select><br>
                <label>Kur veziai ziemoja?</label>
                <select name="vegetables[]">
                    <option value="potato">Potato</option>
                    <option value="apple">Apple</option>
                    <option value="orange">Orange</option>
                    <option value="cherry">Cherry</option>
                </select><br>
                <input type="submit" name="done">
           </form>
        </div>
        <div class="center">
            <img class="pad" src="<?php print $pad; ?>">
            <img class="cars" src="<?php print $car_img; ?>">
            <img class="swords" src="<?php print $sword_img; ?>">
            <img class="vegetables" src="<?php print $vegetable_img; ?>">
          
        </div>
        <div class="center">
            <h2><?php print $sum; ?></h2>
        </div>
    </body> 
</html> 