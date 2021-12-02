<?php


namespace Iayoo\MysqlLogger\monolog\mysql;

use Exception;
//use Monolog\Logger;

class Log
{
    /**
     * Create a custom Monolog instance.
     *
     * @param  array $config
     * @return Logger
     * @throws Exception
     */
    public function __invoke(array $config)
    {
        $channel = $config['name'] ?? env('APP_ENV');
        $monolog = new Logger($channel);
        $monolog->pushHandler(new MysqlHandler());
        return $monolog;
    }
}
