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
    $query_listChar = "SELECT * FROM chardata";
    $result = mysqli_query($connection, $query_listChar);
    $row = mysqli_fetch_assoc($result);
    if($row)
    {
        while($row)
        {
            echo "<tr>
                <td>
                    <div class=\"card text-center\">
                        <div class=\"card-header\">
                            {$row["char_name"]}
                        </div>
                        <div class=\"card-body\">
                            <p class=\"card-text\">Raça: {$row["char_race"]}</p>
                            <p class=\"card-text\">Habilidades: {$row["char_skills"]}</p>
                            <p class=\"card-text\">História: {$row["char_story"]}</p>
                            <a href=\"maluves.php?edit={$row["id"]}#addoredit\" class=\"btn btn-info\">Editar</a>
                            <a href=\"../script/char_config.php?delete={$row["id"]}\" class=\"btn btn-danger\">Remover</a>
                        </div>
                    </div>
                </td>
            </tr>";
            $row = mysqli_fetch_assoc($result);
        }
    } else{
        echo "<tr>
                <td>
                    <div class=\"card text-center\">
                        <div class=\"card-header\">
                            {$row["char_name"]}
                        </div>
                    </div>
                </td>
            </tr>";
    }
?>