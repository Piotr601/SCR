<!DOCTYPE html>
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
            <?php include "bazadanych.php"?>    
            <div id="content">
                
            <h2> Quiz PHP</h2>
          
            </div>

            <div class="tep">
                Quiz z użyciem PHP i MySql
                <p></p>
                Tylko jedna odpowiedź jest poprawna
                
                <p></p>
                Powodzenia : )
                <p></p>
                <a href="pytania.php" class="start">Start</a>
                   
                
            </div>
               
        
            
        </div>
       
    
        <div class="bot">
            Quiz PHP &copy; 2020
        </div>
    </div>
</body>

</html>