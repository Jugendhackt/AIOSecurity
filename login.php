<?php
$ip = $_SERVER['REMOTE_ADDR'];
$arp = system("arp -a $ip"); // linux only?
preg_match('at ([a-fA-F0-9]*)', $arp, $arpout);
echo 'Mac: ' . $arpout;
