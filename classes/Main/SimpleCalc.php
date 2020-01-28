<?php

declare(strict_types=1);

namespace Classes\Main;

use Classes\Main\{Adder, Calculator};

/*
 * Класс, в котором реализован интерфейс сложения 2 целых чисел
 */

class SimpleCalc extends Calculator implements Adder
{
    public function add(?int $a, ?int $b): ?int
    {
        $result = $a + $b;
        $this->total += $result;
        return $result;
    }
}