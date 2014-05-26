<?php
$api_request_arr['Review'] = array(
	array(
		'identifier' => 'review_report_post',
		'description' => 'Create review status for a report',
		'url' => 'review/report/43/b03b17a5-cfba-429a-a1da-dabe65fd0b34',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'replace' => 'true'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'check_review_get',
		'description' => 'Review system check',
		'url' => 'review_repair/check_review',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'HTML',
		'level' => 0
	),
	array(
		'identifier' => 'review_report_put_approve',
		'description' => 'Update the review state of a report (approve)',
		'url' => 'review/report/7/a0781a9e-d749-4bc3-92ef-20813db67243/1/2',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'review_report_put_retract',
		'description' => 'Update the review state of a report (retract)',
		'url' => 'review/report/7/4770c47f-7656-418f-b742-44c9d9a9e3f9/1/0',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'comment' => 'Lorem'
		),
		'expected-response' => 'JSON',
		'level' => 1
	)
);