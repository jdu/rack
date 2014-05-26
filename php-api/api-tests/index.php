<?php
/**
 * integrity check on API
 *
 *@version 1.0
 *@author Sean Newby <seannewby@sndevelopment.com>
 *@modified Sep 1, 2013 <Sean Newby>
 */

/**
 * HARDCODED VALUES:
 */
$api_url = 'http://192.168.50.4/siv-v3/api/index.php/';
$user_cookie_name = 'twine_user';

// check for package and level
if ( ! isset($_GET['package']) || ! isset($_GET['level']))
{
	// missing parameters
	echo '<h1>Both "package" and "level" must be set.</h1>';
	echo '<p>"package" parameter can be a single package, multiple packages (comma delimited) or "all" for all packages.</p>';
	echo '<p>"level" parameter can be one of the following:</p>';
	echo '<ul>';
	echo '<li>0 - API calls that do not effect data.</li>';
	echo '<li>1 - API calls that do effect data.</li>';
	echo '</ul>';
	echo '<p style="font-style: italic">API calls will be made up until the level selected, IE if 1 is selected the API calls configured as 0 and 1 will be tested.</p>';
	die();
}

// increase php time out
ini_set('max_execution_time', -1);

// set all package array
$all_package_arr = array('admin', 'analytics', 'collections', 'comments', 'dashboard', 'data', 'dataentry', 'exchange', 'export', 'files', 'indicators', 'locations', 'maintenance', 'notifications', 'partners', 'reports', 'review', 'services', 'tools', 'users');

// parse packages
if ($_GET['package'] == 'all')
{
	$package_arr = $all_package_arr;
}
else
{
	$package_arr = explode(',', $_GET['package']);
}

// loop through packages and load API requests
foreach ($package_arr as $package)
{
	// check that package is valid
	if ( ! in_array($package, $all_package_arr))
	{
		// invalid package
		die($package . ' is not a valid package.');
	}
	else
	{
		// load package file
		require('./packages/' . $package . '.php');
	}
}

// set level
$level = (int)$_GET['level'];

// set up defaults
$response_arr = array();
$response_count_arr = array(
	'success' => 0,
	'failure' => 0,
	'html' => 0,
	'api_error' => 0,
	'curl_error' => 0
);

// check for logged in user
if (! isset($_COOKIE[$user_cookie_name]))
{
	die('No user logged in, please login to continue.');
}

// set user cookie
$user_cookie = $_COOKIE[$user_cookie_name];

// loop through api calls
foreach ($api_request_arr as $package => $request_arr)
{
	foreach ($request_arr as $request)
	{
		// check level
		if ($request['level'] <= $level)
		{
			// prepare data
			$request_url = $api_url . $request['url'];

			// check for parameters and set parameter string
			if ( ! is_null($request['params']))
			{
				switch($request['content-type'])
				{
					case 'application/x-www-form-urlencoded':
						$param_string = http_build_query($request['params']);
						break;
					case 'application/json':
						$param_string = $request['params'];
						break;
					default:
				}

				// check for get request
				if ($request['verb'] == 'GET')
				{
					$request_url .= '?' . $param_string;
				}
			}
			else
			{
				$param_string = NULL;
			}

			// init cURL
			$curl = curl_init();

			// set url
			curl_setopt($curl, CURLOPT_URL, $request_url);

			// set request verb
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $request['verb']);

			// set user cookie
			curl_setopt($curl, CURLOPT_COOKIE, $user_cookie_name . '=' . urlencode($user_cookie) . ';');

			// set HTTP header, content type
			curl_setopt($curl, CURLOPT_HTTPHEADER, (isset($request['headers']) ? array_merge($request['headers'], array('Content-Type: ' . $request['content-type'])) : array('Content-Type: ' . $request['content-type'])));

			// set post fields
			if ( ! is_null($request['params']) && $request['verb'] != 'GET')
			{
				curl_setopt($curl, CURLOPT_POST, sizeof($request['params']));
				curl_setopt($curl, CURLOPT_POSTFIELDS, $param_string);
			}

			// set cURL return type
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

			// preform api request
			$response = curl_exec($curl);

			// check for cURL errors
			$curl_error = curl_error($curl);
			if ( ! empty($curl_error))
			{
				// cURL error
				$response_count_arr['curl_error']++;

				// log response
				$response_arr[$package][] = array_merge(
					$request,
					array(
						'response' => 'cURL error: ' . $curl_error,
						'status' => 'curl_error',
						'label' => 'error',
						'request_url' => $request_url,
						'param_string' => $param_string
					)
				);
			}
			else
			{
				// check for HTML response
				if ($request['expected-response'] == 'HTML')
				{
					// success
					$response_count_arr['html']++;

					// log response
					$response_arr[$package][] = array_merge(
						$request,
						array(
							'response' => $response,
							'status' => 'success',
							'label' => 'info',
							'request_url' => $request_url,
							'param_string' => $param_string
						)
					);
				}
				else
				{
					// decode cURL response
					$json_arr = json_decode($response, TRUE);

					// check response
					if (is_null($json_arr))
					{
						// invalid JSON
						$response_count_arr['api_error']++;

						// log response
						$response_arr[$package][] = array_merge(
							$request,
							array(
								'response' => 'Invalid JSON response returned from API: ' . $response,
								'status' => 'api_error',
								'label' => 'danger',
								'request_url' => $request_url,
								'param_string' => $param_string
							)
						);
					}
					else
					{
						// check response
						if ($request['expected-response'] == 'JSON')
						{
							// check JSON status
							$response_status = ($json_arr['success'] === TRUE ? TRUE : FALSE);
						}
						else
						{
							// compare JSON response
							$response_status = ($json_arr == $request['expected_status'] ? TRUE : FALSE);
						}

						// check response status
						if ($response_status === TRUE)
						{
							// success
							$response_count_arr['success']++;

							// log response
							$response_arr[$package][] = array_merge(
								$request,
								array(
									'response' => $response,
									'status' => 'success',
									'label' => 'success',
									'request_url' => $request_url,
									'param_string' => $param_string
								)
							);
						}
						else
						{
							// failure
							$response_count_arr['failure']++;

							// log response
							$response_arr[$package][] = array_merge(
								$request,
								array(
									'response' => $response,
									'status' => 'failure',
									'label' => 'warning',
									'request_url' => $request_url,
									'param_string' => $param_string
								)
							);
						}
					}
				}
			}

			// close out cURL
			curl_close($curl);
		}
	}
}

