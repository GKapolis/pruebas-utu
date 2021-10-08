<?php

function writetable($table, $conn){
    switch($table){
        case "bf1":
            $sql = "SELECT * FROM example1;";
            break;
        case "bf2":
            $sql = "SELECT * FROM example2;";
            break;
        case "d1":
            $sql = "SELECT * FROM example3;";
            break;
    }
    $table = strtoupper($table);
    $tableheader = "<h1 class=\"text-info bg-dark\"><b>Tabla de ".$table."</b></h1>";
    echo $tableheader;
}

?>