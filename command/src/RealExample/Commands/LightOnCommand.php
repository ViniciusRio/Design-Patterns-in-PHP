<?php 

namespace App\RealExample\Commands;

use App\RealExample\Interfaces\Command;
use App\RealExample\Models\Light;


class LightOnCommand implements  Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->lightOn();
    }
}