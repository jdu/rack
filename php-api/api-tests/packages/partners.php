<?php
$api_request_arr['Partners'] = array(
	array(
		'identifier' => 'partner_get',
		'description' => 'Get partners',
		'url' => 'partners',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'partner_get_params',
		'description' => 'Get partners (with params)',
		'url' => 'partners',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'retrieve[0]' => 'acronym',
			'retrieve[1]' => 'logofilename',
			'filters[acronym][0]' => 'UNAIDS',
			'filters[acronym][1]' => 'NCA',
			'filters[acronym][2]' => 'CUCR',
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'partners_location_get',
		'description' => 'Get partners by location',
		'url' => 'partners/location/b414033e-cceb-4029-babd-1f26a39e700b',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	)
);