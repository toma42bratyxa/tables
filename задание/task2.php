
$data = [
    true,
    false,
    1,
    0,
    -1,
    "1",
    null,
    "php"
];

$labels = [
    'true',
    'false',
    '1',
    '0',
    '-1',
    '"1"',
    'null',
    '"php"'
];

// Таблица гибкого сравнения (==)
echo "<table>";
echo "<caption>Гибкое сравнение в PHP (==)</caption>";
echo "<tr><th></th>";
foreach ($labels as $label) {
    echo "<th>$label</th>";
}
echo "</tr>";

foreach ($data as $i => $rowVal) {
    echo "<tr><th>{$labels[$i]}</th>";
    foreach ($data as $colVal) {
        $result = ($rowVal == $colVal) ? 'true' : 'false';
        echo "<td>$result</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Таблица жёсткого сравнения (===)
echo "<table>";
echo "<caption>Жёсткое сравнение в PHP (===)</caption>";
echo "<tr><th></th>";
foreach ($labels as $label) {
    echo "<th>$label</th>";
}
echo "</tr>";

foreach ($data as $i => $rowVal) {
    echo "<tr><th>{$labels[$i]}</th>";
    foreach ($data as $colVal) {
        $result = ($rowVal === $colVal) ? 'true' : 'false';
        echo "<td>$result</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>