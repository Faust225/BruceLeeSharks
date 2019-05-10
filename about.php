<?php

//dideja skaicius
if (isset($_POST['faktai'])) {
    $result = ++$_POST['faktai'];
} else {
    $result = 0;
}

if($result >= 6) {
    $result = 0;
}

//dauginasi faktai
$facts = [
    '',
    'We love pica',
    'WE HATE PINEAPPLES!!!',
    'The guy in white T-shirt has no idea what hes doing',
    'We have 2 profesionals Shrek and a donkey',
    'Mayonnaise is not an instrument'
];

if ($result > 0 && $result <= 5) {
    $spausdinam = $facts[$result];
} else {
    $spausdinam = '';
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>About</title>
        <style>
            body{
                background-image: url(https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fbestanimations.com%2FFood%2FFastFood%2FPizza%2Fpizza-animated-gif-17.gif&f=1);
                width: 100%;
                background-repeat: no-repeat;
                background-size:100% 100%;
            }
            .center{
                display: flex;
                flex-direction: column;
                flex-wrap: nowrap;
                justify-content: flex-start;
                align-items: center;
                align-content: stretch;
                padding-bottom: 20px;
            }
            nav{
                text-align: center;
                font-size: 20px;
                padding: 10px;
                width: 30%;
                top: 0px;
                background-color: white;
                position: sticky;
            }
            a{
                color: white;
                text-decoration: none;
                padding-left: 30px;
                padding-right: 30px;
                padding-top: 5px;
                padding-bottom: 5px;    
                background-color: #65bcd4;
                border-radius: 20%;
            }
            a:hover{
                color: yellow;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .name{
                background-color: black;
                padding: 10px;
                border-radius: 20px; 
                color: white;
            }
        </style>
    </head>
    <body>
        <!--navigacija-->
        <div class='center'>
            <nav>
                <a href="index.php">Index</a>
                <a href="about.php">About</a>
                <a href="pz2apica.php">Pz2apica</a>
            </nav>
        </div>
        <!--pavadinimai-->
        <div class="center">
            <h1 class="name">We are Bruce-Lee Sharks</h1>
            <h2 class="name">Suzinok faktus</h2>
        </div>
        <!--faktai-->
        <div class="center">
            <form method="post">
                <input type="submit" name="faktai" value="<?php print $result; ?>">
            </form>
        </div>
        <div class="center">
            <h2> <?php print $spausdinam; ?> </h2>
        </div>
    </body>
</html>
