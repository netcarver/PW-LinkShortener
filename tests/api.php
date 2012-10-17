<?php

$full  = 'http://www.howtoforge.com/pfsense-squid-squidguard-traffic-shaping-tutorial';
$short1 = LinkShortener::addNewLink( $full, null );
$short2 = LinkShortener::addNewLink( $full, 1138 );

?>
<DOCTYPE HTML>
<HTML>
  <HEAD>
    <TITLE>Link Shortener API</TITLE>
  </HEAD>

  <BODY>
	<H1>Link Shortener API</H1>
	<p>added <a href="<?= $short1 ?>">link</a> to <em><?= $full ?></em></p>
	<p>added <a href="<?= $short2 ?>">link</a> to <em><?= $full ?></em></p>
  </BODY>
</HTML>
