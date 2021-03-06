<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['post_controller_constructor'][] = array(
                                'class'    => '',
                                'function' => 'load_db_config_settings',
                                'filename' => 'config.php',
                                'filepath' => 'hooks'
                                );

$hook['post_controller_constructor'][] = array(
                                'class'    => '',
                                'function' => 'add_current_user_to_view_vars',
                                'filename' => 'current_user.php',
                                'filepath' => 'hooks'
                                );

$hook['post_controller_constructor'][] = array(
                                'class'    => 'CILogger',
                                'function' => 'pre_application',
                                'filename' => 'CILogger.php',
                                'filepath' => 'libraries'
                                );
$hook['post_controller'][] = array(
                                'class'    => 'CILogger',
                                'function' => 'post_application',
                                'filename' => 'CILogger.php',
                                'filepath' => 'libraries'
                                );

$hook['post_system'][] = array(
                                'class'    => 'CILogger',
                                'function' => 'resolve_profiling',
                                'filename' => 'CILogger.php',
                                'filepath' => 'libraries'
                            );
/* End of file hooks.php */
/* Location: ./system/application/config/hooks.php */
