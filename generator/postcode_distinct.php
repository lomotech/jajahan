<?php

$states = [
    'johor',
    'kedah',
    'kelantan',
    'melaka',
    'negeri-sembilan',
    'pahang',
    'perak',
    'perlis',
    'pulau-pinang',
    'sabah',
    'sarawak',
    'selangor',
    'terengganu',
    'wp-kuala-lumpur',
    'wp-labuan',
    'wp-putrajaya'
];

foreach ($states as $state) {
    include '../php_array/place/postcode_distinct/' . $state . '.php';

    // csv generator
    $fp = fopen('../csv/place/postcode_distinct/' . $state . '.csv', 'w');
    foreach ($data as $datum) {
        fputcsv($fp, $datum);
    }
    fclose($fp);

    // json generator
    $fp = fopen('../json/place/postcode_distinct/' . $state . '.json', 'w');
    fwrite($fp, json_encode($data));
    fclose($fp);
}
