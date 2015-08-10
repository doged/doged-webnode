![dogedwebnode](https://raw.githubusercontent.com/doged/doged-webnode/master/doged_php.png)

Web-based DogecoinDark node controller

With this node controller you can control a running dogecoindarkd deamon.
The node controller mainly uses PHP and a little bit of JavaScript.

The sorttable.js is made by http://kryogenix.org/
The jsonRPCClient.php is made by http://jsonrpcphp.org/
 (Kimax)

Example of the DogeCoinDark.conf for the DogecoinDark node:

disablewallet=1
server=1
rpcuser=rpcuser
rpcpassword=rpcpassword
rpcport=20102
rpckeepalive=1
rpcbind=127.0.0.1

Everything related to the settings of the web part can be found in settings.php

This web-based node controller is able to write the added nodes directly into the DogeCoinDark.conf
but only if the web part is running at localhost.

Todo:
API to be used public
php example on how to use the API