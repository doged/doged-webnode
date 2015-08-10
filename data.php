<?php

require_once 'settings.php';
if ($login) require_once 'login.php';
require_once 'jsonRPCClient.php';

$bitcoin = new jsonRPCClient($address);

require_once 'functions.php';

$getinfo = $bitcoin->getinfo();
$getpeerinfo = $bitcoin->getpeerinfo();
$getaddednodeinfo = $bitcoin->getaddednodeinfo(false);
$getblockchaininfo = $bitcoin->getblockchaininfo();
?>