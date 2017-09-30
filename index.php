<?php
$ip = $_SERVER['REMOTE_ADDR'];
$arp = system("arp -a $ip"); // linux only?
preg_match('at ([a-fA-F0-9]*)', $arp, $arpout);
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
        <a href="index.html" class="unsta">AioSecurity</a>
    </h1>
  </header>
  <p>
    Welcome (<?php  echo 'Mac: ' . $arpout; ?>) to AioSecurity. Please chose an option...

  </p>
  <form required>
    <div class="row">
      <input type="radio" title="Tor" id="itor" name="prot" value="tor" class="one column" />
      <label for="itor" class="one column">Tor</label>
    </div>
    <div class="row">
      <input type="radio" title="Tor" class="one column" id="iblock" name="prot" value="baut" />
      <label for="iblock" class="two columns">Block all unencrypted traffic</label>
    </div>
    <div class="row">
      <input type="submit" />
    </div>
  </form>
</body>

</html>
