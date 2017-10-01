<?php
require('dbconnector.php');
 $mac = $_POST['macaddr'];
 $intmac = base_convert($mac, 16, 10); // ints are processable more easily, don´t forget to convert back!
 $statement = $pdo->prepare('INSERT INTO `users` (mac_addr,protocol,login_time) VALUES (:mac_addr,:protocol, CURRENT_TIMESTAMP)');
 $statement->execute(array('mac_addr' => $intmac, 'protocol' => 'sth'));

?>
