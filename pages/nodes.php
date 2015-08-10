<?php
$x = 0;
echo '<center><form action="" method="post" autocomplete="off">Add Node: <input type="text" name="ip"><input type="submit" name="action" value="add"></form></center>';
echo '<table class="sortable" id="content">';
echo '<tr><th id="blank"></th><th>Address:</th><th>Status:</th></tr>';
foreach ($getaddednodeinfo as $nodes){
	$x++;
	echo '<tr><td>' . $x . '</td>';
	echo '<td><a href="http://www.ipaddress-finder.com/?ip=' . $nodes['addednode'] . '" target="_blank">' . $nodes['addednode'] . '</a></td>';
	echo nodestatus($nodes['addednode'], $getpeerinfo);
}
?>