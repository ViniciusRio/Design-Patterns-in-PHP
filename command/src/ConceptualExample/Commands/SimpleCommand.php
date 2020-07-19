<?php

namespace App\ConceptualExample\Commands;

use App\ConceptualExample\Interfaces\Command;

class SimpleCommand implements Command
{
    private $payload;

    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    public function execute(): void 
    {
        echo "A simple method: " . $this->payload;
    }
}