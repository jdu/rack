<?php
$api_request_arr['Dataentry'] = array(
	array(
		'identifier' => 'de_report_post',
		'description' => 'Create a new report',
		'url' => 'dataentry/16',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'locationuuid' => '44342fd4-d8c3-42bf-89da-7533c25b0a9c',
			'timelevel' => 3,
			'reportdate' => '2013-05-05'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'de_report_delete',
		'description' => 'Delete report',
		'url' => 'dataentry/trash/de_cp/0fdef209-1de6-4dbe-89fb-9926e6ffc384',
		'verb' => 'DELETE',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'report_config_put',
		'description' => 'Edit a report&#39;s configuration',
		'url' => 'dataentry/config/43/f89d744b-804b-4346-8a11-88fc36b72e74',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'clusterized' => 'yes',
			'idpop' => 'no',
			'refintret' => 'yes',
			'emop' => 'no',
			'imci_adopt' => 'yes',
			'gen_config_ph' => 'yes',
			'gen_config_mal' => 'yes',
			'gen_config_nutfs' => 'yes',
			'gen_config_rh' => 'yes',
			'gen_config_hiv' => 'yes',
			'gen_config_watsanhyg' => 'yes'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'de_report_get_default',
		'description' => 'Get a report (default)',
		'url' => 'dataentry/7/30d07b33-2c73-4354-8ed8-e8a30afe5d4b',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'de_report_get_outbreak',
		'description' => 'Get a report (outbreak)',
		'url' => 'dataentry/32/ec81822b-e035-4c8e-8d87-f8afbac95445',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'de_report_get_weekly_update',
		'description' => 'Get a report (weekly_update)',
		'url' => 'dataentry/14/2014-01-19',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'de_report_config_get',
		'description' => 'Get a report&#39;s configuration',
		'url' => 'dataentry/config/43/f89d744b-804b-4346-8a11-88fc36b72e74',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'de_report_type_locations_for_user_get_de_form_id',
		'description' => 'Get a user&#39;s location permissions for a de form',
		'url' => 'dataentry/locations/user/410/32',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'de_report_type_locations_for_user_get_report_context',
		'description' => 'Get a user&#39;s location permissions for a report context',
		'url' => 'dataentry/locations/user/410/his_default',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'de_todo_get',
		'description' => 'Get a user&#39;s todo list',
		'url' => 'dataentry/todo/410',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'de_report_date_info_get',
		'description' => 'Get report date info',
		'url' => 'dataentry/reportdate/2d7cf6df-037c-4d2d-aba3-c89c004aee5a',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'de_user_de_forms_get',
		'description' => 'Get de forms a user has permissions for',
		'url' => 'dataentry/reports/user/410',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		// SELECT a.reportuuid, b.userid, c.username FROM siv_data.meta_de_report_init as a INNER JOIN siv_users.users_permissions as b on a.locationsuuid = b.locationsuuid INNER JOIN siv_users.users as c on b.userid = c.userid WHERE a.deformsid = 46 AND c.status = 1 ORDER BY b.userid;
		'identifier' => 'de_report_init_put',
		'description' => 'Initialize a report',
		'url' => 'dataentry/init/46/37dfd343-2cb6-4441-bcde-fbde4cf0a371', 
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'de_report_restore_post',
		'description' => 'Restore report',
		'url' => 'dataentry/restore/baa61250-0f79-45fe-8019-d11e2f3c84be',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'de_report_put',
		'description' => 'Update report',
		'url' => 'dataentry/38/5f080ec2-ab1b-4d21-b8df-0e569ab1f3e1',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'column' => 'comment_total_lat_con',
			'value' => 'lorem'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'form_get',
		'description' => 'Get dataentry form information',
		'url' => 'dataentry/form/36',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'de_user_de_form_category_get_no_category',
		'description' => 'Get de forms a user has permissions for with category hierarchy (No category)',
		'url' => 'dataentry/form/user/410/category',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'de_user_de_form_category_get',
		'description' => 'Get de forms a user has permissions for with category hierarchy',
		'url' => 'dataentry/form/user/410/category/primary',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),

	array(
		'identifier' => 'de_dataentry_queue_post',
		'description' => 'Add record to dataentry queue',
		'url' => 'dataentry/queue',
		'verb' => 'POST',
		'content-type' => 'application/json',
		'params' => '{"de_form_id":32,"report_uuid":"7151db2b-a684-4716-907e-36e6d8cb976b","field":"end_title","value":"Public Health Associate"}',
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'de_dataentry_queue_get',
		'description' => 'Process dataentry queue',
		'url' => 'dataentry/queue',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'de_outbreaks_post',
		'description' => 'Create outbreak report',
		'url' => 'dataentry/outbreak/32',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'locationuuid' => 'b154e425-8b10-4628-8c76-0449060cb947',
			'reportdate' => '2013-07-21',
			'timelevel' => 1,
			'type' => 'H1N2'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'de_outbreak_record_get',
		'description' => 'Get outbreak report records',
		'url' => 'dataentry/outbreak/32/records/1dde79d1-6071-4603-8f7a-93e5ebef97bb',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'de_outbreak_types_get',
		'description' => 'Get outbreak types',
		'url' => 'dataentry/outbreak/32/types',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'de_outbreak_populate_records_put',
		'description' => 'Populate outbreak report records',
		'url' => 'dataentry/outbreak/32/records/populate/7aea5ebd-adbe-42c4-9f34-4098596c90ae',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'de_outbreak_record_put',
		'description' => 'Update outbreak report record',
		'url' => 'dataentry/outbreak/32/records/4cc0f30b-0df6-407b-b673-d01c0260a996',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'id' => 9736,
			'column' => 'cases',
			'value' => 15
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'de_outbreak_state_put_end',
		'description' => 'Update outbreak state (End)',
		'url' => 'dataentry/outbreak/32/state/4cc0f30b-0df6-407b-b673-d01c0260a996',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'action' => 'end',
			'enddate' => '2012-11-19'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'de_outbreak_state_put_reopen',
		'description' => 'Update outbreak state (Reopen)',
		'url' => 'dataentry/outbreak/32/state/4cc0f30b-0df6-407b-b673-d01c0260a996',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'action' => 'reopen'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'de_weekly_report_get',
		'description' => 'Check if regional or hq report is complete for a user',
		'url' => 'dataentry/weeklyupdate/14/report/923f57b5-5fc8-4c60-9e79-1c248a2c7e2b',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'de_weekly_report_post',
		'description' => 'Create a regional Report',
		'url' => 'dataentry/weeklyupdate/14/report/2013-07-28',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'type' => 'regional',
			'locationuuid' => '6ffd3ab5-2066-4f23-94f6-ed10a9c1cfc2',
			'reportuuid' => 0,
			'recordlevel' => 2
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'de_weekly_report_post',
		'description' => 'Create a HQ Report',
		'url' => 'dataentry/weeklyupdate/14/report/2013-07-28',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'type' => 'hq'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'de_weekly_record_post',
		'description' => 'Create weekly report record',
		'url' => 'dataentry/weeklyupdate/14/record/923f57b5-5fc8-4c60-9e79-1c248a2c7e2b',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'de_weekly_record_delete',
		'description' => 'Delete weekly report record',
		'url' => 'dataentry/weeklyupdate/14/record/8',
		'verb' => 'DELETE',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'de_weekly_formatted_get',
		'description' => 'Get a weekly formatted report',
		'url' => 'dataentry/weeklyupdate/14/formatted/923f57b5-5fc8-4c60-9e79-1c248a2c7e2b',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'de_weekly_record_put',
		'description' => 'Update weekly report record',
		'url' => 'dataentry/weeklyupdate/14/record/3135',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'column' => 'topic',
			'value' => 'Training'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'templates_get_general',
		'description' => 'Get data entry templates (general)',
		'url' => 'dataentry/template',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'templates_get_specific',
		'description' => 'Get data entry templates (specific)',
		'url' => 'dataentry/template/2',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	)
);