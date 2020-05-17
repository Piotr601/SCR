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
        
    <?php include "bazadanych.php"?>
        
    <?php 
        $query = "SELECT * FROM questions";
        $results = $mysqli -> query($query);
        $liczba_pytan= $results->num_rows; 
        
    ?>
    
        
        <div id="mid">
            
               <div id="content">
                
                <!-- PHP -->               
                
                <?php
                   $number1 = rand(1,$liczba_pytan);
                   // Pytania
                   $query = "SELECT * FROM questions WHERE pyt_id=$number1 ";
    
                   $result = $mysqli->query($query);              
                   $question1 = $result->fetch_assoc();
                
                   // Odpowiedzi
                   $query = "SELECT * FROM answers WHERE pyt_id=$number1 ";
                   $answers1 = $mysqli->query($query);   
                ?>
                   
                <h2> TEST </h2>
                </div>
        
                <div class="pytania">
                   
                <!-- PHP -->               
                <?php include "bazadanych.php"?>
                <?php
                   $number2 = rand(1,$liczba_pytan);
                    
                   while($number2==$number1)
                   $number2 = rand(1,$liczba_pytan);
                    
                   // Pytania
                   $query = "SELECT * FROM questions WHERE pyt_id=$number2 ";
                   $result = $mysqli->query($query);
                   $question2 = $result->fetch_assoc();
                   
                   
                   // Odpowiedzi
                   $query = "SELECT * FROM answers WHERE pyt_id=$number2 ";
                   $answers2 = $mysqli->query($query);
                ?>
                    
                   
 
                    
                <!-- PHP -->               
                <?php include "bazadanych.php"?>
                <?php
                   $number3 = rand(1,$liczba_pytan);
                    
                   while($number3==$number2 || $number3==$number1)
                   $number3 = rand(1,$liczba_pytan);
                   
                   // Pytania
                   $query = "SELECT * FROM questions WHERE pyt_id=$number3 ";
                   $result = $mysqli->query($query);
                   $question3 = $result->fetch_assoc();
                   
                   // Odpowiedzi
                   $query = "SELECT * FROM answers WHERE pyt_id=$number3 ";
                   $answers3 = $mysqli->query($query);
                ?>  
                </div>
                
            <form action="sprawdzanie.php" method="post">
             <div class ="ttep">
               
                        <?php echo $question1['text'];?>
                    <ul class="wybory">
                        <?php while($row = $answers1 ->fetch_assoc()): ?>
                            <li><input name="wybor1" type="radio" value="<?php echo $row['id']; ?>"/> 
                                <?php echo $row['text']?> </li>
                        <?php endwhile; ?>
                    </ul>  
                  <br />
                        <?php echo $question2['text'];?>
                    <ul class="wybory">
                        <?php while($row = $answers2 ->fetch_assoc()): ?>
                            <li><input name="wybor2" type="radio" value="<?php echo $row['id']; ?>"/> 
                                <?php echo $row['text']?> </li>
                        <?php endwhile; ?>
                    </ul>
                   
                   <br />
                        <?php echo $question3['text'];?>
                    <ul class="wybory">
                        <?php while($row = $answers3 ->fetch_assoc()): ?>
                            <li><input name="wybor3" type="radio" value="<?php echo $row['id']; ?>"/> 
                                <?php echo $row['text']?> </li>
                        <?php endwhile; ?>
                    </ul>
                
                <input type="hidden" name="number1" value="<?php echo $number1 ?> " />
                <input type="hidden" name="number2" value="<?php echo $number2 ?> " />
                <input type="hidden" name="number3" value="<?php echo $number3 ?> " />
                
                 <br />
                <input type="submit" value='End'/>
                 
             </div>
            </form>
        </div>
       
        <div class="bot">
            Quiz PHP &copy; 2020
        </div>
    </div>
</body>

</html>