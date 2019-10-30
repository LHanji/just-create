<?php

    //include '../script/server.php';

    function title(){
        echo 'Cadastro de Usuário';
    }

    function heading(){
        echo '<h1>Cadastro de Usuário</h1>';
    }

    function page(){
        echo '../script/server.php';
    }

    //include 'errors.php';

    function form_content(){
        echo '<div class="form-group">
                <label for="name">Nome: </label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="username">Usuário: </label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">E-mail: </label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Senha: </label>
                <input type="password" name="pwd" id="pwd" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" name="regBtn">Cadastrar-se</button>
            <br><br>
            <p>Já possui conta?<a href="login_form.php"> Faça login</a></p>';
    }    

    include '../template/template_form.php';
?>