<?php

 return array(
      '/' => 'controller_index',
      '/blog/(\d+)' => 'controller_blog',
      '/contacts' => 'controller_contacts',      
      '.*' => 'controller_err404',
 );
