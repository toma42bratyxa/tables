function booleanToString($val) {
    return $val ? '1' : '0';
}

$values = [
    [0, 0],
    [0, 1],
    [1, 0],
    [1, 1],
];

echo "<table>";
echo "<caption>Таблица истинности PHP</caption>";
echo "<tr><th>A</th><th>B</th><th>!A</th><th>A || B</th><th>A && B</th><th>A xor B</th></tr>";

foreach ($values as $pair) {
    $a = $pair[0];
    $b = $pair[1];

    $notA = !$a;
    $or = $a || $b;
    $and = $a && $b;
    $xorResult = ($a xor $b);

    echo "<tr>
        <td>$a</td>
        <td>$b</td>
        <td>" . booleanToString($notA) . "</td>
        <td>" . booleanToString($or) . "</td>
        <td>" . booleanToString($and) . "</td>
        <td>" . booleanToString($xorResult) . "</td>
    </tr>";
}
echo "</table>";