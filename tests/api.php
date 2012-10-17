<?php

$full  = 'http://www.howtoforge.com/pfsense-squid-squidguard-traffic-shaping-tutorial';
$short1 = LinkShortener::addNewLink( $full, null );
$short2 = LinkShortener::addNewLink( $full, 1138 );

?>
<!DOCTYPE HTML>
<HTML LANG="en">
  <HEAD>
    <TITLE>Link Shortener API</TITLE>
  </HEAD>

  <BODY>
	<H1>Link Shortener API</H1>
	<P>added <A HREF="<?= $short1 ?>">link</A> to <EM><?= $full ?></EM></P>
	<P>added <A HREF="<?= $short2 ?>">link</A> to <EM><?= $full ?></EM></P>
  </BODY>
</HTML>
