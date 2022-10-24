<h1>Corsi e semestri</h1>

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

$sql = "SELECT * FROM `courses` WHERE `cfu` > 10; "  ;

if($result = $connessione->query($sql)){
    if($result->num_rows > 0){
        

    while($courses = $result->fetch_assoc()){
        ?>
        <div>
           <p><?= $courses['name'] . " " . $courses['period']; ?></p>
        </div>
        <?php
        
    }
    }
}

?>


