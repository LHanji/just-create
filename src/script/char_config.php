<?php
    //connection variables
    $host = 'localhost';
    $username = 'root';
    $dbpassword = '';
    $dbname = 'maluves';
    //$username = 'aluno';
    //$dbpassword = 'aluno';

    
    //creating connection
    $connection = mysqli_connect($host, $username, $dbpassword, $dbname);
    // check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = 0;
    $char_name = '';
    $char_race = '';
    $char_skills = '';
    $char_story = '';

    $update = false;

    if(isset($_POST['addChar'])){
        $char_name = $_POST['char_name'];
        $char_race = $_POST['char_race'];
        $char_skills = $_POST['char_skills'];
        $char_story = $_POST['char_story'];

        $query_addChar = "INSERT INTO chardata(char_name, char_race, char_skills, char_story) VALUES ('$char_name', '$char_race', '$char_skills', '$char_story')";
        mysqli_query($connection, $query_addChar);

        header("location: ../page/maluves.php");
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        mysqli_query($connection, "DELETE FROM chardata WHERE id='$id'") or die(mysqli_error($connection));

        header("location: ../page/maluves.php");
    }
    
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = mysqli_query($connection, "SELECT * FROM chardata WHERE id='$id'") or die(mysqli_error($connection));
        if(count($result) == 1){
            $row = mysqli_fetch_array($result);
            $char_name = $row['char_name'];
            $char_race = $row['char_race'];
            $char_skills = $row['char_skills'];
            $char_story = $row['char_story'];
        }
    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $char_name = $_POST['char_name'];
        $char_race = $_POST['char_race'];
        $char_skills = $_POST['char_skills'];
        $char_story = $_POST['char_story'];
        mysqli_query($connection, "UPDATE chardata SET char_name='$char_name', char_race='$char_race', char_skills='$char_skills', char_story='$char_story' WHERE id='$id'");
    
        header("location: ../page/maluves.php");
        
    }

?>