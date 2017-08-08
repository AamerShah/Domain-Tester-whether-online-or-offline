<!--
Socket Based Port Scanner
Written by Aamer Shah
-->
<?php $tyme = microtime();
$tyme = explode(' ', $tyme);
$tyme = $tyme[1] + $tyme[0];
$strt = $tyme;?><title>Port Scanner</title><style>body{padding-top: 5%;}input{text-transform: lowercase;} ::selection {color:red;background:black;} ::-moz-selection {color:red;background:black;}</style><meta name="viewport" content="width=device-width, initial-scale=1.0">
<body bgcolor=efefef link=red vlink=red><center><h3><span style="color:gray">Web based <span style="color:#9c353a">PORT SCANNER</span> cum domain tester (whether online or down)</span></h3>
<form action="index.php" method="post"><input type="text" autofocus name="site" value=""><input type="submit" value="check" onClick="this.value='Checking…';"><b> <a href=http://bl4ck.eu.pn/online/help.htm target="_blank">?</a></b></form><strong><?php
error_reporting(0);
$ip = getIP();
function GetIP() 
{ 
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) 
		$ip = getenv("HTTP_CLIENT_IP"); 
	else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) 
		$ip = getenv("HTTP_X_FORWARDED_FOR"); 
	else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) 
		$ip = getenv("REMOTE_ADDR"); 
	else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) 
		$ip = $_SERVER['REMOTE_ADDR']; 
	else 
		$ip = "unknown"; 
	return($ip); 
}
$today = date("D M j Y g:i:s a T");
$host = $_POST['site'];
if (strlen($host) > 88) {echo "That definitely ain't a ho<span style=\"color:red\">ooooooooooooo</span>stname";exit;}
elseif (strlen($host) < 4) {echo "";exit;}
elseif(strpos( $host, ' ' ) !== false) {echo 'No spaces please, I just hate it';exit;}
elseif(strpos( $host, '"' ) !== false) {echo 'Hostname does not have double-quotes!';exit;}
elseif(strpos( $host, '!' ) !== false) {echo 'Hostname does not have !, or so I think';exit;}
elseif(strpos( $host, '`' ) !== false) {echo 'Since when did hostnames have back-ticks! To get a shell open your command window';exit;}
elseif(strpos( $host, '<' ) !== false) {echo 'What was that ... XSS!';exit;}
elseif(strpos( $host, '>' ) !== false) {echo 'Hostname does not have > No XSS!';exit;}
elseif(strpos( $host, '^' ) !== false) {echo 'Hostname does not have ^';exit;}
elseif(strpos( $host, '?' ) !== false) {echo 'Hostname bro not queries!';exit;}
elseif(strpos( $host, ';' ) !== false) {echo "That's called end of statement not Hostname";exit;}
elseif(strpos( $host, '/' ) !== false) {echo 'Hostname does not have slashes!';exit;}
elseif(strpos( $host, "(" ) !== false) {echo 'Hostname does not have braces!';exit;}
elseif(strpos( $host, ")" ) !== false) {echo 'Hostname does not have braces!';exit;}
elseif(strpos( $host, "{" ) !== false) {echo 'Hostname does not have braces!';exit;}
elseif(strpos( $host, "]" ) !== false) {echo 'Hostname does not have braces!';exit;}
elseif(strpos( $host, "[" ) !== false) {echo 'Hostname does not have braces!';exit;}
elseif(strpos( $host, "{" ) !== false) {echo 'Hostname does not have braces!';exit;}
elseif(strpos( $host, "~" ) !== false) {echo 'Hostname does not have ~ ..';exit;}
elseif(strpos( $host, "," ) !== false) {echo 'Looks like you mistyped....';exit;}
elseif(strpos( $host, "'" ) !== false) {echo "</center></strong><small>Microsoft OLE DB Provider for ODBC Drivers error '80040e14'<br>
[Microsoft][ODBC SQL Server Driver][SQL Server]<br>Unclosed quotation mark before the 
character string ''.
/target/bl4ckeupn.asp, line 113";exit;}
elseif(strpos( $host, "127.0.0.1" ) !== false) {echo "Of course! I'm online";exit;}
elseif(strpos( $host, "|" ) !== false) {echo 'Hostname does not have | aka OR operators!';exit;}
elseif(stripos( $host, 'bl4ck.eu.pn' ) !== false) {
echo "<span style=\"color:blue\">If you can open this page and still think this site's down, it's just you!</span>";
$logfile = fopen('history.txt', 'a+');
    fwrite($logfile, $_POST['site'] . ", Requester:" . $ip . ", Time:" . $today . ", Status Code:" . $socket . "\n\n");
    fclose($logfile);exit;}
elseif ( empty( $host )) {echo "";exit;}
//elseif(strpos( $host, '.' ) == true){
if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
echo "<span style=\"color:grey\">" . $host . "</span> is <span style=\"color:green\">ONLINE</span>";
fclose($socket);
} else { echo "<span style=\"color:grey\">" . $host . "</span> is <span style=\"color:red\">OFFLINE</span>";}
if(!empty($_POST['site'])) {
    $logfile = fopen('history.txt', 'a+');
    $disp = "<br>Requester IP: <span style=\"color:blue\">" . $ip . "</span><br>Current Server Time: <span style=\"color:blue\">" . $today . "</span>";
    fwrite($logfile, $_POST['site'] . ", Requester:" . $ip . ", Time:" . $today . ", Status Code:" . $socket . "\n\n");
    fclose($logfile);
    echo "<hr width=70%><small>Log Saved successfully!" . $disp;
    }//}
else { echo 'Valid hostname required!';exit;}
?><hr width=70%></strong><?php
$tyme = microtime();
$tyme = explode(' ', $tyme);
$tyme = $tyme[1] + $tyme[0];
$fin = $tyme;
$total_time = round(($fin - $strt), 4);
echo 'Result fetched in '.$total_time.' seconds.</small>';
?></center></body>
