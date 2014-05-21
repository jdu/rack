<?php
$api_request_arr['Data'] = array(
	array(
		'identifier' => 'query_get',
		'description' => 'Custom data query',
		'url' => 'data/query/locations',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'select[0]' => 'name',
			'select[1]' => 'uuid',
			'where[geolevel]' => 3,
			'order_by' => 'name'
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'report_get',
		'description' => 'Report data',
		'url' => 'data/report/de_ar/4a04233e-8da3-480f-a92c-2bc209d7e821',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'data_get',
		'description' => 'Set data',
		'url' => 'data/set/24cd0ddd-7699-4ac3-b358-fddd7d05c6e9/reportuuid/574c04ac-e53e-4a42-80d3-a16a8a4368a6',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	)
);