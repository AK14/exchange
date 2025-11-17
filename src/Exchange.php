<?php

namespace Ak14\Exchange;

use Ak14\Exchange\Model\Nbrb;

/**
 * Класс для работы с курсами валют.
 */
class Exchange
{
    /**
     * Возвращает список валют
     * @return array
     */
    public function currencies(): array
    {
        return (new Nbrb())->listOfCurrencies();
    }
}