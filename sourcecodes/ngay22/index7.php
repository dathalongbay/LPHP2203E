<?php


try {
    $city = [
        'name' => 'ha noi',
        'total_district' => 21
    ];

    if (!isset($city['info'])) {
        throw new Exception('Không tôn tại key trong mảng');
    }

    echo '<br>' . $city['info'];
} catch(Exception $e) {
   echo $e->getMessage();
}