<?php 

// GENERAL
	
$path             = ''; // Frontend path: If in root, leave blank. If in sub-folder, use "/sub"
$admin            = '000000'; // Admin folder name
$password         = '12345'; // Admin login
$autobackup       = true; // Turn on/off auto-backup feature
date_default_timezone_set('America/New_York'); // More: https://php.net/manual/en/timezones.php
$language         = 'english';

// EDITOR

$wysiwyg          = true; // Toggle on/off WYSIWYG editor in blocks/blog
$allow            = array('txt','jpeg','gif','jpg','svg','png','pdf','zip'); // File types allowed to be uploaded

// GALLERY

$thumbnail_height = '140';
$thumbnail_width  = '220';

// FORM

$mail_inputs      = array('Name'=>'text','Email'=>'email','Phone'=>'text');
$lang_form_name   = 'Name'; //form field required name
$lang_form_email  = 'Email'; // form field required email address
$mail_textarea    = array('Comment'=>'7'); // 7 = Number of rows
$email_contact    = array('you@mail.com'); // Example: 'one@mail.com','two@mail.com'


// BLOG

$result_per_page  = 5; // Blog posts per page
$disqus_comments  = false; // Turn on/off blog comments (Disqus)
$disqus_shortname = "sample-name"; // Your disqus account name
$date_format      = "M j, Y"; // More: https://php.net/manual/en/function.date.php

// RSS

$blog_title       = 'My Blog';
$blog_description = 'This is my blog.';
$blog_url         = "http://example.com/blog";
$rss_lang         = 'en-us';
$url_prefix   	  = 'blog'; // blog-1-post-title, if changed also edit htaccess
