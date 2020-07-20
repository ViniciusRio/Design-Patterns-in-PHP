<?php

namespace App\RealExample;

use App\RealExample\Interfaces\Command;

class RemoteControl 
{
    private $command;

    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function pressButton(): void
    {
        $this->command->execute();
    }
}