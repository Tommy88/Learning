<?php
// 1-1. Создаем массив из 20-ти случайных чисел от 0 до 100.
for ($i = 1; $i <= 20; $i++){
	$arr[] = mt_rand(1, 100);
}
// 1-2. Пишем свою функцию для поиска максимального значения в массиве.
echo max_elem($arr)."<br>";

function max_elem($arr){
	$max = 0;
		foreach($arr as $elem){
			if ($elem >= $max){
				$max = $elem;
			}
		}
	return $max;
}
// 1-3. Пишем свою функцию для поиска минимального значения в массиве.
echo min_elem($arr)."<br>";

function min_elem($arr){
	$min = 100;
		foreach($arr as $elem){
			if ($elem <= $min){
				$min = $elem;
			}
		}
	return $min;
}
// 1-4. Вычисляем среднее арифметиское значение элементов массива.
$sum = array_sum($arr);
echo $sum/count($arr)."<br>";
// 1-5. Если есть числа идущие подряд то выводим цепочки таких чисел на экран.
$arr = [1, 2, 7, 1, 3, 4, 5, 3, 8];

foreach ($arr as $elem){
    echo $elem." ";
}

for ($j = 0; $j <= count($arr)-1; $j++){
	if ($j == count($arr)-1 && $arr[$j - 1] - $arr[$j] == -1) {
		$brr[] = $arr[$j];
	}
	elseif ($j == count($arr)-1 && $arr[$j - 1] - $arr[$j] != -1) {
		break;
	}
	elseif($arr[$j + 1] - $arr[$j] == 1 || $arr[$j - 1] - $arr[$j] == -1){
        $brr[] = $arr[$j];
    }
	else $brr[] = ' ';
}
echo "<br><br>";

for ($x = 0; $x <= count($brr)-1; $x++) {
	if ($x == count($brr)-1) {
		echo $brr[$x];
	}
    elseif ($brr[$x + 1] - $brr[$x] == 1){
        echo $brr[$x].',';
    }
    else {
        echo $brr[$x].' ';
    }
}
echo "<br><br>";
// 1-6. "Переварачиваем" массив наоборот не пользуясь встроенной функцией.
for($i = count($arr) -1; $i >= 0; $i--){
	$brr[] = $arr[$i];
}
print_r($brr);
echo "<br><br>";
// 1-7. Меняем местами четные элементы с нечетными.
$brr = [];
for ($i = 0; $i <= count($arr) - 1; $i += 2){
	$brr[] = $arr[$i + 1];
	$brr[] = $arr[$i];
}
print_r($brr);
echo "<br><br>";
// 1-8. Заполняем массив числами Фибоначчи.
for ($x = 0, $y = 1, $i = 1; $i <= 20; $x = $y, $y = $z, $i++){
	$arr[] = $x;
	$z = $x + $y;
}
print_r($arr);
echo "<br><br>";



// 2-1. Возвращает массив заданного размера заполненный случайными числами из заданного диапазона
$len = 5;
$arr = [0, 1, 72, 44, 9, 54, 49, 2, 75, 11, 73, 11, 63, 51, 37, 84, 2, 28, 91, 81, 87, 40];

function new_mass($len, $arr){
	for($i = 0; $i <= ($len -1); $i++){
		$brr[] = array_rand($arr);
	}
	return $brr;
}
// 2-2. Возвращает максимальное число в заданном массиве.
echo max_el($arr);

function max_el($arr){
	$max = max($arr);
	return $max;
}

// 2-3. Возвращает минимальное число в заданном массиве.
echo min_el($arr);

function min_el($arr){
	$min = min($arr);
	return $min;
}

// 2-4. Переворачивает массив задом наперед(без использования дополнительного массива)
$arr = [0, 1, 2, 3, 4, 5, 6, 7, 8];

function rev_mass($arr){
	for ($i = 0, $j = count($arr) - 1; $i < $j; $i++, $j--) {
		$tmp = $arr[$i];
		$arr[$i] = $arr[$j];
		$arr[$j] = $tmp;
	}
	return $arr;
}
// 2-5. Далее, сделать рекурсивное вычисление заданного числа фиббоначи
function fibon($n, $a = 0, $b = 1) {
    if ($n < 2) {
        return $a;
    }
    return fibon($n - 1, $b, $a + $b);
}
echo fibon(10);
