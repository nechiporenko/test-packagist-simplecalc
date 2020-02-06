<?php

declare(strict_types=1);

namespace Nechiporenko\Classes;

use Nechiporenko\Classes\Main\SimpleCalc;

/*
 * Класс-фасад приложения
 * который склаывает числа и выводит итоговый результат,
 * скрывая подробности реализации
 */

class App
{
    private SimpleCalc $simpleCalc;

    public function __construct(SimpleCalc $simpleCalc = null)
    {
        $this->simpleCalc = $simpleCalc ?: new SimpleCalc();
    }

    public function execute($a, $b): void
    {
        try {
            $result = $this->simpleCalc->add($a, $b);
            echo $result . "<br>";
        } catch (\TypeError $e) {
            echo $e->getMessage() . "<br>";
        }
    }

    public function showTotal(): void
    {
        echo "Total: " . $this->simpleCalc->getTotal() . "<br>";
        echo "Done \u{1F602}<br>";
        $this->reset();
    }

    private function reset(): void
    {
        $this->simpleCalc->resetTotal();
    }
}
