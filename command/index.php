<?php

require __DIR__ . '/vendor/autoload.php';

use App\RealExample\RemoteControl;
use App\RealExample\Models\Light;
use App\RealExample\Models\Stereo;
use App\RealExample\Commands\LightOnCommand;
use App\RealExample\Commands\StereoSetCDCommand;

// invoker
$remoteControl = new RemoteControl();

// receiver
$light = new Light();
$stereo = new Stereo();

// commands
// light
$remoteControl->setCommand(new LightOnCommand($light));
$remoteControl->pressButton();
// stereo
$remoteControl->setCommand(new StereoSetCDCommand($stereo));
$remoteControl->pressButton();
