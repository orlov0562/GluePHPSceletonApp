<?php
    class controller_index extends page
    {
        public function GET()
        {
            $this->title = app::cfg()->headers->index;
            $this->header = app::cfg()->headers->index;
            $this->content = 'Hello world';
            $this->render();
        }
    }