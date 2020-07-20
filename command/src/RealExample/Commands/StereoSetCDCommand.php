<?php 

namespace App\RealExample\Commands;

use App\RealExample\Interfaces\Command;
use App\RealExample\Models\Stereo;


class StereoSetCDCommand implements Command
{
    private $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->setCD();
    }
}