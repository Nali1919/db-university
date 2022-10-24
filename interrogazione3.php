<h1>Corsi di Laurea Magistrali</h1>
<?php

define("DB_SEVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "db_university");
define("DB_PORT", 3306);


$connessione = new mysqli(DB_SEVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

if( $connessione && $connessione->connect_error) {
    echo "Error" . $connessione->connect_error;
    die();
}

$sql = "SELECT * FROM `degrees` WHERE `level` = 'magistrale' ;" ; 

if($result = $connessione->query($sql)){
    if($result->num_rows > 0){
        

    while($degrees = $result->fetch_assoc()){
    
        ?>
          <div>
           <p><?= $degrees['name'] . "<br/>" . $degrees['level']; ?></p>
          </div>
        <?php
        
    }
    }
}

$connessione->close();
?>

