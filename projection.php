<?php
    require 'vendor/autoload.php';

    $client = new MongoDB\Client;
    $companydb = $client -> companydb;
    $empcollection = $companydb -> empcollection;

    //find many documents
    $documentList = $empcollection -> find(
        [
            'age' => '20'
        ],
        [
            'projection' => [
                '_id' => 0,
                'name' => 1
            ]
        ]
        );
    
    foreach($documentList as $docs){
        var_dump($docs);
    }
?>