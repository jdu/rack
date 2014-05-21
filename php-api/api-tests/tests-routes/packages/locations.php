<?php
$api_request_arr['Locations'] = array(
	array(
		'identifier' => 'location_post',
		'description' => 'Create new location',
		'url' => 'location',
		'url_raw' => 'location',
		'verb' => 'POST',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'loc_id' => '112ER00000000000',
			'geo_level' => 4,
			'loc_name' => 'example PPG2',
			'is_active' => 1
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'location_delete',
		'description' => 'Delete location',
		'url' => 'location/8bb56ce6-ccfa-4f64-8620-40a0863102a4',
		'verb' => 'DELETE',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'location_summary_all',
		'description' => 'Get all location summaries',
		'url' => 'location/summary',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'location_summary_specific',
		'description' => 'Get location summaries for de form 43 (AR Country 2012)',
		'url' => 'location/summary/43',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'location_detail_get_all',
		'description' => 'Get location details (all)',
		'url' => 'location/detail',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'location_detail_get_specific',
		'description' => 'Get location details (Specific)',
		'url' => 'location/detail/cd0cf6bf-33c1-4694-9de9-b4a9918297d2',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'location_get_uuid',
		'description' => 'Get location information (by uuid)',
		'url' => 'location/728325ca-c908-4e0f-9d48-45d9a5aa9fe1',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		'identifier' => 'location_get_name',
		'description' => 'Get location information (by name)',
		'url' => 'location/Zimbabwe',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),

	array(
		'identifier' => 'populate_locations_uuid_put',
		'description' => 'Populate locationsuuid columns across all applicable tables',
		'url' => 'locationsuuid',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),

	array(
		'identifier' => 'location_name_put',
		'description' => 'Update a location&#39;s name',
		'url' => 'location/name/9158d5e2-02f1-47dd-ac87-04932378decf',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'name' => 'Renamed location',
		),
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'location_put',
		'description' => 'Update location uuid',
		'url' => 'location',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'locationuuid' => 'ee697142-b76d-467d-a843-a6ca18540436',
			'newlocationuuid' => '9053b021-423d-4738-ac4d-8db37c6b3238'
		),
		'expected-response' => 'JSON',
		'level' => 1
	)
);