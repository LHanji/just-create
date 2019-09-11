<?php
    define('SERVER','localhost');
    define('USERNAME','root');
    define('DATABASE_PWD','');
    define('DATABASE_NAME','userdata');
    $c = mysqli_connect($SERVER, $USERNAME, $DATABASE_PWD, $DATABASE_NAME);
    if(mysqli_connect_errno()){
        die('Falha na conexão '.mysqli_connect_error());
    }

    if(!isset($_POST['firstname'] , $_POST['lastname'], $_POST['username'], $_POST['email'], $_POST['pwd'], $_POST['pwd2'])){
        die('É necessário que todos os campos sejam preenchidos para completar o cadastro.');
    }
    if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['pwd']) || empty($_POST['pwd2'])){
        die('É necessário que todos os campos sejam preenchidos para completar o cadastro.');
    }
    if(!filter_var($_POST['email'], FILTER_VALIDETE_EMAIL)){
        die ('Email inválido.');
    }
    if(preg_match('/[A-Za-z0-9]+/', $_POST['username'])== 0){
        die ('Nome de Usuário inválido.');
    }
    if(strlen($_POST['pwd'])>16 || strlen($_POST['username']) < 8){
        die('A senha deve conter no mínimo 8 e no máximo 16 caracteres.');
    }
    if($stmt = $c->prepare('SELECT id, password FROM userdata WHERE username = ?')){
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows > 0){
            echo 'Este nome de usuário já existe, tente novamente.';
        } else {
            if($stmt = $c->prepare('INSERT INTO userdate (username, pwd, email, firstname, lastname) VALUES (?, ?, ?, ?, ?)')){
                $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
                $stmt->bind_param('sss', $_POST['username'], $pwd, $_POST['email']);
                $stmt->execute();
                echo 'Cadastrado com sucesso.';
            } else {
                echo 'Não foi possível completar o cadastro.';
            }
        }
    }else {
        echo 'Não foi possível completar o cadastro.';
    }
    $c->close();
?>