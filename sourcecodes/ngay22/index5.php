<?php


try {
    $city = [
        'name' => 'ha noi',
        'total_district' => 21
    ];

    echo '<br>' . $city['info'];
} catch(Exception $e) {
   echo "<pre>";
   print_r($e);
   echo "</pre>";
}