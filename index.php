<?php

	function findMin($array) {
		if (!is_array($array))
			return 'Параметром функции может быть только массив';
		if (empty($array))
			return 'Массив не может быть пустым';
		$tmpMin = $array[0];
		$count = count($array);
		for ($i = 1; $i < $count; $i++) {
			if (!is_int($array[$i]))
				return 'Элементы массива должны быть целыми числами';
			if ($tmpMin > $array[$i])
				$tmpMin = $array[$i];
		}
		return $tmpMin;
	}

//	неправильные параметры
	echo findMin("This is not array"), "<br />";	// Параметром функции может быть только массив
	echo findMin(array()), "<br />";				// Массив не может быть пустым
	echo findMin(array(1, -5, true)), "<br />";		// Элементы массива должны быть целыми числами

//	правильные параметры
	echo findMin(array(1, -5, 0, 12)), "<br />";	// правильный тест вернет -5
	echo findMin(array(1, 1, 1, 1)), "<br />";		// все элементы одинаковые, вернет 1

?>