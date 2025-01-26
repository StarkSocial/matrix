// Пример использования
try {
    // Создание двух матриц
    const matrix1 = new Matrix([
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ]);

    const matrix2 = new Matrix([
        [9, 8, 7],
        [6, 5, 4],
        [3, 2, 1]
    ]);

    // Сложение матриц
    const sum = matrix1.add(matrix2);
    console.log("Сложение матриц:\n" + sum.toString());
    document.write("Сложение матриц:<br>" + sum.toString().replace(/\n/g, "<br>"));

    // Вычитание матриц
    const difference = matrix1.subtract(matrix2);
    console.log("Вычитание матриц:\n" + difference.toString());
    document.write("<br>Вычитание матриц:<br>" + difference.toString().replace(/\n/g, "<br>"));
} catch (error) {
    console.error("Ошибка:", error.message);
    document.write("Ошибка: " + error.message);
}