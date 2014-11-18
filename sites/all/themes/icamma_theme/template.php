<?php

/**
 * @file
 * Template.php - process theme data for your sub-theme.
 * 
 */

// Convert username to link in logged in users.
function icamma_theme_lt_loggedinblock(){
  global $user;
  return l(check_plain($user->name), 'user/' . $user->uid) .' | ' . l(t('Log out'), 'user/logout');
}