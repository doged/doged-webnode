<?php
require_once 'data.php';
if (isset($_GET['page'])) $page = $_GET['page'];
else $page = 'status';
?>

<html>
<head>
<script src="js/sorttable.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="border">
<table id="menu">
<tr>
<td><a href="index.php?page=status">Status</a></td><td><a href="index.php?page=peers">Peers</a></td><td><a href="index.php?page=nodes">Nodes</a></td>
<td align="right" width="100%"><a href="https://github.com/doged/doged-webnode" target="_blank">DOGED webnode</a> (Version: <?php echo $version; ?>)</td>
</tr>
</table>
</div>
<br>
<div id="border">
<?php

if ($page == 'status') include 'pages/status.php';
if ($page == 'peers') include 'pages/peers.php';
if ($page == 'nodes') include 'pages/nodes.php';

?>
</table>
</div>
<br>
</body>
<footer>
<img src="images/doged-logo.png" id="logo">Donate DOGED to: <a href="http://darkchain.link/address/DPNC2H2pYUCSebQ992GyeRTRuWw3hCTBwD" target="_blank">DPNC2H2pYUCSebQ992GyeRTRuWw3hCTBwD</a>
</footer>