<?php

namespace App\Backup;

class BackupAutomatico
{
    public function gerarNomeComDataDoDia()
    {
        return getenv('NOME_DO_BACKUP') . date('dmY') . '.sql';
    }

    public function backupAutomaticoDoBancoDeDados()
    {
        return shell_exec(getenv('DADOS_DO_BANCO') . $this->gerarNomeComDataDoDia());
    }
}