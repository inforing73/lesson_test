
<?php



$arr = preg_split("/[\s,=<>.!\"\'?()0-9]+/", $_POST[countWords], 0, PREG_SPLIT_NO_EMPTY);
$numberOfWords = count($arr);

function numberOfRepetitions (array $arr) {

    foreach (array_count_values($arr) as $key => $value) {
        $number = substr($value, -1);
        $ending = 'раз';
        if ($number > 1 && $number < 5)
            $ending .= 'а';

        echo "Слово \"$key\" встречается в тексте \"$value\" $ending.<br>",PHP_EOL;
    }
}

echo "Общее количество слов: {$numberOfWords}<br>";
numberOfRepetitions($arr);

?>