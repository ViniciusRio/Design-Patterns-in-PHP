<?php

require __DIR__ . '/vendor/autoload.php';

use App\FacebookPoster;
use App\SocialNetworkPoster;

function clientCode(SocialNetworkPoster $creator)
{
    $creator->post("Hello world!");
}

echo "Testing Facebook:\n";
clientCode(new FacebookPoster("john_smith", "******"));
echo "\n\n";
