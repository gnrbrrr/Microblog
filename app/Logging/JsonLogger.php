<?php

namespace App\Logging;

use Illuminate\Log\Logger;
use Monolog\Formatter\JsonFormatter;
use App\Logging\JsonFormatterProcessor;

/**
 * Class LogProcessor
 * @package App\Custom\Monolog
 * @author Kenneth Chan <kenneth@simplexi.com>
 * @since 3/5/2019 2:28 PM
 */
class JsonLogger
{
    /**
     * Invoking
     * @param Logger $oLogger
     * @return void
     */
    public function __invoke($oLogger)
    {
        foreach ($oLogger->getHandlers() as $handler) {
            $handler->setFormatter(new JsonFormatter());
        }
        $oLogger->pushProcessor(new JsonFormatterProcessor());
    }
}
