<?php
        
/*              
        Plugin Name: Confirm
        Plugin URI: https://github.com/NoahY/q2a-confirm
        Plugin Update Check URI: https://github.com/NoahY/q2a-confirm/raw/master/qa-plugin.php
        Plugin Description: Confirm close when text is entered
        Plugin Version: 1.0b1
        Plugin Date: 2011-11-24
        Plugin Author: NoahY
        Plugin Author URI:                              
        Plugin License: GPLv2                           
        Plugin Minimum Question2Answer Version: 1.3
*/                      
                        
                        
        if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
                        header('Location: ../../');
                        exit;   
        }               

        qa_register_plugin_module('module', 'qa-confirm-admin.php', 'qa_confirm_admin', 'Confirm Admin');
        
        qa_register_plugin_layer('qa-confirm-layer.php', 'Confirm Replacement Layer');
                        
                        
/*                              
        Omit PHP closing tag to help avoid accidental output
*/                              
                          

