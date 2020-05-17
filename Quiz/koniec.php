<!DOCTYPE html>
<?php include "bazadanych.php"?>
<?php session_start(); ?>

<html>
<head>
    <meta charset="utf-8"/>
    
    <title>Dom Ala</title>
    
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/fontello.css" type="text/css" />
    
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Condensed&subset=latin-ext" rel="stylesheet" />
</head>

<body>
    
    <div id="container">
        
        <div id="top">
            <h1>Strona domowa Ali</h1>        
        </div>
        
        <div id="mid">
            <div id="content">   
            <h2> Podsumowanie</h2>
            </div>
            <div class="tep">
                <p> Gratulacje, skończyłeś Quiz </p>      
                <p>
                    
                    <?php 
                        if($_SESSION['score']==0)
                            echo 'Mogło być lepiej : <';
                        if($_SESSION['score']==1)
                            echo 'Mogłeś się bardziej postarać : |';
                        if($_SESSION['score']==2)
                            echo 'Bardzo dobrze : )';
                        if($_SESSION['score']==3)
                            echo 'Brawo, idealnie ! : >';       
                    ?>    
                </p>
                <p>Twój wynik to:  <?php echo $_SESSION['score'];?>  / 3 </p>
                <p></p>
                <?php $_SESSION['score']=0;?>
                <a href="pytania.php" class="start">Spróbuj ponownie</a>
       
            </div>  
        </div>
        <div class="bot">
            Quiz PHP &copy; 2020
        </div>
    </div>
</body>

</html>