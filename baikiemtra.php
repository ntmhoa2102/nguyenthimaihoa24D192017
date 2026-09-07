<?php
/*
Câu 1:c
Câu 2:b
Câu 3:a
Câu 4:b
Câu 5:b
*/
//bai1. In số chẵn từ 1 đến 10
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "<br>";

// bai2. Chương trình kiểm tra số nguyên tố
function laSoNguyenTo($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
$n = 17;
if (laSoNguyenTo($n)) {
    echo "$n là số nguyên tố";
} else {
    echo "$n không phải là số nguyên tố";
}
echo "<br>";

// bai3. Hàm in ra hình chữ nhật bằng dấu sao (*)
function inHinhChuNhat($rong, $cao) {
    for ($i = 1; $i <= $cao; $i++) {

        for ($j = 1; $j <= $rong; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
inHinhChuNhat(5, 3);
echo "<br>";
?>