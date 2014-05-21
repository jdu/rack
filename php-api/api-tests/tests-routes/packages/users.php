<?php
$api_request_arr['Users'] = array(
	array(
		'identifier' => 'user_check_get_email',
		'description' => 'Check if email is taken',
		'url' => 'user/check',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'email' => 'osmond@unhcr.org'
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'user_check_get_username',
		'description' => 'Check if username is taken',
		'url' => 'user/check',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'username' => 'osmond'
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'user_post',
		'description' => 'Create new user',
		'url' => 'user',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'username' => 'test_user',
			'email' => 'test_user@test.com',
			'password' => md5('dev')
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'user_profile_put',
		'description' => 'Create/update users&#39;s profile',
		'url' => 'user/profile',
		'verb' => 'PUT',
		'content-type' => 'application/json',
		'params' => '{"foo":"bar"}',
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'user_profile_delete',
		'description' => 'Delete a user&#39;s profile',
		'url' => 'user/profile',
		'verb' => 'DELETE',
		'content-type' => 'application/json',
		'params' => '["foo"]',
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'user_delete',
		'description' => 'Delete user',
		'url' => 'user/810',
		'verb' => 'DELETE',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'user_profile_get',
		'description' => 'Get a user&#39;s profile',
		'url' => 'user/profile',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'user_profile_distinct_get',
		'description' => 'Get distinct user profile values for a user profile name',
		'url' => 'user/profile/distinct/organizationType',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'user_list_get',
		'description' => 'Get list of users',
		'url' => 'user/list',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'user_list_get',
		'description' => 'Get list of users',
		'url' => 'user/102/list/his_default',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'user_get',
		'description' => 'Get logged in user',
		'url' => 'user',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'user_info_get',
		'description' => 'Get user information',
		'url' => 'user/102',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'user_insecure_post',
		'description' => 'Log user in (insecure)',
		'url' => 'user/insecure',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'user' => 'sean',
			'password' => 'dev'
		),
		'expected_response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'user_reset_put',
		'description' => 'Reset user password/verification',
		'url' => 'user/reset',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'user' => 'osmond@unhcr.org',
			'reset' => 'verification'

		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'user_info_put',
		'description' => 'Update user information',
		'url' => 'user/102',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'logincount' => 0
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'user_verify_get',
		'description' => 'Verify user&#39;s account',
		'url' => 'user/102/verify',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'key' => '37431029c6b5decfb41372fd6ad1b282'
		),
		'expected-response' => 'HTML',
		'level' => 1
	),
	array(
		'identifier' => 'user_groups_put',
		'description' => 'Add user to group',
		'url' => 'user/102/group/17',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'group_post',
		'description' => 'Create new group',
		'url' => 'user/group',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'name' => 'new_group',
			'displayname' => 'New Group',
			'description' => 'n/a'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'group_delete',
		'description' => 'Delete group',
		'url' => 'user/group/18',
		'verb' => 'DELETE',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'group_get',
		'description' => 'Get group information',
		'url' => 'user/group/1',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'user_groups_get',
		'description' => 'Get groups user belongs to',
		'url' => 'user/102/group',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'user_groups_delete',
		'description' => 'Remove user from group',
		'url' => 'user/102/group/10',
		'verb' => 'DELETE',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'group_put',
		'description' => 'Update group',
		'url' => 'user/group/10',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'description' => 'n/a'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'user_permissions_post',
		'description' => 'Create user permissions',
		'url' => 'user/permissions/410',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'locationsuuid' => '40e5ec58-aac8-4fc4-826c-6274d53ddafb',
			'reportcontext' => 'example_context',
			'reviewlevel' => 1
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'user_permissions_delete',
		'description' => 'Delete user permissions',
		'url' => 'user/permissions/410',
		'verb' => 'DELETE',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'reportcontext' => 'example_content'
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'user_permissions_get',
		'description' => 'Get user permissions',
		'url' => 'user/permissions',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'user_permissions_put',
		'description' => 'Update user permissions',
		'url' => 'user/permissions',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'reportcontext' => 'phhiv_2',
			'reviewnotifications' => 2
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'user_token_get',
		'description' => 'Request API token',
		'url' => 'token',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'headers' => array(
			'user: mark',
			'password: dev'
		),
		'params' => array(
			'url' => 'example.com'
		),
		'expected-response' => 'JSON',
		'level' => 1
	)
);