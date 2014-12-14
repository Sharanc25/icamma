<?php

/**
 * @file
 * Template.php - process theme data for your sub-theme.
 * 
 */

/**
* Custom theme function for the login/register link.
* Change "Register" to create an account
*/
function icamma_theme_lt_login_link($variables) {
// Only display register text if registration is allowed.
	if (variable_get('user_register', USER_REGISTER_VISITORS_ADMINISTRATIVE_APPROVAL)) {
		return t('Log in / Create an account');
	}
	else {
		return t('Log in');
	}
} 
// Convert username to link in logged in users.
/*function icamma_theme_lt_loggedinblock(){
  global $user;
  return l(check_plain($user->name), 'user/' . $user->uid) .' | ' . l(t('Log out'), 'user/logout');
}*/