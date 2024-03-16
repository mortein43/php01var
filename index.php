<?php
$name = 'Andrii';
$age = '33';

echo "Hello! My name is $name!<br>I`m $age.<br><br>";
$a = 23;
$b = 32;
$rez = $a + $b;
echo "First var = 23<br>Secong var = 22<br>rez = $a + $b = $rez<br><br>";

$first = 5;
$second = 10;

echo "Before change: a = $first, b = $second <br>";

$first = $first ^ $second;
$second = $first ^ $second;
$first = $first ^ $second;

echo "After change: a = $first, b = $second";

$questions = array(
    "Яка сума 2 і 2?" => array(
        '3',
        '4',
        '5',
        '6'
    ),
    "Які з наступних чисел є парними?" => array(
        '11',
        '24',
        '37',
        '50'
    ),
    "Обчисліть площу прямокутника, якщо його довжина дорівнює 8 см, а ширина 5 см." => array(
        '8 * 5 = 40'
    )
);

echo "<br>";
foreach ($questions as $question => $answers) {
    echo "<p>$question</p>";
    foreach ($answers as $answer) {
        if ($question === "Яка сума 2 і 2?") {
            echo "<input type='radio' name='q1' value=''>$answer";
        } elseif ($question === "Які з наступних чисел є парними?") {
            echo "<input type='checkbox' name='q2[]' value=''>$answer";
        } else {
            echo "<input type='text' name='q3' value=''> <button type='submit'>Дати відповідь</button>";
        }
    }
}
$background_color = 'blue;';
$color = 'red;';
$width = '100px;';
$height = '100px;';
$tag = [
    "background-color:" => "$background_color",
    "color:" => "$color",
    "width:" => "$width",
    "height:" => "$height",
];
foreach ($tag as $key => $value) {
    echo "<br>$key $value";
}

echo "<br> <div style='";

foreach ($tag as $key => $value) {
    echo "$key $value";
}
echo "'>Hello</div>";
?>