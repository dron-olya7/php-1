<!-- 3. Сделайте функцию, противоположную функции 
array_unique. Ваша функция должна оставлять дубли и
удалять элементы, не имеющие дублей. -->

<?php
	$arr = [0, 1, 2, 2, 2, 7, 7, 3, 6, 5];
	$newArr = [];
	$elems = count($arr);
	for ($i = 0; $i < $elems; $i++) {
		$value = $arr[$i];
		unset($arr[$i]);
		if (in_array($value, $arr)) {
			$newArr[] = $value;
		}
		$arr[$i] = $value;
	}
	$arr = $newArr;
echo print_r($arr);

//count — Подсчитывает количество элементов массива
//unset — Удаляет переменную
//in_array — Проверяет, присутствует ли в массиве значение
//print_r — Выводит удобочитаемую информацию о переменной