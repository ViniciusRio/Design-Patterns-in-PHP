<?php

namespace App\ConceptualExample;

class Receiver
{
    public function doSomenthing(string $quote1): void
    {
        echo "Receivier a string: " . $quote1;
    }

    public function doSomenthingElse(string $quote2): void
    {
        echo "Receivier a string: " . $quote2;
    }
}
