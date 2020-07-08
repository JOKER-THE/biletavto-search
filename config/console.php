<?php

/**
 * Файл конфигурации консольной части Yii-приложения Biletavto-search.
 * Консольная часть сервиса используется для миграций в базу данных
 * проекта.
 */
return [

    /**
     * Уникальный идентификатор консольного приложения.
     */
    'id' => 'biletavto-search-console',

    /**
     * Список путей допустимых алиасов.
     */
    'aliases' => [
        '@application' => dirname(__DIR__) . '/src'
    ],

    /**
     * Базовая директория проекта.
     */
    'basePath' => dirname(__DIR__),

    /**
     * Пространство имен, в котором находятся классы контроллера.
     */
    'controllerNamespace' => 'app\console',

    /**
     * Список компонентов, необходимых для работы приложения.
     */
    'components' => [

        /**
         * Подключение конфигурации базы данных.
         */
        'db' => require(__DIR__ . '/db.php')
    ]
];
