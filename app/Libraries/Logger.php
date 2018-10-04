<?php

namespace App\Libraries;

use Log;

class Logger
{
    private static function logging($message) {
        return print_r($message, true);
    }

    public static function debug($message, array $context = array())
    {
        Log::debug(self::logging($message), $context);
    }

    public static function info($message, array $context = array())
    {
        Log::info(self::logging($message), $context);
    }
}
