<?php
    class controller_blog extends page
    {
        public function GET($matches)
        {
            $this->title = app::cfg()->headers->blog;
            $this->header = app::cfg()->headers->blog;
            $this->content = $this->view('blog', array(
                'page' => $matches[1],
            ));
            $this->render();
        }
    }