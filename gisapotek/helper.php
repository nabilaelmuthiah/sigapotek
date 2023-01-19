<?php

$setUri['base'] = 'http://localhost/gisapotek/';

function getPage($a = '')
{
    $url = '?page=' . $a;
    $getbase_url = $GLOBALS['setUri']['base'];
    return $getbase_url . $url;
}

?>