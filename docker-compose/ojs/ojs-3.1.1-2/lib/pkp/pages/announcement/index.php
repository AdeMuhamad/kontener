<?php

/**
 * @defgroup pages_announcement Announcement Pages
 */

/**
 * @file lib/pkp/pages/announcement/index.php
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_announcement
 * @brief Handle requests for public announcement functions.
 *
 */

switch ($op) {
	case 'index':
	case 'view':
		define('HANDLER_CLASS', 'AnnouncementHandler');
		import('lib.pkp.pages.announcement.AnnouncementHandler');
		break;
}

?>
