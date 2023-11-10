<?php

// File used to load and configure the files necessary to run our application.

declare(strict_types=1);

// Absolute path by using DIR - changing to require because our project won't work without it because we are using Composer
require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;

$app = new App();

// Not using run because of what the file is being used for.
return $app;
