<?php

declare(strict_types=1);

namespace Classes\Main;

/*
 * Интерфейс, определяющий функционал очень простой операции - сложения двух целых чисел
 */

interface Adder
{
    public function add(?int $a, ?int $b): ?int;
}