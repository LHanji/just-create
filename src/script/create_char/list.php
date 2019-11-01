<?php
 
    $host = 'localhost';
    $username = 'root';
    $dbpassword = '';
    $dbname = 'maluves';
 
    $connection = mysqli_connect($host,$username,$dbpassword, $dbname);
 
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "select * from chardata";
 
    $queryResult = mysqli_query($connection, $query);
 
    if(!$queryResult)
    {
        echo "Erro na consulta.";
        echo mysqli_error($connection);
        mysqli_close($connection);
        die();
    }
 
    $char = mysqli_fetch_assoc($queryResult);
    if($char)
    {
        while($char)
        {
            echo"<div class=\"row justify-content-center\">
                    <div class=\"col-\"> 
                        <div class=\"card\" style=\"width: 17rem;\">
                            <div class=\"card-body\">
                                <p><b>{$char["id"]}</b><br></p>
                                <p><b>{$char["char_name"]}</b><br></p>
                                <p><b>{$char["char_codename"]}</b><br></p>
                                <p><b>{$char["char_class"]}</b><br></p>
                                <p><b>{$char["char_race"]}</b><br></p>
                                <p><b>{$char["char_skills"]}</b><br></p>
                                <p><b>{$char["char_weapons"]}</b><br></p>
                                <p><b>{$char["char_origin"]}</b><br></p>
                                <p><b>{$char["char_story"]}</b><br></p>
                            </div>
                        </div>
                    </div>
                </div>";
            echo "<a href=\"att.php?id={$char["id"]}\">Editar</a>";
            echo " | ";
            echo "<a href=\"delete.php?id={$char["id"]}\">Remover</a>";
            echo "</div>";
            $char = mysqli_fetch_assoc($queryResult);
        }
    }
    else
    {
        echo "tabela vazia";
    }
    echo "<a href=\"../../script/create_char/add.php\">Inclui</a>";
 
    mysqli_free_result($queryResult);
    mysqli_close($connection);