![dogedwebnode](https://raw.githubusercontent.com/doged/doged-webnode/master/doged_php.png)

Web-based DogecoinDark node controller

With this node controller you can control a running dogecoindarkd daemon.

The node controller mainly uses PHP and a little bit of JavaScript.

The sorttable.js is made by http://kryogenix.org/

The jsonRPCClient.php is made by http://jsonrpcphp.org/

The functions.php is made by https://github.com/Kimax

Example of the DogeCoinDark.conf for the DogecoinDark node:
-----
disablewallet=1

server=1

rpcuser=rpcuser

rpcpassword=rpcpassword

rpcport=20102

rpckeepalive=1

rpcbind=127.0.0.1

settings.php
-----------

$rpcaddress = 'localhost';  //localhost where daemon is running

$rpcport = '20102';  //default dogecoindark rpcport

$rpcuser = 'rpcusername'; //DogeCoinDark.conf rpcusername

$rpcpassword = 'rpcpassword'; //DogeCoinDark.conf rpcpassword

$address = 'http://' . $rpcuser . ':' . $rpcpassword . '@' . $rpcaddress . ':' . $rpcport . '/';

$configfile = 'c:\users\yourusername\appdata\roaming\DogeCoinDark\DogeCoinDark.conf';  //path to DogeCoinDark.conf

$writetoconf = true;  //allow doged webnode to add peers to your .conf file?

$version = "0.1.2-beta";

$login = false;  //force login 

$username = 'Admin';  //your admin username

$password = 'Password';  //your admin password

$timeout = 1;
?>


This web-based node controller is able to write the added nodes directly into the DogeCoinDark.conf
but only if the web part is running at localhost.

Todo:

API to be used public

php example on how to use the API
