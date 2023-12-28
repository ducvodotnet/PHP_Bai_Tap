 <!-- 1.Viết chương trình nhập vào một số nguyên. Kiểm tra số đó nguyên dương hay nguyên âm. In ra màn hình kết quả.
 2.Viết chương trình nhập vào một số nguyên n. Kiểm tra n chia hết cho 3 hay 5. In kết quả ra màn hình.
 3.Viết chương trình nhập vào tháng trong năm. In ra số ngày của tháng đó.
 4.Viết chương trình giải phương trình bậc 2.
 5.Viết chương trình nhập vào 3 số a, b, c. Kiểm tra có phải là 3 cạnh của một tam giác không. -->
<?php
// 1
$a = 7;
$b = 8;
$c = 9;

$delta = $b * $b - 4 * $a * $c;

if ($delta > 0) {
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "Phương trình có 2 nghiệm phân biệt: x1 = $x1 và x2 = $x2.";
} elseif ($delta == 0) {
    $x = -$b / (2 * $a);
    echo "Phương trình có nghiệm kép: x = $x.";
} else {
    echo "Phương trình vô nghiệm.";
}
print("<br>");
// 2

$n = 10;
if ($n % 3 == 0 && $n % 5 == 0) {
    echo "Số $n chia hết cho cả 3 và 5.";
} elseif ($n % 3 == 0) {
    echo "Số $n chia hết cho 3.";
} elseif ($n % 5 == 0) {
    echo "Số $n chia hết cho 5.";
} else {
    echo "Số $n không chia hết cho cả 3 và 5.";
}

print("<br>");
// 3

$month = 6;
switch ($month) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "Tháng $month có 31 ngày.";
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo "Tháng $month có 30 ngày.";
        break;
    case 2:
        echo "Tháng 2 có 28 hoặc 29 ngày.";
        break;
    default:
        echo "Tháng không hợp lệ.";
}

print("<br>");
// 4

$a = 6;
$b = 4;
$c = 5;

$delta = $b * $b - 4 * $a * $c;

if ($delta > 0) {
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "Phương trình có 2 nghiệm phân biệt: x1 = $x1 và x2 = $x2.";
} elseif ($delta == 0) {
    $x = -$b / (2 * $a);
    echo "Phương trình có nghiệm kép: x = $x.";
} else {
    echo "Phương trình vô nghiệm.";
}
print("<br>");
// 5
$a = 6;
$b = 4;
$c = 5;

if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    echo "Ba số $a, $b và $c là độ dài của các cạnh của một tam giác.";
} else {
    echo "Ba số $a, $b và $c không phải là độ dài của các cạnh của một tam giác.";
}
print("<br>");





?>