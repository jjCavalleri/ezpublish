<?php
/**
 * General test data for httpd server unit testing
 *
 * Provides data for testing routing, encoding, virtual host mode detection & more
 * on most httpd servers with different configurations.
 *
 * More info available on:
 * http://github.com/ezsystems/ezpublish/tree/master/tests/tests/lib/ezutils/server
 *
 * @copyright Copyright (C) 1999-2010 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU GPLv2
 * @package tests
 * @subpackage lib
 *
 */

return array (
  'PHP_VERSION' => '5.3.3',
  'PHP_OS' => 'WINNT',
  'PHP_SAPI' => 'cgi-fcgi',
  'php_uname' => 'Windows NT VL-PC 6.1 build 7600 (Unknow Windows version Business Edition) i586',
  'DIRECTORY_SEPARATOR' => '\\',
  'PHP_SHLIB_SUFFIX' => 'dll',
  'PATH_SEPARATOR' => ';',
  'DEFAULT_INCLUDE_PATH' => '.;C:\\php5\\pear',
  'include_path' => '.;C:\\php5\\pear',
  'PHP_MAXPATHLEN' => 260,
  'PHP_EOL' => '
',
  'PHP_INT_MAX' => 2147483647,
  'PHP_INT_SIZE' => 4,
  'getcwd' => 'C:\\inetpub\\ezp',
  '_SERVER' => 
  array (
    'PROCESSOR_ARCHITEW6432' => 'AMD64',
    '_FCGI_X_PIPE_' => '\\\\.\\pipe\\IISFCGI-280a3647-9c1b-4a96-ae2a-369cb478c60d',
    'PHP_FCGI_MAX_REQUESTS' => '10000',
    'PHPRC' => 'C:\\Program Files (x86)\\PHP\\',
    'ALLUSERSPROFILE' => 'C:\\ProgramData',
    'APPDATA' => 'C:\\Windows\\system32\\config\\systemprofile\\AppData\\Roaming',
    'APP_POOL_CONFIG' => 'C:\\inetpub\\temp\\apppools\\ezp.config',
    'APP_POOL_ID' => 'ezp',
    'CommonProgramFiles' => 'C:\\Program Files (x86)\\Common Files',
    'CommonProgramFiles(x86)' => 'C:\\Program Files (x86)\\Common Files',
    'CommonProgramW6432' => 'C:\\Program Files\\Common Files',
    'COMPUTERNAME' => 'VL-PC',
    'ComSpec' => 'C:\\Windows\\system32\\cmd.exe',
    'FP_NO_HOST_CHECK' => 'NO',
    'LOCALAPPDATA' => 'C:\\Windows\\system32\\config\\systemprofile\\AppData\\Local',
    'NUMBER_OF_PROCESSORS' => '2',
    'OS' => 'Windows_NT',
    'Path' => 'C:\\Program Files (x86)\\PHP\\;C:\\Windows\\system32;C:\\Windows;C:\\Windows\\System32\\Wbem;C:\\Windows\\System32\\WindowsPowerShell\\v1.0\\;',
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC',
    'PROCESSOR_ARCHITECTURE' => 'x86',
    'PROCESSOR_IDENTIFIER' => 'Intel64 Family 6 Model 15 Stepping 6, GenuineIntel',
    'PROCESSOR_LEVEL' => '6',
    'PROCESSOR_REVISION' => '0f06',
    'ProgramData' => 'C:\\ProgramData',
    'ProgramFiles' => 'C:\\Program Files (x86)',
    'ProgramFiles(x86)' => 'C:\\Program Files (x86)',
    'ProgramW6432' => 'C:\\Program Files',
    'PSModulePath' => 'C:\\Windows\\system32\\WindowsPowerShell\\v1.0\\Modules\\',
    'PUBLIC' => 'C:\\Users\\Public',
    'SystemDrive' => 'C:',
    'SystemRoot' => 'C:\\Windows',
    'TEMP' => 'C:\\Windows\\TEMP',
    'TMP' => 'C:\\Windows\\TEMP',
    'USERDOMAIN' => 'WORKGROUP',
    'USERNAME' => 'VL-PC$',
    'USERPROFILE' => 'C:\\Windows\\system32\\config\\systemprofile',
    'windir' => 'C:\\Windows',
    'FCGI_ROLE' => 'RESPONDER',
    'HTTP_CONNECTION' => 'keep-alive',
    'HTTP_KEEP_ALIVE' => '115',
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
    'HTTP_ACCEPT_CHARSET' => 'ISO-8859-1,utf-8;q=0.7,*;q=0.7',
    'HTTP_ACCEPT_ENCODING' => 'gzip,deflate',
    'HTTP_ACCEPT_LANGUAGE' => 'en-us,en;q=0.5',
    'HTTP_COOKIE' => '',
    'HTTP_HOST' => 'ezp.vl-lap.ez.no',
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.11) Gecko/20101012 Firefox/3.6.11',
    'IIS_UrlRewriteModule' => '7.1.0761.0',
    'APPL_MD_PATH' => '/LM/W3SVC/2/ROOT',
    'APPL_PHYSICAL_PATH' => 'C:\\inetpub\\ezp\\',
    'AUTH_TYPE' => '',
    'AUTH_PASSWORD' => '',
    'AUTH_USER' => '',
    'CERT_COOKIE' => '',
    'CERT_FLAGS' => '',
    'CERT_ISSUER' => '',
    'CERT_SERIALNUMBER' => '',
    'CERT_SUBJECT' => '',
    'CONTENT_LENGTH' => '0',
    'CONTENT_TYPE' => '',
    'DOCUMENT_ROOT' => 'C:\\inetpub\\ezp',
    'GATEWAY_INTERFACE' => 'CGI/1.1',
    'HTTPS' => 'off',
    'HTTPS_KEYSIZE' => '',
    'HTTPS_SECRETKEYSIZE' => '',
    'HTTPS_SERVER_ISSUER' => '',
    'HTTPS_SERVER_SUBJECT' => '',
    'INSTANCE_ID' => '2',
    'INSTANCE_NAME' => 'EZP',
    'INSTANCE_META_PATH' => '/LM/W3SVC/2',
    'LOCAL_ADDR' => '127.0.0.1',
    'LOGON_USER' => '',
    'PATH_INFO' => '/content/view/full/44',
    'PATH_TRANSLATED' => 'C:\\inetpub\\ezp\\index.php\\content\\view\\full\\44',
    'QUERY_STRING' => 'get=value',
    'REMOTE_ADDR' => '127.0.0.1',
    'REMOTE_HOST' => '127.0.0.1',
    'REMOTE_PORT' => '50547',
    'REMOTE_USER' => '',
    'REQUEST_METHOD' => 'GET',
    'REQUEST_URI' => '/index.php/content/view/full/44?get=value',
    'SCRIPT_FILENAME' => 'C:\\inetpub\\ezp\\index.php',
    'SCRIPT_NAME' => '/index.php',
    'SERVER_NAME' => 'ezp.vl-lap.ez.no',
    'SERVER_PORT' => '80',
    'SERVER_PORT_SECURE' => '0',
    'SERVER_PROTOCOL' => 'HTTP/1.1',
    'SERVER_SOFTWARE' => 'Microsoft-IIS/7.5',
    'URL' => '/index.php',
    'ORIG_PATH_INFO' => '/index.php/content/view/full/44',
    'PHP_SELF' => '/index.php/content/view/full/44',
    'REQUEST_TIME' => 1287751298,
  ),
  '_ENV' => 
  array (
  ),
);
