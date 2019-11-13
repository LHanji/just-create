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

    //edit 1: put all this process within an if that tells this is the register form
    if(isset($_POST['regBtn'])){
        $fname = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $usrpassword = $_POST['pwd'];
        $hashedpwd = password_hash($usrpassword, PASSWORD_DEFAULT);
    
        //check informations
        if((empty($fname) == true) || (empty($username) == true) || (empty($email) == true) || (empty($usrpassword) == true)){
            die("Você precisa preencher todos os campos para efetuar o cadastro.");
        }
    
        $query_verify_email = "SELECT * FROM userdata  WHERE email ='$email'";
        $result_verify_email = mysqli_query($connection, $query_verify_email);
        if (mysqli_num_rows($result_verify_email) > 0) {
            die("Este e-mail já está cadastrado.");
        }
    
        $query_verify_username = "SELECT * FROM userdata  WHERE username ='$username'";
        $result_verify_username = mysqli_query($connection, $query_verify_username);
        if (mysqli_num_rows($result_verify_username) > 0) {
            die("Este usuário já está cadastrado.");
        }
    
        //insert data into table
        $sql = "INSERT INTO userdata (name, username, email, password) VALUES ('$fname', '$username', '$email', '$hashedpwd')";
    
        if (mysqli_query($connection, $sql)) {
            header('location: ../page/login.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }    
    }
    if(isset($_POST['logBtn'])){
        $username = $_POST['username'];
        $usrpassword = $_POST['pwd'];
        if((empty($username) == true) || (empty($usrpassword) == true)){
            die ("Você precisa preencher todos os campos.");
        }
        $query_find_username = "SELECT username, password FROM userdata WHERE username = '$username'";
        $result_find_username = mysqli_query($connection, $query_find_username);
        session_start();
        if(empty($result_find_username) == false){
            while($row = mysqli_fetch_assoc($result_find_username)){
                $hashedpwd = $row['password'];
                if(password_verify($usrpassword, $hashedpwd) == true){
                    $_SESSION["username"] = $username;
                    $_SESSION["error"] = null;
                    $_SESSION["logado"] = true;
                    header("location: ../page/maluves.php");
                } else{
                    $_SESSION["logado"] = false;
                    header("location: ../page/login.php");
                }
            }
        } else{
            $_SESSION["logado"] = false;
            header("location: ../page/login.php");
        }
    }
    
    //close connection
    mysqli_close($connection);
?>