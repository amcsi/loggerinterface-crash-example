<?php
declare(strict_types=1);

namespace App;

use Psr\Log\LoggerInterface;

class MyCrashingService
{
    public function __construct(LoggerInterface $logger)
    {
        echo "This line doesn't get reached.";
    }
}
