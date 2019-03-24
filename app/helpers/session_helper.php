<?php
	session_start();

	// Flash message helper
	function flash($flash = '', $message = '', $class = 'alert alert-success') {
 
		if (!empty($flash) and !empty($message) and empty($_SESSION[$flash])) {
	 
			$_SESSION[$flash] = $message;
			$_SESSION[$flash . '_class'] = $class;
	 
		} elseif (empty($message) and !empty($_SESSION[$flash])) {
	 
			$class = !empty($_SESSION[$flash . '_class']) ? $_SESSION[$flash . '_class'] : '';
			echo '<div class="' . $class . '" id="msg-flash">' . $_SESSION[$flash] . '</div>';
			unset($_SESSION[$flash]);
			unset($_SESSION[$flash . '_class']);
		}
	 
	}