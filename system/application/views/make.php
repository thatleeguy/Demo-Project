<h3>Short URL created!</h3>

<p>	
	Here's your Dinky, <?=strlen(site_url($wee))?> characters, URL:
	<code><?=site_url($wee)?></code>
	<span class="small">[ <?=anchor($wee, 'open in a new window', 'target="_blank"')?> ]</span>
	<span class="light tiny">&nbsp; &ndash; to copy, simply right-click this link and select the "copy link location" option.</span>
</p>
<p>
	It was transformed from this, <?=strlen($url)?> characters, URL:
	<code><nobr><?=linebreak($url, 88)?></nobr></code>
</p>
