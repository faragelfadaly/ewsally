<?php
/*
------------------------------------------------------
  www.idiotminds.com
--------------------------------------------------------
*/
session_start();

$base_url= filter_var('Your domain path', FILTER_SANITIZE_URL);

// Visit https://code.google.com/apis/console to generate your
// oauth2_client_id, oauth2_client_secret, and to register your oauth2_redirect_uri.
define('CLIENT_ID','881476362851-f7egu0j6eo8b1gm70q5f0vpmh4ug0rr1.apps.googleusercontent.com');
define('CLIENT_SECRET','7ei7FwmvwQuYM3R2YQq6G2Ky');
define('REDIRECT_URI','');
define('APPROVAL_PROMPT','auto');
define('ACCESS_TYPE','offline');
?>
