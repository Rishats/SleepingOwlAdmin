<?php

namespace SleepingOwl\Admin\Contracts\Template;

use KodiCMS\Assets\Contracts\AssetsInterface;

interface Assets extends AssetsInterface
{
    /**
     * Добавление глобальной переменной.
     *
     * @param string $key
     * @param mixed $value
     *
     * @return self
     */
    public function putGlobalVar($key, $value);

    /**
     * Получение массива глобальных перменных.
     *
     * @return array
     */
    public function globalVars();

    /**
     * @return string
     */
    public function renderGlobalVars();
}