function prepare_post_fields($field_arr)
{
	$field_string = '';
	foreach($field_arr as $key => $value)
	{
		$field_string .= $key.'='.$value.'&';
	}

	$field_string = rtrim($field_string, '&');

	return $field_string;
}

// load up notes
require('./notes.php');

// display responses
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Twine - API Integrity Checks</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="chrome=1">
		<script type="text/javascript" src="../../app/vendor/jquery.js"></script>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

		<style>
			.label-danger{background-color: #d9534f;}
			.label-error{background-color: #ff0000;}
			.no-hover a:hover{text-decoration: none !important;}
		</style>
	</head>

	<body>
		<h3>Notes</h3>
		<?php foreach($note_arr as $label => $note) : ?>
			<h4>&nbsp;&nbsp;&nbsp;<?php echo $label ?></h4>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $note ?>
		<?php endforeach; ?>
		<br /><br />
		<h4>
			Summary
			<span class="label label-success"><?php echo $response_count_arr['success'] ?> Successful</span>
			<span class="label label-info"><?php echo $response_count_arr['html'] ?> HTML</span>
			<span class="label label-warning"><?php echo $response_count_arr['failure'] ?> Failed</span>
			<span class="label label-danger"><?php echo $response_count_arr['curl_error'] + $response_count_arr['api_error'] ?> API Error</span>
		</h4>
		<div class="panel-group" id="api-integrity-accordion">
			<?php foreach ($response_arr as $package => $responses) : ?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#api-integrity-accordion" href="#<?php echo $package ?>-accordion">
							<?php echo $package; ?>
						</a>
					</div>
					<div id="<?php echo $package ?>-accordion" class="panel-collapse collapse out">
						<div class="panel-body">
							<div class="panel-group" id="<?php echo $package ?>-accordion-inner">
								<?php foreach ($responses as $response) : ?>
									<div class="panel panel-default no-hover">
										<div class="panel-heading">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#<?php echo $package ?>-accordion-inner" href="#<?php echo $response['identifier'] ?>-response-accordion">
												<span class="label label-<?php echo $response['label'] ?>"><?php echo $response['verb'] . '- ' .  $response['url'] ?></span>
											</a>
										</div>
										<div id="<?php echo $response['identifier'] ?>-response-accordion" class="panel-collapse collapse out">
											<div class="panel-body">
												<h4>Description</h4>
												<p><?php echo $response['description'] ?></p>
												<h4>URL</h4>
												<p><a href="<?php echo $response['request_url'] ?>" target="_new"><?php echo $response['request_url'] ?></a></p>
												<h4>Content-Type</h4>
												<p><?php echo $response['content-type'] ?></p>
												<h4>Parameters</h4>
												<?php echo ( ! is_null($response['param_string']) ? '<p>' . $response['param_string'] . '</p>' : '' ) ?>
												<p><?php echo (is_null($response['params']) ? 'n/a' : '<pre>' . print_r($response['params'], TRUE) . '</pre>') ?></p>
												<h4>Response</h4>
												<p><?php echo '<pre>' . print_r(htmlentities($response['response'], ENT_QUOTES), TRUE) . '</pre>'; ?></p>
											</div><!-- .panel-body -->
										</div><!-- .panel-collapse -->
									</div><!-- .panel.panel-default -->
								<?php endforeach; ?>
							</div><!-- .panel-group #<?php echo $package ?>-accordion-inner -->
						</div><!-- .panel-body -->
					</div>
				</div><!-- .panel.panel-default -->
			<?php endforeach; ?>
		</div><!-- .panel-group #api-integrity-accordion -->
	</body>
</html>