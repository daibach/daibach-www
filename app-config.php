<?php
define('SITE_NAME',               'Dafydd Vaughan');
define('SITE_BASE_URL',           getenv('APPSETTING_SITE_BASE_URL'));
define('SITE_LOG_THRESHOLD',      0);
define('SITE_ENCRYPT_KEY',        'xxx');
define('SITE_COOKIE_NAME',        'daibach');
define('SITE_COOKIE_DOMAIN',      '.dafyddvaughan.uk');
define('SITE_COOKIE_PREFIX',      'daibach_');

define('GA_CODE',                 getenv('APPSETTING_GA_CODE'));

DEFINE('CONTACT_API_CODE',        getenv('APPSETTING_CONTACT_API_USER'));
DEFINE('CONTACT_API_KEY',         getenv('APPSETTING_CONTACT_API_KEY'));
DEFINE('CONTACT_API_ENDPOINT',    getenv('APPSETTING_CONTACT_API_ENDPOINT'));
DEFINE('CONTACT_API_UA',          'Contact Message Sender/0.1 (+https://dafyddvaughan.uk)');
DEFINE('CONTACT_API_HTTP_AUTH',   TRUE);
DEFINE('CONTACT_API_HTTP_AUTH_U', getenv('APPSETTING_CONTACT_API_HTTPAUTH_U'));
DEFINE('CONTACT_API_HTTP_AUTH_P', getenv('APPSETTING_CONTACT_API_HTTPAUTH_P'));
