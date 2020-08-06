<?php
    require 'vendor/autoload.php';

    $client = new MongoDB\Client;
    $companydb = $client -> companydb;
    $empcollection = $companydb -> empcollection;

    $documentList = $empcollection -> find(
        [],
        [
            // 'limit' => 2,
            'skip' => 2,
            'sort' => [
                'age' => 1
            ]
        ]
    );
    foreach($documentList as $docs){
        var_dump($docs);
    }


?>