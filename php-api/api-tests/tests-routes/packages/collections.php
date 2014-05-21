<?php
$api_request_arr['Collections'] = array(
	array(
		'identifier' => 'categories_get_report',
		'description' => 'Get categories of a collection (reports)',
		'url' => 'collection/categories/reports',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'filters[locationsuuid]' => 'dbcb154f-dc2d-4444-843d-4bb0bfe48a7b',
			'selector' => NULL
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'categories_get_documents',
		'description' => 'Get categories of a collection (documents)',
		'url' => 'collection/categories/documents',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'filters[locationsuuid]' => 'dbcb154f-dc2d-4444-843d-4bb0bfe48a7b',
			'selector' => NULL
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'categories_get_indicators',
		'description' => 'Get categories of a collection (indicators)',
		'url' => 'collection/categories/indicators',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'filters[locationsuuid]' => 'dbcb154f-dc2d-4444-843d-4bb0bfe48a7b',
			'selector' => NULL
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'list_get_reports',
		'description' => 'Get items in a category (report list)',
		'url' => 'collection/list/reports',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'filters[topic]' => 'Annual Country Report',
			'filters[locationsuuid]' => 'dbcb154f-dc2d-4444-843d-4bb0bfe48a7b'
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'list_get_documents',
		'description' => 'Get items in a category (document list)',
		'url' => 'collection/list/documents',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'selector' => 'domain',
			'filters[locationsuuid]' => 'dbcb154f-dc2d-4444-843d-4bb0bfe48a7b',
			'filters[sector]' => 'Joint Assessment Reports (JAMs)'
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'list_get_indicators',
		'description' => 'Get items in a category (indicator list)',
		'url' => 'collection/list/indicators',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'filters[category]' => 'General',
			'filters[locationsuuid]' => 'dbcb154f-dc2d-4444-843d-4bb0bfe48a7b'
		),
		'expected-response' => 'JSON',
		'level' => 0
	)
);