<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
require_once __DIR__ . '/../vendor/autoload.php';
$parameters = Symfony\Component\Yaml\Yaml::parseFile(__DIR__ . '/parameters.yml');
$parameters = $parameters['parameters'];

// replace with mechanism to retrieve EntityManager in your app
$doctrineEntityManagerFactory = new RestOnPhp\Factory\DoctrineEntityManagerFactory();
$entityManager = $doctrineEntityManagerFactory->create(
    $parameters['database_host'],
    $parameters['database_port'],
    $parameters['database_name'],
    $parameters['database_user'],
    $parameters['database_password'],
    $parameters['project_dir'] . '/config',
    $parameters['cache_dir'],
    $parameters['entity_namespace']
);

return ConsoleRunner::createHelperSet($entityManager);
