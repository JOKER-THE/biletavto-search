<?php

/**
 * Файл примера параметров Yii-приложения Biletavto-search.
 *
 * Данный файл не используется системой напрямую. Для внесения параметров
 * при развертке проекта, файл необходимо скопировать и переименовать как:
 * "params.php".
 *
 * Текущей же файл используется в качестве примера организации конфигурации,
 * а также хранится в git-репозитории.
 */
return [

    /**
     * URL API-метода для получения рейсов
     * агрегатора "Автовокзал Онлайн".
     */
    'avtovokzalonline_url' => 'api_url/api_version/route/search',

    /**
     * URL API-метода для получения рейсов
     * агрегатора "Билетавто".
     */
    'biletavto_url' => 'api_url/api_version/route/search',

    /**
     * URL API-метода для получения рейсов
     * агрегатора "Unitiki".
     */
    'unitiki_url' => 'api_url/api_version/route/search',

    /**
     * URL API-метода для получения токена,
     * необходимо для работы с API-сервисом.
     */
    'auth_url' => 'api_url/token',

    /**
     * Уникальный идентификатор агрегатора
     * "Билетавто".
     *
     * Соответствует аналогичному значению
     * в сервисе API и используется для 
     * генерации URL страницы оплаты.
     */
    'biletavto_agent_id' => 0,

    /**
     * Уникальный идентификатор агрегатора
     * "Автовокзал Онлайн".
     *
     * Соответствует аналогичному значению
     * в сервисе API и используется для 
     * генерации URL страницы оплаты.
     */
    'avtovokzal_online_agent_id' => 1,

    /**
     * Уникальный идентификатор агрегатора
     * "Unitiki".
     *
     * Соответствует аналогичному значению
     * в сервисе API и используется для 
     * генерации URL страницы оплаты.
     */
    'unitiki_agent_id' => 2,

    /**
     * Имя пользователя, используемое для
     * получения токена от API-сервиса.
     */
    'username' => '',

    /**
     * Пароль пользователя, используемый
     * для получения токена от API-сервиса.
     */
    'password' => ''
];
