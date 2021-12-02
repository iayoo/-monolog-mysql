<?php
namespace Iayoo\MysqlLogger\monolog\mysql;

class Logger extends \Monolog\Logger
{
    public function getLogerId(){
        foreach ($this->getHandlers() as $handler){
            if ($handler instanceof MysqlHandler){
                return $handler->getLogId();
            }
        }
        return null;
    }
}
