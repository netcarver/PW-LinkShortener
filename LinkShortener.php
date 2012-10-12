<?php

if ($page->full_link)
	$session->redirect($page->full_link, false);
else
	$session->redirect($pages->get($config->http404PageID), false);
