<?php

	class qa_html_theme_layer extends qa_html_theme_base {

	// theme replacement functions

		function head_custom()
		{
			qa_html_theme_base::head_custom();
			if(in_array($this->template, array('question','ask','not-found')) && qa_opt('confirm_close_plugin')) { 
				$this->output('<script type="text/javascript">
jQuery("document").ready(function() {
	jQuery("textarea").each( function(i) {
		if(this.value) {
			window.onbeforeunload = function(event) {
				return "You have entered text; are you sure you wish to leave this page?";
			}
			return;
		}
		else 
			window.onbeforeunload = null;
	});
	jQuery("textarea").keyup(function(){checkForContent()});
	jQuery("form").submit(function(event) {
		window.onbeforeunload = null;
	});
});
function checkForContent() {
	jQuery("textarea").each( function(i) {
		if(this.value) {
			window.onbeforeunload = function(event) {
				return "You have entered text; are you sure you wish to leave this page?";
			}
			return;
		}
		else 
			window.onbeforeunload = null;
	});
}
</script>');
			}
		}
	}

