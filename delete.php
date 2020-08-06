<?php
    require 'vendor/autoload.php';

    $client = new MongoDB\Client;
    $companydb = $client -> companydb;
    $empcollection = $companydb -> empcollection;

    //delete many document
    $deleteResult = $empcollection -> deleteMany(
        [
            'age' => '20'
        ]
    );

    printf("Deleted %d document ", $deleteResult -> getDeletedCount());

    //delete one document
    // $deleteResult = $empcollection -> deleteOne(
    //     [
    //         '_id' => '1'
    //     ]
    // );

    // printf("Deleted %d document ", $deleteResult -> getDeletedCount());
?>