<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Code Igniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		Rick Ellis
 * @copyright	Copyright (c) 2006, pMachine, Inc.
 * @license		http://www.codeignitor.com/user_guide/license.html
 * @link		http://www.codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

function site_url_rel($uri='')
{
	$url = parse_url(site_url($uri));
	unset($url['scheme']); unset($url['host']);
	return implode('?', $url);
}


function anchor_rel($uri = '', $title = '', $attributes = '')
{
	if ( !is_array($uri))
	{
		$site_url = ( ! preg_match('!^\w+://!i', $uri)) ? site_url_rel($uri) : $uri;
	}
	else
	{
		$site_url = site_url_rel($uri);
	}
	
	if ($title == '')
	{
		$title = $site_url;
	}

	if ($attributes == '')
	{
		$attributes = ' title="'.$title.'"';
	}
	else
	{
		$attributes = _parse_attributes($attributes);
	}

	return '<a href="'.$site_url.'"'.$attributes.'>'.$title.'</a>';
}

function debug($data, $die=true) 
{
	echo '<pre>';
	print_r($data);
	echo '</pre><hr />';
	if ($die) die();
}
?>