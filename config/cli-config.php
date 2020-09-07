<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use RestOnPhp\Kernel;

require_once __DIR__ . '/../vendor/autoload.php';

$kernel = new Kernel('cli', false);
$dependencyContainer = $kernel->getDependencyContainer();
$parameters = $dependencyContainer->getParameterBag()->all();

// replace with mechanism to retrieve EntityManager
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
