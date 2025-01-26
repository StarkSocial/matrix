// Класс для работы с прямоугольными матрицами
class Matrix {
    constructor(data) {
        if (!this.isValidMatrix(data)) {
            throw new Error("Неверный формат матрицы. Все строки должны иметь одинаковое количество столбцов.");
        }
        this.data = data;
    }

    get rows() {
        return this.data.length;
    }

    get columns() {
        return this.data[0].length;
    }

    add(other) {
        this.validateSameDimensions(other);

        const result = this.data.map((row, i) =>
            row.map((value, j) => value + other.data[i][j])
        );

        return new Matrix(result);
    }

    subtract(other) {
        this.validateSameDimensions(other);

        const result = this.data.map((row, i) =>
            row.map((value, j) => value - other.data[i][j])
        );

        return new Matrix(result);
    }

    isValidMatrix(data) {
        if (!Array.isArray(data) || data.length === 0) {
            return false;
        }

        const columnCount = data[0].length;
        return data.every(row => Array.isArray(row) && row.length === columnCount);
    }

    validateSameDimensions(other) {
        if (this.rows !== other.rows || this.columns !== other.columns) {
            throw new Error("Матрицы должны иметь одинаковые размеры.");
        }
    }

    toString() {
        return this.data.map(row => row.join("\t")).join("\n");
    }
}