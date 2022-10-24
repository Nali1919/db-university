<h1>Studenti del 1990</h1>

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

$sql = "SELECT * FROM `students` WHERE `date_of_birth` BETWEEN '1990-01-01' AND '1990-12-31'; "  ;

if($result = $connessione->query($sql)){
    if($result->num_rows > 0){
        

    while($students = $result->fetch_assoc()){
      ?>
      <div>
        <p><?= $students['name']. "  " .$students['surname']. "  "  .$students['date_of_birth']; ?></p>
      </div>
      <?php
        
    }
    }
}

?>
