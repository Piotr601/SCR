<?php include "bazadanych.php"?>
<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['score']))
    {
        $_SESSION['score']=0;
    }

     if($_POST)
    { 
        //1 pytanie
        $number1 = $_POST['number1'];
        $selected1 = $_POST['wybor1'];
        
         
        $query = "SELECT * from answers WHERE pyt_id = $number1 AND poprawne = 1";
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc();
        
        $correct1 = $row['id']; 
        if($correct1 == $selected1)
        {
            $_SESSION['score']++;
        }
         
        //2 pytanie
        $number2 = $_POST['number2'];
        $selected2 = $_POST['wybor2'];
        
         
        $query = "SELECT * from answers WHERE pyt_id = $number2 AND poprawne = 1";
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc();
        
        $correct2 = $row['id']; 
        if($correct2 == $selected2)
        {
            $_SESSION['score']++;
        }
        
        //3 pytanie
        $number3 = $_POST['number3'];
        $selected3 = $_POST['wybor3'];
        
         
        $query = "SELECT * from answers WHERE pyt_id = $number3 AND poprawne = 1";
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc();
        
        $correct3 = $row['id']; 
        if($correct3 == $selected3)
        {
            $_SESSION['score']++;
        }
         
        header("Location: koniec.php");
    }
?>