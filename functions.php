<?php

function filter_sites($site)
{
	if (substr($site, 0, 1) === '.') {
		return false;
	}
	return $site != 'sites.homestead';
}

function list_sites()
{
	$sites = scandir('/etc/nginx/sites-enabled');

	$sites = array_filter($sites, "filter_sites");

	return $sites;
}