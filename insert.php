<?php
    require 'vendor/autoload.php';

    $client = new MongoDB\Client;
    $companydb = $client -> companydb;
    $empcollection = $companydb -> empcollection;


    //insert many documents in one time
    $insertManyResult = $empcollection -> insertMany([
        [
            '_id' => '4',
            'name' => 'noix',
            'age' => '20',
            'hobby' => 'coding'
        ],
        [
            '_id' => '5',
            'name' => 'noixido',
            'age' => '30',
            'hobby' => 'joking'
        ],
    ]);

    printf("insert %d documents ", $insertManyResult -> getInsertedCount());
    var_dump($insertManyResult -> getInsertedIds());



    //insert one document in one time
    // $insertOneResult = $empcollection -> insertOne(
    //     [
    //         '_id' => '1',
    //         'name' => 'kido',
    //         'age' => '20',
    //         'hobby' => 'watching movie'
    //     ]
    //     );
    
    // printf("insert %d documents ", $insertOneResult -> getInsertedCount());
    // var_dump($insertOneResult -> getInsertedId());
?>