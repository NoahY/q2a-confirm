<?php
    class qa_confirm_admin {

	function option_default($option) {
		
	    switch($option) {
		default:
		    return null;				
	    }
		
	}
        
        function allow_template($template)
        {
            return ($template!='admin');
        }       
            
        function admin_form(&$qa_content)
        {                       
                            
        // Process form input
            
            $ok = null;
            
            if (qa_clicked('confirm_plugin_save')) {
                qa_opt('confirm_close_plugin',(bool)qa_post_text('confirm_close_plugin'));
		$ok = qa_lang('admin/options_saved');
            }
  
        // Create the form for display

            
            $fields = array();
            
            $fields[] = array(
                'label' => 'Enable confirmation dialogue',
                'tags' => 'NAME="confirm_close_plugin"',
                'value' => qa_opt('confirm_close_plugin'),
                'type' => 'checkbox',
            );


            return array(           
                'ok' => ($ok && !isset($error)) ? $ok : null,
                    
                'fields' => $fields,
             
                'buttons' => array(
                    array(
                        'label' => 'Save',
                        'tags' => 'NAME="confirm_plugin_save"',
                    )
                ),
            );
        }
    }

