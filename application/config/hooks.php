<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hook['post_controller'][] = array(
        'class'    => 'Pjax',
        'function' => 'initialize',
        'filename' => 'Pjax.php',
        'filepath' => 'hooks'
);
