<?php

    class template
    {
        protected function view($file, $params=array())
        {
            $ret = '';
            $filepath = app::cfg()->views_base_path
                        .$file
                        .'.php'
            ;
            if (file_exists($filepath))
            {
                extract($params);
                $old_err_reporting_level = error_reporting();
                error_reporting($old_err_reporting_level & ~E_NOTICE);
                ob_start();
                include($filepath);
                $ret = ob_get_clean();
                error_reporting($old_err_reporting_level);
            }
            else
            {
                throw new Exception('Template file: '.$filepath.' not found');
            }
            return $ret;
        }
    }