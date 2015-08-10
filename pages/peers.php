<?php
$x = 0;
echo addall($getpeerinfo, $getaddednodeinfo);
echo '<table class="sortable" id="content">';
echo '<tr><th id="blank"></th><th>Address:</th><th>Port:</th><th>Ping (ms):</th><th>Version:</th><th>Protocol:</th><th>Last seen:</th><th>Add to node:</th></tr>';
foreach ($getpeerinfo as $peers){
	$x++;
	echo '<tr><td>' . $x . '</td>';
	$addr = explode(':', $peers['addr']);
	echo '<td><a href="http://www.ipaddress-finder.com/?ip=' . $addr[0] . '" target="_blank">' . $addr[0] . '</a></td>';
	echo '<td>' . $addr[1] . '</td>';
	echo '<td>' . number_format($peers['pingtime'] * 1000, 0) . '</td>';
	echo '<td>' . str_replace('/', '', $peers['subver']) . '</td>';
	echo '<td>' . $peers['version'] . '</td>';
	echo '<td>' . date('Y-m-d H:i:s O', $peers['lastrecv']) . ' GMT</td>';
	echo addnode($addr[0], $getaddednodeinfo);
}
?>