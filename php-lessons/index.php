<?php

$books = array("451° по Фаренгейту", "Шантарам", "1984", "Мастер и Маргарита",
	"Три товарища",  "Портрет Дориана Грея", "Вино из одуванчиков",
	"Цветы для Элджернона", "Над пропастью во ржи", "Маленький принц",
	"Анна Каренина", "Сто лет одиночества", "Тень горы",
	"Атлант расправил плечи");

$length = count($books);

for ($i = 0; $i < $length; $i++) {
	echo $books[$i];
	echo "<br>";
}
?>