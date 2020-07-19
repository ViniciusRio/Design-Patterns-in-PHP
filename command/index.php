<?php

require __DIR__ . '/vendor/autoload.php';

use App\ConceptualExample\Invoker;
use App\ConceptualExample\Commands\SimpleCommand;
use App\ConceptualExample\Commands\ComplexCommand;
use App\ConceptualExample\Receiver;


$invoker = new Invoker();
$invoker->setOnStart(new SimpleCommand("Say Hi!"));
$receiver = new Receiver();
$invoker->setOnFinish(new ComplexCommand($receiver, "Send email", "Save report"));

$invoker->doSomethingImportant();

