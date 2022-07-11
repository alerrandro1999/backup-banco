<?php

require __DIR__ . '/vendor/autoload.php';

use App\Backup\BackupAutomatico;
use App\VariaviesDeAmbiente\Variaveis;

Variaveis::load(__DIR__);

$automatic = new BackupAutomatico;
$automatic->backupAutomaticoDoBancoDeDados();
