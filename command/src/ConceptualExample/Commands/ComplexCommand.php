<?php

namespace App\ConceptualExample\Commands;

use App\ConceptualExample\Interfaces\Command;
use App\ConceptualExample\Receiver;

class ComplexCommand implements Command
{
    private $receivier;
    private $quote1;
    private $quote2;

    public function __construct(Receiver $receivier, string $quote1, string $quote2)
    {
        $this->receivier = $receivier;
        $this->quote1 = $quote1;
        $this->quote2 = $quote2;
    }

    public function execute(): void 
    {
        echo "A complex command";

        $this->receivier->doSomenthing($this->quote1);
        $this->receivier->doSomenthingElse($this->quote2);

    }
}