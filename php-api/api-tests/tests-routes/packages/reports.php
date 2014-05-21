<?php
$api_request_arr['Reports'] = array(
	array(
		'identifier' => 'report_filters_get',
		'description' => 'Get report filters',
		'url' => 'report/filters/43/8e348d7e-5c02-424d-857e-739300935f31',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'report_get',
		'description' => 'Get report info',
		'url' => 'report/43/68b5a495-fa02-4fa9-9402-27ec6ccb0ec9',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'report_get_indexes',
		'description' => 'Get report info (by indexes)',
		'url' => 'report/43',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'locationuuid' => '72013809-49f6-404f-b28d-70ae3e020a5e',
			'timelevel' => 5,
			'reportdate' => '2012-12-31'
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'user_reports_get',
		'description' => 'Get user reports',
		'url' => 'reports/user/410',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'user_reports_get',
		'description' => 'Get user reports',
		'url' => 'reports/user/102/43',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'data_get',
		'description' => 'Get data for a formatted report',
		'url' => 'report/formatted/data',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'templateid' => 3,
			'requests' => '[{"setuuid":"efe0e2f1-38a4-4d67-b8a4-244322027b90","reportuuid":"997064cd-87ce-4fb6-acf2-69cca8ebce3e","opt":5,"rt":"standard","rn":false,"chart":0,"ps":"de_cp.gen_pop_total"},{"setuuid":"453f2845-61f4-4d26-8202-1dd95773400d","reportuuid":"997064cd-87ce-4fb6-acf2-69cca8ebce3e","opt":3,"rt":"standard","rn":false,"chart":0,"ps":"de_cp.gen_pop_total"},{"setuuid":"c5a8a337-5db1-4c04-b7f7-06b16cdcd8bd","reportuuid":"997064cd-87ce-4fb6-acf2-69cca8ebce3e","opt":4,"rt":"top-n","tn1":10,"tn2":5,"rn":true,"chart":0,"ps":"de_cp.gen_pop_total"},{"setuuid":"74635c09-3235-4a95-8111-468f698ed073","reportuuid":"997064cd-87ce-4fb6-acf2-69cca8ebce3e","opt":4,"rt":"top-n","tn1":10,"tn2":5,"rn":true,"chart":0,"ps":"de_cp.gen_pop_total"}]'
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'defn_get',
		'description' => 'Get definition for a formatted report',
		'url' => 'report/formatted/definition/3',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'report_outbreak_get',
		'description' => 'Get outbreak report',
		'url' => 'reports/outbreak/11/828f514e-e6de-409c-8385-e6ab0f16e341',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'report_outbreak_get_records_to_chart',
		'description' => 'Get outbreak report (records to chart set',
		'url' => 'reports/outbreak/11/4958e0d3-54d7-41e5-a8db-58647869c561/10',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'reports_summary_get',
		'description' => 'Get report summaries',
		'url' => 'reports/summary/14',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'criteria[reportdate]' => '2013-01-01',
			'criteria[reportdatelogic]' => 'greaterthanequal'
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'report_weekly_get',
		'description' => 'Get weekly report',
		'url' => 'reports/weeklyupdate/2/2012-09-09/3',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
);