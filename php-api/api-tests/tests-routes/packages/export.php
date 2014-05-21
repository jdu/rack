<?php
$api_request_arr['Export'] = array(
	array(
		'identifier' => 'export_de_template_post',
		'description' => 'Export de template to PDF or html (Client side generation)',
		'url' => 'export/detemplate/3',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'template' => 3,
			'reportuuid' => 'cffb4a17-ab02-45fb-b968-0081e854b46a',
			'content' => '<p>Lorem</p>',
			'type' => 'pdf',
			'embedcss' => 'formattedreports',
			'absurl' => 'http://localhost/siv-v3',
			'forcepdf' => 1
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'export_de_template_get',
		'description' => 'Export de template to PDF or html (Server side generation)',
		'url' => 'export/detemplate/3',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'reportuuid' => 'cffb4a17-ab02-45fb-b968-0081e854b46a',
		),
		'expected-response' => 'JSON',
		'level' => 1
	)
);