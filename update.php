<?php
    require 'vendor/autoload.php';

    $client = new MongoDB\Client;
    $companydb = $client -> companydb;
    $empcollection = $companydb -> empcollection;


    $replaceResult = $empcollection -> replaceOne(
        [
            '_id' => '1'
        ],
        [
            '_id' => '1',
            'sex' => 'male'
        ]
    );

    printf("Matched %d document \n", $replaceResult -> getMatchedCount());
    printf("Modified %d document \n", $replaceResult -> getModifiedCount());

    //update many document, sekaligus menambahkan data baru pada dokument terkait
    // $updateResult = $empcollection -> updateMany(
    //     [
    //         'hobby' => 'watching movie'
    //     ],
    //     [
    //         '$set' => [
    //             'hobby' => 'playing games',
    //             'status' => 'Alive'
    //         ]
    //     ]
    // );
    
    // printf("Matched %d document \n", $updateResult -> getMatchedCount());
    // printf("Modified %d document \n", $updateResult -> getModifiedCount());

    //update one document, hanya dokumen paling atas saja yang akan di-update
    // $updateResult = $empcollection -> updateOne(
    //     [
    //         'age' => '20'
    //     ],
    //     [
    //         '$set' => [
    //             'age' => '25'
    //         ]
    //     ]
    // );
    
    // printf("Matched %d document \n", $updateResult -> getMatchedCount());
    // printf("Modified %d document \n", $updateResult -> getModifiedCount());
?>