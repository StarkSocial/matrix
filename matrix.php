<?php

class Matrix
{
    private array $data;

    public function __construct(array $data)
    {
        if (!$this->isValidMatrix($data)) {
            throw new InvalidArgumentException("Неверный формат матрицы. Все строки должны иметь одинаковое количество столбцов.");
        }
        $this->data = $data;
    }

    public function getRows(): int
    {
        return count($this->data);
    }

    public function getColumns(): int
    {
        return count($this->data[0]);
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function add(Matrix $other): Matrix
    {
        $this->validateSameDimensions($other);

        $result = [];
        for ($i = 0; $i < $this->getRows(); $i++) {
            $result[$i] = [];
            for ($j = 0; $j < $this->getColumns(); $j++) {
                $result[$i][$j] = $this->data[$i][$j] + $other->data[$i][$j];
            }
        }

        return new Matrix($result);
    }

    public function subtract(Matrix $other): Matrix
    {
        $this->validateSameDimensions($other);

        $result = [];
        for ($i = 0; $i < $this->getRows(); $i++) {
            $result[$i] = [];
            for ($j = 0; $j < $this->getColumns(); $j++) {
                $result[$i][$j] = $this->data[$i][$j] - $other->data[$i][$j];
            }
        }

        return new Matrix($result);
    }

    private function isValidMatrix(array $data): bool
    {
        $rowCount = count($data);
        if ($rowCount === 0) {
            return false;
        }

        $columnCount = count($data[0]);
        foreach ($data as $row) {
            if (count($row) !== $columnCount) {
                return false;
            }
        }

        return true;
    }

    private function validateSameDimensions(Matrix $other): void
    {
        if ($this->getRows() !== $other->getRows() || $this->getColumns() !== $other->getColumns()) {
            throw new InvalidArgumentException("Матрицы должны иметь одинаковые размеры.");
        }
    }

    public function __toString(): string
    {
        $output = "";
        foreach ($this->data as $row) {
            $output .= implode(" ", $row) . "\n";
        }
        return $output;
    }
}

?>