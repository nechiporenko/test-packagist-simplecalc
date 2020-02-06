<?php

declare(strict_types=1);

namespace Classes\Main;

use Classes\Main\Adder;

/*
 * Абстрактный класс, в котором объявлен метод для реализации интерфейса сложения 2 чисел,
 * реализовано хранение накопленного суммарного значения,
 * методы для его получения, очистки
 */

abstract class Calculator implements Adder
{
    protected ?int $total;

    public function __construct()
    {
        $this->resetTotal();
    }

    abstract public function add(?int $a, ?int $b): ?int;

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function resetTotal(): void
    {
        $this->total = 0;
    }
}