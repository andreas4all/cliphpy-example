#!/usr/bin/env php
<?php
use
  Cliphpy\Lib\Cli,
  Cliphpy\Lib\Log,
  Cliphpy\Prototypes\Configuration;

echo "Example for Cliphpy". PHP_EOL;

require_once __DIR__ . "/../cliphpy/autoloader/autoloader.php";

$config = new Configuration;
$config->pidDir = __DIR__ . "/../pid";
$config->logDir = __DIR__ . "/../log";

$log = new Log;
$log->setLogDir($config->logDir);

$cli = new Cli();
$cli->setConfig($config);
$cli->setLog($log);
$cli->setName("Cliphpy Example Script");
$cli->getOptions();
$cli->checkChild();

$idChild = $cli->getIdChild();

$log->info("Example script was started whit idChild " . $idChild);

// do something awsome

$cli->removePid();
