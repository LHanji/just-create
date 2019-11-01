<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../style/add_styles.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Criar Personagem</title>
    </head>
    <body>
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-">
                    <div class="h3">Crie um personagem</div>
                </div>
            </div>    
            <br>
            <form action="../script/create.php" method="post">
                <div class="row justify-content-center">
                    <div class="col-"> 
                        <div class="card" style="width: 17rem;">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="char_name">Nome: </label>
                                    <input type="text" name="char_name" id="char_name" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-"> 
                        <div class="card" style="width: 17rem;">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="char_codename">Codenome: </label>
                                    <input type="text" name="char_codename" id="char_codename" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-"> 
                        <div class="card" style="width: 17rem;">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="char_class">Classe: </label>
                                    <input type="text" name="char_class" id="char_class" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-"> 
                        <div class="card" style="width: 17rem;">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="char_race">Raça: </label>
                                    <input type="text" name="char_race" id="char_race" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row justify-content-center"> 
                    <div class="col-"> 
                        <div class="card" style="width: 17rem;">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="char_skills">Habilidades: </label>
                                    <textarea style="height: 15rem;" name="char_skills" id="char_skills" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-"> 
                        <div class="card" style="width: 17rem;">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="char_weapons">Armas: </label>
                                    <textarea style="height: 15rem;" name="char_weapons" id="char_weapons" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-"> 
                        <div class="card" style="width: 17rem;">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="char_origin">Origem: </label>
                                    <textarea style="height: 15rem;" name="char_origin" id="char_origin" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-"> 
                        <div class="card" style="width: 17rem;">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="char_story">História: </label>
                                    <textarea style="height: 15rem;" name="char_story" id="char_story" class="form-control noresize"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row  justify-content-center">
                    <button type="submit" class="btn btn-primary col-sm-5" name="addChar">Criar</button>
                </div>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>