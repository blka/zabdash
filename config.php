<?php

require_once 'inc/functions.inc.php';

$zabServer = "10.20.0.232";
$zabUser = "squid";
$zabPass = "squid";
$zabURL = "http://10.20.0.232/zabbix/";

$useridlang = get_userid(CWebUser::getSessionCookie());
$lang = get_user_lang($useridlang);

$version = '0.0.2';

//Translate option: en_US or pt_BR
//$lang = 'en_US';
$labels = include_once 'locales/'.$lang.'.php';


?>
