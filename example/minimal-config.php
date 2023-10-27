<?php

declare(strict_types=1);

use Doctrine\ORM\Mapping\Driver\AttributeDriver;
use Doctrine\Persistence\Mapping\Driver\MappingDriverChain;

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'params' => ['url' => 'sqlite::memory:'],
            ],
        ],
        'driver' => [
            'orm_default' => [
                'class' => MappingDriverChain::class,
                'drivers' => ['My\Entity' => 'my_entity'],
            ],
            'my_entity' => [
                'class' => AttributeDriver::class,
                'paths' => [__DIR__ . '/doctrine'],
            ],
        ],
    ],
];
