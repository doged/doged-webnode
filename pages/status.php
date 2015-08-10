<?php
$x = 0;
echo '<table id="content">';
$version = $getinfo['version'];
$version = preg_split('//', $getinfo['version'], 5, PREG_SPLIT_NO_EMPTY);
$version = $version[0] . $version[1] . '.' . $version[2] . $version[3] . '.' . $version[4];
echo '<tr><td>dogecoindarkd Version</td><td>' . $version . '</td></tr>';
echo '<tr><td>Protocol Version</td><td>' . $getinfo['protocolversion'] . '</td></tr>';
echo '<tr><td>Chain type:</td><td>' . $getblockchaininfo['chain'] . '</td></tr>';
echo '<tr><td>Block Status:</td><td>' . $getblockchaininfo['blocks'] . '/' . $getblockchaininfo['headers'] . ' (' . number_format(($getblockchaininfo['blocks'] / $getblockchaininfo['headers'] * 100),2) . '%)</td></tr>';
echo '<tr><td>Difficulty:</td><td>' . number_format($getblockchaininfo['difficulty'], 6, '.', ',') . '</td></tr>';
echo '<tr><td>Connections:</td><td>' . $getinfo['connections'] . '</td></tr>';
foreach ($getaddednodeinfo as $nodes){
	$x++;
};
echo '<tr><td>Added nodes:</td><td>' . $x . '</td></tr>';
?>