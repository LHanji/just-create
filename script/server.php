<?php

    //connection variables
    $host = 'localhost';
    $username = 'root';
    $dbpassword = '';
    $dbname = 'just_create';

    //creating connection
    $connection = mysqli_connect($host, $username, $dbpassword, $dbname);
    // check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $fname = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $usrpassword = $_POST['pwd'];

    //check informations
    if(!$fname || !$username || !$email || !$usrpassword){
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
    $sql = "INSERT INTO userdata (name, username, email, password) VALUES ('$fname', '$username', '$email', ENCRYPT('$usrpassword'))";

    if (mysqli_query($connection, $sql)) {
        header('location: ../page/login.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }

    //close connection
    mysqli_close($connection);
?>