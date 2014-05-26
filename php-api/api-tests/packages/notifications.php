<?php
$api_request_arr['Notifications'] = array(
	array(
		'identifier' => 'notifications_email_get',
		'description' => 'Get a user&#39;s email via uuid',
		'url' => 'notifications/email/5c02cfd4-2332-4014-9e65-3fd0e2a928ab',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'HTML',
		'level' => 0
	),
	array(
		'identifier' => 'notifications_user_get_default',
		'description' => 'Get user&#39;s notifications (default)',
		'url' => 'notifications/user/102',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'notifications_user_get_default_min',
		'description' => 'Get user&#39;s notifications (with minimum set)',
		'url' => 'notifications/user/102',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'min' => 25
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'notifications_user_get_default_offset',
		'description' => 'Get user&#39;s notifications (with offset set)',
		'url' => 'notifications/user/102',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'offset' => 8
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'notifications_user_get_default_filter_type',
		'description' => 'Get user&#39;s notifications (with filter set to amount)',
		'url' => 'notifications/user/102',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'filtertype' => 'amount'
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'notifications_user_put',
		'description' => 'Mark a user&#39;s notification',
		'url' => 'notifications/user/102/mark/208371',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'mark' => 'read'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'notifications_batch_post',
		'description' => 'Add new batch notification',
		'url' => 'notifications/batch',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'reportcontext' => 'wash',
			'reviewlevel' => 0,
			'subject' => 'Lorem',
			'body' => 'Lorem Ispum',
			'type' => 'app'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'notifications_report_context_get',
		'description' => 'Get report contexts',
		'url' => 'notifications/batch/report_contexts',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'notifications_review_level_names_get_default',
		'description' => 'Get report review levels (default)',
		'url' => 'notifications/batch/review_level_names',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'notifications_review_level_names_get_wash',
		'description' => 'Get report review levels (wash)',
		'url' => 'notifications/batch/review_level_names/wash',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'notifications_digest_get_1',
		'description' => 'Digest Notifications',
		'url' => 'notifications/digest/batch/weekly',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'activity[]' => 'publish',
			'template' => 'summary_notification',
			'target' => '2013-W01'
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'notifications_digest_get_2',
		'description' => 'Digest Notifications',
		'url' => 'notifications/digest/batch/weekly',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'activity[0]' => 'review',
			'activity[1]' => 'comment',
			'activity[2]' => 'outbreak',
			'template' => 'digest_notification',
			'target' => '2013-W11'
		),
		'expected-response' => 'JSON',
		'level' => 0
	)
);