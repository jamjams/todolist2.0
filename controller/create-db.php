<?php
    require_once(__DIR__ . "/../model/config.php");
    
    $query = $_SESSION["connection"]->query("CREATE TABLE listusers ("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "username char(128) NOT NULL,"
            . "password char(128) NOT NULL,"
            . "salt char(128) NOT NULL, "
            . "PRIMARY KEY (id))");
    
    if($query) {
        echo "<p>Succesfully created table: listusers</p>";
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
    