<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Cliff Fenlason</h1>

	<div id="body">
		<p>It seems like PHP Frameworks will offer great tools for creating quality websites more easily and quickly, certainly more easily and quickly than coding everything from scratch. The learning curve appears steep, however.</p>

		<p>How is that, "steep?" Well, for a novice it seems like getting hit with a new vocabulary of terms, some familiar terms with new meanings and a syntax that doesn't build on recognizable patterns learned while studying HTML, CSS, JS, JQuery and Joomla so far. For example, I've only heretofore learned "class" as an attribute within an element. Here it's used quite differently. Other differences are assumed in the documentation to be easily understood, but not so with some of the newbies to this system. E.g., why the "public" keyword? What, exactly, are models, views and controllers? How to get started using CI other than just substituting text in a given page of coding, like I'm doing here? How to understand what's really going on? The explanations in the documentation often use other unfamiliar words or concepts so create more questions rather than building confidence. So it's a new language, with its own culture, vocabulary, syntax and patterns of speech. But I can accept that and, hopefully, I'll be able to acquire this one too as I proceed through the documentation and the instructions.</p>

		<p></p>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
