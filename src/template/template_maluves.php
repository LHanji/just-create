<!DOCTYPE html>
<html lang="en  ">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../style/add_styles.css">

  <title>Maluves</title>
</head>

<body>
  <?php require_once '../script/char_config.php'; ?>
  <div class="container mt-4">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" href="#home">Início</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#library">Biblioteca</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#addoredit">Formulário</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../script/logout.php">Sair</a>
      </li>
    </ul>
    <br><br><br><br><br><br>
    <div class="justify-content-center" id="home">
      <div class="row justify-content-center mt-5 mb-5">
        <h1 class="display-4">Bem-vindo(a) ao Maluves!</h1>
      </div>
      <p class="lead">Agora que você está logado poderá adicionar a uma biblioteca suas criações, seus personagens. Com isso você pode deixar guardado o que vem na mente naqueles momentos de explosão criativa, guardar suas criações.
        Na criação será possível adicionar atributos como nome, raça, habilidades e história.</p>
    </div>
    <br><br><br><br><br><br>
    <div id="library">

      <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
          <div class="row justify-content-center">
            <h1 class="display-4">Biblioteca</h1>
          </div>
        </thead>
        <tbody>
          <?php
          include 'listChar.php';
          ?>
        </tbody>
      </table>
    </div>
    <div class="row justify-content-center" id="addoredit">
      <div class="card" style="width: 44rem;">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-">
              <div class="h3">Adicione ou edite um personagem</div>
            </div>
          </div>
          <br>
          <form action="../script/char_config.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row justify-content-center">
              <div class="col-">
                <div class="card" style="width: 17rem;">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="char_name">Nome: </label>
                      <input type="text" name="char_name" id="char_name" value="<?php echo $char_name; ?>" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-">
                <div class="card" style="width: 17rem;">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="char_race">Raça: </label>
                      <input type="text" name="char_race" id="char_race" value="<?php echo $char_race; ?>" class="form-control">
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
                      <textarea type="text" style="height: 15rem;" name="char_skills" id="char_skills" class="form-control"><?php echo $char_skills; ?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-">
                <div class="card" style="width: 17rem;">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="char_story">História: </label>
                      <textarea type="text" style="height: 15rem;" name="char_story" id="char_story" class="form-control"><?php echo $char_story; ?></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row  justify-content-center">
              <?php
              if ($update == true) :
                ?>
                <button type="submit" class="btn btn-primary col-sm-5" name="update">Editar</button>
              <?php else : ?>
                <button type="submit" class="btn btn-primary col-sm-5" name="addChar">Adicionar</button>
              <?php endif; ?>

            </div>
          </form>
        </div>
      </div>
    </div>
    
    <div class="mb-5">
    <hr class="my-4">
    <p>Desenvolvido como CRUD para as aulas de Desenvolvimento para Internet do Prof. Renato por Lohana Torres e Lucas Hote.</p>
    <a class="btn btn-primary btn-md" href="https://github.com/LHanji/maluves" role="button">Repositório</a>
    </div>
  </div>
  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>