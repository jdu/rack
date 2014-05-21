<?php
$api_request_arr['Comments'] = array(
	array(
		'identifier' => 'comment_get',
		'description' => 'Get a comment',
		'url' => 'comments/8263096f-932e-4c27-b442-07470ef3409e',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'commenttype' => 'comment'
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'comment_post',
		'description' => 'Create a comment',
		'url' => 'comments/292a3fa1-fd45-4f78-afd9-5361a4c9ac8a/report_7',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'comment' => 'Lorem'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'comment_delete',
		'description' => 'Delete a comment',
		'url' => 'comments/b52e1547-158e-4ce2-86cd-ad0b85a99b83',
		'verb' => 'DELETE',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	)
);