<?php
    class controller_err404 extends page
    {
        public function GET()
        {
            header("HTTP/1.0 404 Not Found");
            $this->title = 'Error 404';
            $this->header = 'Error 404';
            $this->content = 'Page not found';
            $this->render();
        }
    }