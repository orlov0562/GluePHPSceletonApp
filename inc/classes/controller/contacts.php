<?php
    class controller_contacts extends page
    {
        public function GET()
        {
            $this->title = app::cfg()->headers->contacts;
            $this->header = app::cfg()->headers->contacts;
            $this->content = 'Feedback page';
            $this->render();
        }
    }