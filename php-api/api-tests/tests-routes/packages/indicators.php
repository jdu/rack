<?php
$api_request_arr['Indicators'] = array(
	array(
		// SELECT * FROM siv_data.locations WHERE cast(alternate_ids as text) = '{"UNHCR":"1000000000000000"}';
		'identifier' => 'indicator_get_set',
		'description' => 'Get indicator set',
		'url' => 'indicators/set/2286393c-3851-11e3-828f-9a8a549c963e',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'locationuuid' => 'b5ac2325-c8e9-45d5-bd74-58533c8a62bb',
			'timelevel' => 3,
			'daterange[min]' => '2012-01-01',
			'daterange[max]' => '2013-03-31'
		),
		'expected-response' => 'HTML',
		'level' => 0
	),
	array(
		'identifier' => 'indicator_get_report',
		'description' => 'Get indicator report',
		'url' => 'indicators/report/32',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'locationuuid' => 'b5ac2325-c8e9-45d5-bd74-58533c8a62bb',
			'timelevel' => 3,
			'daterange[min]' => '2012-01-01',
			'daterange[max]' => '2013-03-31'
		),
		'expected-response' => 'HTML',
		'level' => 0
	),
	array(
		'identifier' => 'indicator_details_get',
		'description' => 'Get indicator details (single)',
		'url' => 'indicator/details/273b2471-66b1-4d6a-b307-0fde8dbd30d8',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'indicator_details_post',
		'description' => 'Get indicator details (multiple)',
		'url' => 'indicator/details',
		'verb' => 'POST',
		'content-type' => 'application/json',
		'params' => '["4a5e70ed-6102-452f-ac5d-aad03443d7a1","75c62dda-19c2-4a0e-8844-b748c93ea0ac","273b2471-66b1-4d6a-b307-0fde8dbd30d8"]',
		'expected-response' => 'JSON',
		'level' => 0
	)
);