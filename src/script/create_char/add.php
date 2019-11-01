<?php
    $id = $_REQUEST["id"];
    $char_name= $_REQUEST["char_name"];
    $char_codename = $_REQUEST["char_codename"];
    $char_class = $_REQUEST["char_class"];
    $char_race = $_REQUEST["char_race"];
    $char_skills = $_REQUEST["char_skills"];
    $char_weapons = $_REQUEST["char_weapons"];
    $char_origin = $_REQUEST["char_origin"];
    $char_story = $_REQUEST["char_story"];

    if(empty($id)){
        // add
        $query = "insert into chardata(char_name,char_codename,char_class, char_race, char_skills, char_weapons, char_origin, char_story) values ('$char_name','$char_codename','$char_class', '$char_race', '$char_skills', '$char_weapons', '$char_origin', '$char_story')";
    }
    else{
        // att
        $query = "update chardata set char_name = '$char_name', char_codename = '$char_codename', char_class = '$char_class', char_race = '$char_race', car_skills ='$char_skills', char_weapons = '$char_weapons', char_origin = '$char_origin', char_story = '$char_story' where id$ = '$id'";
    }
 
    $host = 'localhost';
    $username = 'root';
    $dbpassword = '';
    $dbname = 'maluves';
 
    $connection = mysqli_connect($host, $username, $dbpassword, $dbname);
 
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
 
    $queryResult = mysqli_query($connection, $query);
 
    if(!$queryResult)
    {
        echo "Erro na consulta.";
        echo mysqli_error($connection);
        mysqli_close($connection);
        die();
    }
    else
    {
        header("location: ../page/maluves.php");
    }