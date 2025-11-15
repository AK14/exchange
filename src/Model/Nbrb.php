<?php
namespace Ak\Exchange\Model;
use Ak\Exchange\Request\Nbrb as NbrbRequest;


class Nbrb
{
    /**
     * @var array Поля валюты, которые необходимо извлечь из ответа API.
     */
    public array $currencyFields = array('Cur_Code', 'Cur_Name','Cur_Abbreviation');

    /**
     * Получает список валют из API НБРБ и фильтрует их по заданным полям.
     *
     * @return array Массив валют, где каждая валюта представлена массивом с выбранными полями.
     */
    public function listOfCurrencies(): array
    {
        $result = array();
        $request = new NbrbRequest();

        foreach ($request as $currency) {
            $result[] = array_intersect_key(
                $currency,
                array_flip($this->currencyFields)
            );
        }

        return $result;
    }
}