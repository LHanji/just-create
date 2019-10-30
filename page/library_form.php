<?php
    function page(){
        echo '../script/add_char.php';   
    }
    function form_content(){
        echo '
        <div class="row justify-content-center">
            <div class="col-">
                <div class="h3">Crie um personagem</div>
            </div>
        </div>    
        <br>
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
                                <textarea style="height: 15rem; name="char_skills" id="char_skills" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-"> 
                    <div class="card" style="width: 17rem;">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="char_weapons">Armas: </label>
                                <textarea style="height: 15rem; name="char_weapons" id="char_weapons" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-"> 
                    <div class="card" style="width: 17rem;">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="char_origin">Origem: </label>
                                <textarea style="height: 15rem; name="char_origin" id="char_origin" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-"> 
                    <div class="card" style="width: 17rem; height: 20rem; ">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="char_story">História: </label>
                                <textarea style="height: 15rem; name="char_story" id="char_story" class="form-control noresize"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row  justify-content-center">
                <button type="submit" class="btn btn-primary col-sm-5" name="addChar">Add</button>
            </div>';
    }
?>