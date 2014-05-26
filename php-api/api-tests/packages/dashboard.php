<?php
$api_request_arr['Dashboard'] = array(
	array(
		'identifier' => 'keyfacts_get',
		'description' => 'Return keyfacts about location',
		'url' => 'dashboard/keyfacts/e97cdba6-6c30-4329-b78c-4fe763ef7ce6',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'metrics_get',
		'description' => 'Get dashboard Metrics',
		'url' => 'dashboard/metrics',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	)
);