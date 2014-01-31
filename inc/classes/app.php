<?php

    class app
    {
        private static $config = null;

        public static function start()
        {
            glue::stick(include(ROOT_DIR.'inc/routes.php'));
        }

        public static function cfg()
        {
            if (is_null(self::$config)) self::$config = include(ROOT_DIR.'inc/config.php');
            return self::$config;
        }
    }