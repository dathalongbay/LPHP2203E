<?php
function tinhBmi($chieuCao,$canNang) {
    $bmi = $canNang/($chieuCao*2);
    $phanLoai = "";
    if ($bmi < 18.5) {
        $phanLoai = "Gầy";
    } elseif ($bmi >= 18.5 && $bmi < 25) {
        $phanLoai = "Bình thường";
    } elseif ($bmi >= 25 && $bmi < 30) {
        $phanLoai = "Tăng cân";
    } elseif ($bmi >= 30 && $bmi < 35) {
        $phanLoai = "Béo phì độ 1";
    } elseif ($bmi >= 35 && $bmi < 40) {
        $phanLoai = "Béo phì độ 2";
    } else {
        $phanLoai = "Béo phì độ 3";
    }

    return array(
        'bmi' => $bmi,
        'phan_loai' => $phanLoai
    );
}