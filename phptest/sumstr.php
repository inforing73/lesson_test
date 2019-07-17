
<?php

//Разбиваем текс на массив.
$arr = preg_split("/[\s,=<>.!\"\'?()]+/", $_POST['countWords'], 0, PREG_SPLIT_NO_EMPTY);


$headers = array("Слово", "Сколько раз"); //Заголовки для таблицы.
$arr2 = array(array_count_values($arr)); // Подсчет повторений
$arr3 = array_unique($arr); // Убираем повторяющие значния
$fh = fopen('file.csv', 'w');
fputcsv($fh, $headers, ";"); // Запись заоловка в таблицу

    foreach ($arr2 as $value2) {
        $d = array_map(null, $arr3, $value2);
        for ($n = 0; $n < count($arr3); $n++){
        fputcsv($fh,  $d[$n],";");
        }
    }

$f = file_get_contents('file.csv');
$f = iconv("UTF-8", "WINDOWS-1251", $f);
file_put_contents('file.csv', $f);


?>


<pre>
    <?php

    print_r($d);
    print_r($value2);
    print_r( array_unique($arr));

    ?>
</pre>

