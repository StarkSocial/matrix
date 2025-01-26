<?php

require_once 'matrix.php';

try {
    // Создание двух матриц
    $matrix1 = new Matrix([
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9],
    ]);

    $matrix2 = new Matrix([
        [9, 8, 7],
        [6, 5, 4],
        [3, 2, 1],
    ]);

    // Сложение матриц
    $sum = $matrix1->add($matrix2);
    echo "<p>Сложение матриц:</p>";
    echo "<pre>" . htmlspecialchars($sum) . "</pre>";

    // Вычитание матриц
    $difference = $matrix1->subtract($matrix2);
    echo "<p>Вычитание матриц:</p>";
    echo "<pre>" . htmlspecialchars($difference) . "</pre>";
} catch (Exception $e) {
    echo "<p style='color: red;'>Ошибка: " . htmlspecialchars($e->getMessage()) . "</p>";
}

?>