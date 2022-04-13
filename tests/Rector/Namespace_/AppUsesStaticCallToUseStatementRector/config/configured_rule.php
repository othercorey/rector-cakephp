<?php

declare(strict_types=1);

use Rector\CakePHP\Rector\Namespace_\AppUsesStaticCallToUseStatementRector;

use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../../../../../config/config.php');

    $services = $rectorConfig->services();

    $services->set(AppUsesStaticCallToUseStatementRector::class);
};
