<?php

require_once("vendor/autoload.php");

use Gabriel\DB;

$app = new \Slim\Slim();

$app ->config('debug', true);

$app->get('/', function(){
    
    //$sql = new \Hcode\DB
    //$sql = new resource\DB\Sql();
    $sql = new \resource\DB\Sql();


    $results = $sql->select("SELECT * FROM tb_users");
    echo json_encode($results);

    echo "<br><br><br><br><br><br>Deu merda aqui";
});

$app ->run();

?>