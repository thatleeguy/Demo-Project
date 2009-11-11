<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>I hate long URLS!</title>

	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link rel="stylesheet" href="<?=site_url_rel('assets/css/core.css')?>" type="text/css" media="screen" />
	<script type="text/javascript" src="<?=site_url_rel('assets/js/scriptaculous/prototype.js')?>"></script>
	<script type="text/javascript" src="<?=site_url_rel('assets/js/scriptaculous/scriptaculous.js')?>"></script>
</head>

<body>

<div id="wrapper">

	<h1>I Hate long URLS!</h1>

	<p class="dark">
		Are you sick of posting URLs in emails only to have it break when sent causing the 
		recipient to have to cut and paste it back together? 

		Simply enter a URL in the text field below, and we will create a mini URL for you that never expires.
	</p>


&nbsp;
<form action="#" method="post" name="wee_form" id="wee_form" onsubmit="new Ajax.Updater('results', '<?=site_url_rel('urls/make')?>', { parameters:Form.serialize('wee_form'), onComplete:function(request) {Effect.BlindDown('results','blind', {duration:0.5})} }); return false;">
	<input type="text" name="url" value="" id="url" size="40" />
	<input type="submit" value="Zmogg!" />
</form>

<div id="results" style="display:none"></div>

<div id="footer" class="tiny light">
	<hr />

	<img src="<?=site_url_rel('assets/gfx/7am_16x_16x.png')?>" style="margin-right:5px; margin-bottom:-5px; border:1px solid #999; padding:1px" alt="7am WDG " />
	&copy; 7pm.ca , a <strong><a href="http://www.7am.ca/" title="Bold, not beautiful  " target="_blank" class="noline">7am WDG</a></strong> product.
</div>

</div>

</body>
</html>
