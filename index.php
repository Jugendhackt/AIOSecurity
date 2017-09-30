<?php
$ip = $_SERVER['REMOTE_ADDR'];
$arp = exec("arp -a $ip"); // linux only?

$row = explode(' ', $arp);
$macAddr = $row[3]

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>AIOSecurity: Start</title>
  <link rel="stylesheet" type="text/css" href="normalize.css" />
  <link rel="stylesheet" type="text/css" href="skeleton.css" />
  <link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>
  <header>
    <h1>
        <a href="index.html" class="unsta">AIOSecurity</a>
    </h1>
  </header>
  <p>
    Welcome <!-- (<?php  echo 'Mac: ' . $macAddr; ?>) --> to AIOSecurity. Please select your mode of access...

  </p>
  <form required>
    <div class="row">
      <input type="radio" title="Tor" id="itor" name="prot" value="tor" class="one column" />
      <label for="itor" class="five columns">Reroute all traffic over Tor</label>
    </div>
    <div class="row">
      <input type="radio" title="Block all non https traffic" class="one column" id="iblock" name="prot" value="baut" />
      <label for="iblock" class="five columns">Block unencrypted connections</label>
    </div>
     <div class="row">
      <!-- id ad* could be blocked by Adblockers -->
      <input type="radio" title="Block ads" class="one column" id="blad" name="prot" value="adblock" />
      <label for="blad" class="five columns">Block advertisements</label>
    </div>
    <br />

    <div class="row">
      <input type="submit" />
    </div>
  </form>
</body>

</html>
