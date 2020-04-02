<?php

namespace App\Logging;

/**
 * Class LogProcessor
 * @package App\Custom\Monolog
 * @author Kenneth Chan <kenneth@simplexi.com>
 * @since 3/5/2019 2:28 PM
 */
class JsonFormatterProcessor
{
    /**
     * Invoker
     * @param array $aLogRecord original log contents
     * @return array
     */
    public function __invoke(array $aLogRecord)
    {
        $aLogOutput = [
            'app_name' => config('app.name'),
            'app_url' => config('app.url'),
            'app_env' => config('app.env'),
            'app_timezone' => config('app.timezone'),
            'datetime' => $aLogRecord['datetime']->format('Y-m-d H:i:s'),
            'level' => $aLogRecord['level'],
            'level_name' => $aLogRecord['level_name'],
            'message' => $aLogRecord['message'],
            'host' => request()->server('SERVER_ADDR'),
            'remote_address' => request()->server('REMOTE_ADDR'),
            'user_agent' => request()->server('HTTP_USER_AGENT')
        ];

        $aLogOutput['context'] = $aLogRecord['context'] ?: [];
        $aLogOutput['request_body'] = request()->all() ?: [];

        return $aLogOutput;
    }
}
