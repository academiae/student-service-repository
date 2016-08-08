<?php

/**
 * The Service Manager component can be configured by passing an associative array to the component's constructor.
 *
 * @see https://docs.zendframework.com/zend-servicemanager/configuring-the-service-manager/
 */

use Academiae\Student\Factory\Repository\Masterlist as MasterListFactory;
use Academiae\Student\Repository\Masterlist as MasterListRepository;

return [
    'aliases'               => [
        MasterListRepository\RepositoryInterface::class    => MasterListRepository\DummyRepository::class,       
    ],
    'factories'            => [
        MasterListRepository\DummyRepository::class   => MasterListFactory\MasterListRepositoryFactory::class
    ],
    'invokables'            => [],
    'services'              => [],
    'abstract_factories'    => [],
    'delegators'            => [],
    'shared'                => [],
    'shared_by_default'     => true
];
