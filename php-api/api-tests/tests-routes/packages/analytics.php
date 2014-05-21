<?php
$api_request_arr['Analytics'] = array(
	array(
		'identifier' => 'all_analytics_get',
		'description' => 'Get all analytics',
		'url' => 'analytics',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'analytic_get',
		'description' => 'Get analytic data',
		'url' => 'analytics/a8af5eb6-978c-496e-aced-08e700159d14',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'format' => 'pivot'
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'analytic_pivots_get',
		'description' => 'Get analytic pivots',
		'url' => 'analytics/pivots/a8af5eb6-978c-496e-aced-08e700159d14',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	)
);