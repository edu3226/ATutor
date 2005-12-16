<?php
/************************************************************************/
/* ATutor																*/
/************************************************************************/
/* Copyright (c) 2002-2006 by Greg Gay, Joel Kronenberg 		*/
/* Adaptive Technology Resource Centre / University of Toronto			*/
/* http://atutor.ca														*/
/*																		*/
/* This program is free software. You can redistribute it and/or		*/
/* modify it under the terms of the GNU General Public License			*/
/* as published by the Free Software Foundation.						*/
/************************************************************************/
// $Id$

require('../common/body_header.inc.php'); ?>

	<h2>2.2 System Preferences</h2>
		<dl>
			<dt>Site Name</dt>
			<dd>The name of the course server's website. This name will appear at the top of all the public pages, in the web browser's title bar, and as the <em>From</em> name when sending non-personal emails.</dd>

			<dt>Home <acronym title="Uniform Resource Locator, a site's address">URL</acronym></dt>
			<dd>This will be the web address for the 'Home' link in the public area. Leave empty to remove this link.</dd>

			<dt>Default Language</dt>
			<dd>The default language to use if the client's browser settings cannot be detected. Must be one of the languages already installed. See the <a href="../admin/2.3.languages.php">Languages</a> section on installing and managing existing languages.</dd>

			<dt>Contact Email</dt>
			<dd>The reply address used for emails sent for instructor requests and other system emails.</dd>

			<dt>Maximum File Size</dt>
			<dd>Maximum allowable file size in Bytes that can be uploaded to the course's File Manager. This does not override the value set for <kbd>upload_max_filesize</kbd> in <kbd>php.ini</kbd>.</dd>

			<dt>Maximum Course Size</dt>
			<dd>Total maximum allowable course size in Bytes. This is the total amount of space a course's File Manager can use.</dd>

			<dt>Maximum Course Float</dt>
			<dd>How much a course can be over its <em>Maximum Course Size</em> limit while still allowing a file to upload or import. Makes the course limit actually be <em>Max Course Size</em> + <em>Max Course Float</em>. When <em>Max Course Float</em> is reached, no more uploads will be allowed for that course until files are deleted and the course's space usage falls under the Maximum Course Size.</dd>

			<dt>Authenticate Against A Master Student List</dt>
			<dd>Whether or not to enable Master Student List authentication. If enabled, only new accounts that validate against the master list will be created. See the <a href="../admin/3.2.master_student_list.php">Master Student List</a> section for additional details on using this feature.</dd>

			<dt>Require Email Confirmation Upon Registration</dt>
			<dd>If enabled, email confirmation is required in order to login to the system directly following registration. As new accounts are created, an email is sent with instructions on how to confirm their account. The user will not be allowed to login until after they confirm their account.</dd>

			<dt>Allow Instructor Requests</dt>
			<dd>If enabled, students will be allowed to request that their account be upgraded to an instructor account. Instructor account requests must be approved by administrators using the <a href="../admin/3.1.instructor_requests.php">Instructor Requests</a> section.</dd>

			<dt>Instructor Request Email Notification</dt>
			<dd>If enabled, and if <em>Allow Instructor Requests</em> is enabled, then an email notification message will be sent to the <em>Contact Email</em> each time a new instructor account request is made. This does not affect whether or not instructor requests can be made, only whether or not a notification message is sent out each time.</dd>

			<dt>Auto Approve Instructor Requests</dt>
			<dd>If <em>Allow Instructor Requests</em> is enabled, then existing students requesting instructor accounts will be upgraded automatically, bypassing the approval process. Additionally, any newly created accounts will be created as instructors rather than as students.</dd>

			<dt>Theme Specific Categories</dt>
			<dd>Theme specific categories allows for the association between themes and categories. Courses belonging to a specific category will always be presented using that category's associated theme. This option disables the personalised theme preference. Use the <a href="../admin/4.3.categories.php">Categories</a> section to create and manage course categories, and the <a href="../admin/2.4.themes.php">Themes</a> section to install and manage themes.</dd>

			<dt>User Contributed Handbook Notes</dt>
			<dd>If enabled will allow anyone viewing the Handbook to contribute notes. User contributed notes must then be approved by an administrator by logging in on the main Handbook page. This option is available in ATutor 1.5.1+.</dd>

			<dt>Illegal File Extensions</dt>
			<dd>A list of all the file types, by extension, that are not allowed to be stored on the server. Any file that is being imported or uploaded with an extension in the specified list will be ignored and not saved. The list must contain only the file extensions seperated by commas without the leading dot.</dd>

			<dt>Cache Directory</dt>
			<dd>Where cached data is stored. On a Windows machine the path should look like <kbd>C:\Windows\temp\</kbd>, while on Unix it should look like <kbd>/tmp/cache/</kbd>. On newer Linux/Unix based system shared memory device can also be used <kbd>/dev/shm/</kbd> if it is available.  Leave empty to disable caching.</dd>

			<dt>Course Backups</dt>
			<dd>The maximum number of backups that can be stored per course. The stored backups do not count towards the course's <em>Max Course Size</em>.</dd>

			<dt>Check for ATutor Updates Automatically</dt>
			<dd>If enabled ATutor will check the atutor.ca web site for updates whenever the administrator logs in. This option is available since ATutor 1.5.2.</dd>
		</dl>

<?php require('../common/body_footer.inc.php'); ?>