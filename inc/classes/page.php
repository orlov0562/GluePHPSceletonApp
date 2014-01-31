<?php

    class page extends template
    {
        protected $title = '';
        protected $header = '';
        protected $content = '';

        protected function render()
        {
            echo $this->get_template_index();
        }

        protected function get_template_index()
        {
            return $this->view('base/index', array(
                'header' => $this->get_template_header(),
                'body' => $this->get_template_body(),
                'footer' => $this->get_template_footer(),
            ));
        }

        protected function get_template_header()
        {
            return $this->view( 'base/header', array(
                    'title' => $this->title,
                    'topmenu'=>$this->get_template_topmenu(),
            ));
        }

        protected function get_template_body()
        {
            return $this->view( 'base/body', array(
                    'content' => $this->get_template_body_content(),
            ));
        }

        protected function get_template_body_content()
        {
            return $this->view( 'page', array(
                        'header' => $this->header,
                        'content' => $this->content,
            ));
        }

        protected function get_template_topmenu()
        {
            return $this->view( 'base/topmenu');
        }

        protected function get_template_footer()
        {
            return $this->view( 'base/footer');
        }
    }