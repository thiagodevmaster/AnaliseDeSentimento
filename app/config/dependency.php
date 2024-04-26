<?php
use App\Infra\Persistence\ConnectionFactory;
use DI\ContainerBuilder;

$builder = new ContainerBuilder();

$builder->addDefinitions([
    PDO::class => function (): PDO {
        $connection = ConnectionFactory::CreateConnection();
        return $connection;
    }
]);

$container = $builder->build();

return $container;