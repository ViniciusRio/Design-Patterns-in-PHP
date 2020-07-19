<?php

namespace App\ConceptualExample;

use App\ConceptualExample\Interfaces\Command;

class Invoker 
{
    private $onStart;
    private $onFinish;

    public function setOnStart(Command $commandStart): void
    {
        $this->onStart = $commandStart;
    }

    public function setOnFinish(Command $commandFinish): void
    {
        $this->onFinish = $commandFinish;
    }

    public function doSomethingImportant(): void
    {
        echo "Invoker: Does anybody want something done before I begin?\n";
        if ($this->onStart instanceof Command) {
            $this->onStart->execute();
        }

        echo "Invoker: ...doing something really important...\n";

        echo "Invoker: Does anybody want something done after I finish?\n";
        if ($this->onFinish instanceof Command) {
            $this->onFinish->execute();
        }
    }
}
