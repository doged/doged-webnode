<?php
if (isset($_POST['action'])){
	if (isset($_POST['ip'])){
		if (filter_var($_POST['ip'], FILTER_VALIDATE_IP)){
			if ($_POST['action'] == 'add'){
				$getaddednodeinfo = $bitcoin->getaddednodeinfo(false);
				$action = 'true';
				foreach ($getaddednodeinfo as $nodes) {
					if ($nodes['addednode'] == $_POST['ip']) {
						$action = 'false';
					}
				}
				if ($action == 'true'){
					$addnode = $bitcoin->addnode($_POST['ip'], 'add');
					if ($writetoconf) {
						$config = fopen($configfile, 'a') or die("Unable to open config file!");
						fwrite($config, "\n");
						$newline = 'addnode=' . $_POST['ip'];
						fwrite($config, $newline);
						fclose($config);
					}
				}
				else echo '<script type="text/javascript">alert("' . $_POST['ip'] . ' Has already been added.");</script>';
			}
		}
	}
	if (isset($_POST['all'])){
		$addr = explode(',', $_POST['all']);
		if ($writetoconf) $config = fopen($configfile, 'a') or die("Unable to open config file!");
		foreach ($addr as $ip) {
			if (filter_var($ip, FILTER_VALIDATE_IP)){
				$addnode = $bitcoin->addnode($ip, 'add');
				if ($writetoconf) {
					fwrite($config, "\n");
					$newline = 'addnode=' . $ip;
					fwrite($config, $newline);
				}
			}
		}
		if ($writetoconf) fclose($config);
	}
}

function addall($peerinfo, $addednodeinfo) {
	$ips = '';
	$number = 0;
	foreach ($peerinfo as $peer) {
		$addr = explode(':', $peer['addr']);
		$peer = $addr[0];
		$add = true;
		foreach ($addednodeinfo as $nodes) {
			$node = $nodes['addednode'];
			if ($peer == $node) $add = false;
		}
		if ($add) {
			$ips = $ips . $peer . ',';
			$number++;
		}
	}
	if ($number > 0) echo '<center><form action="" method="post"><input type="hidden" name="all" value="' . $ips . '"><input type="submit" name="action" value="Add ' . $number . ' new peers to node"></form></center>';
}

function addnode($ip, $addednodeinfo) {
	$nodestatus = '<form action="" method="post"><input type="hidden" name="ip" value="' . $ip . '"><input type="submit" name="action" value="add"></form>';
	foreach ($addednodeinfo as $nodes) {
		if ($nodes['addednode'] == $ip) {
			$nodestatus = '<img src="images/accept.png" id="accept">';
		}
	}
	$return = '<td>' . $nodestatus . '</td></tr>';
	return $return;
}

function nodestatus($ip, $peerinfo) {
	$nodestatus = '<td id="offline">Offline</td>';
	foreach ($peerinfo as $peers) {
		$addr = explode(':', $peers['addr']);
		if ($addr[0] == $ip) {
			$nodestatus = '<td id="online">Online</td>';
		}
	}
	return $nodestatus;
}
?>