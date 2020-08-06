<?php
    require 'vendor/autoload.php';

    $client = new MongoDB\Client;
    $companydb = $client -> companydb;
    $empcollection = $companydb -> empcollection;

    $documentList = $empcollection -> find();
    foreach($documentList as $docs){
        var_dump($docs);
    }
    

    //find many documents
    // $documentList = $empcollection -> find(
    //     [
    //         'age' => '20'
    //     ]
    //     );
    
    // foreach($documentList as $docs){
    //     var_dump($docs);
    // }

    //find one document
    // $document = $empcollection -> findOne(
    //     [
    //         '_id' => '1'
    //     ]
    // );

    // var_dump($document);
?>