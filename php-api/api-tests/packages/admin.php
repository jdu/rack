<?php
$api_request_arr['Admin'] = array(
	array(
		'identifier' => 'api_data_check_get',
		'description' => 'API check on data',
		'url' => 'admin/api/check',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'HTML',
		'level' => 0
	),
	array(
		'identifier' => 'api_data_check_put',
		'description' => 'API data fix for a check',
		'url' => 'admin/api/check/3',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'database_uuid_get',
		'description' => 'Generate UUID',
		'url' => 'admin/database/uuid',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'database_uuid_put',
		'description' => 'Populate a column with uuid values',
		'url' => 'admin/database/uuid/de_md/reportuuid',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'report_management_get',
		'description' => 'Manage reports (Delete and Restore)',
		'url' => 'admin/reports',
		'url_raw' => 'admin/reports',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'HTML',
		'level' => 0
	),
	array(
		'identifier' => 'report_create_post',
		'description' => 'Batch create reports',
		'url' => 'admin/reports/create/43',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'reportdate' => (date('Y')+5) . '-12-31',
			'timelevel' => 5
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'report_reinit_put',
		'description' => 'Batch reinitialize reports',
		'url' => 'admin/reports/reinit/43',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'criteria[reportdate]' => (date('Y')+5) . '-12-31',
			'criteria[reportdatelogic]' => 'equal'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'report_publish_put',
		'description' => 'Batch publish reports',
		'url' => 'admin/reports/publish/43',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'criteria[reportdate]' => (date('Y')+5) . '-12-31',
			'criteria[reportdatelogic]' => 'equal'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'report_delete_delete',
		'description' => 'Batch delete reports',
		'url' => 'admin/reports/delete/43',
		'verb' => 'DELETE',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'criteria[reportdate]' => (date('Y')+5) . '-12-31',
			'criteria[reportdatelogic]' => 'equal'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'batch_generate_de_templates',
		'description' => 'Batch generate de templates',
		'url' => 'admin/detemplates/generate/11',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'criteria[documentuuid]' => '["b67b4cc1-59f4-11e3-828f-9a8a549c963e","b67b602b-59f4-11e3-828f-9a8a549c963e","62d39885-ae3b-48d1-a417-ad1ec20485b5","b67b4950-59f4-11e3-828f-9a8a549c963e"]'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'check_service_all_get',
		'description' => 'Check status of all services',
		'url' => 'admin/services',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'check_service_get',
		'description' => 'Check status of individual service',
		'url' => 'admin/services/mysql_app_db',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'clone_user_permissions_put',
		'description' => 'Clone user permissions',
		'url' => 'admin/user/permissions/clone',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'reportcontext' => 'wash',
			'reviewlevel' => 1,
			'newreportcontext' => 'wash_test',
			'newreviewlevel' => 1
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'documents_create_post',
		'description' => 'Create documents from data source',
		'url' => 'admin/documents/create/his',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'criteria[reportdate]' => '2013-01-31',
			'criteria[reportdatelogic]' => 'equal'
		),
		'expected-response' => 'JSON',
		'level' => 1
	)
);