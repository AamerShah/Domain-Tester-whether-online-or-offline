# php-Port-Scanner
Socket connection based port scanner.

## Requirements:
1 > php Server

## How to use:
1 > Host index.php over php server as is.

2 > To save log, create a file named history.txt in the same directory (as that of index.php)

>>> That's it ... :)

## How it works:
1 > User: Inputs a valid hostname format via text field (eg; via web-browser).

2 > Server: Establishes a socket connection to the destination host at the mentioned port.
If the port is not mentioned, 80 is taken by default.

3 > The output determines the site to be online, otherwise (no output refers to as) offline.

## Further Reading:
Accuracy of the program is 100% as of now (the time file index.php was modified / uploaded here.
Most of the code in the index.php file is to sanitize user input for various injections.

## API
The API for the same is hosted at https://bl4ckeupn.000webhostapp.com/API_ps/index.php?a=bing.com (replace bing.com) by the website / hostname you want to test for being online / offline.
The response from the server will either be:
#### 0 > Offline
#### 1 > Online
#### 3 > Error processing request (could be anything)

### -Aamer Shah (aamer.me.pn)
