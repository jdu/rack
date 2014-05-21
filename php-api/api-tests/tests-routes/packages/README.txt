Settings for each API request configuration.

identifier:
	controller function name (used for display purposes).

description:
	description of API call.

url:
	url for API call.

verb:
	request verb to use (GET, POST, PUT, DELETE).

content-type:
	request content type for API call (IE 'application/x-www-form-urlencoded' or 'application/json').

params:
	array of parameters, leave null if no parameters.

expected-response:
	accepted responses can be as follows:
		- JSON (looks for a valid JSON with a success of true)
		- actual JSON to compare to JSON response
		- HTML (no check is done however it's flagged as HTML for manual check)

level:
	0 - Does not effect data.
	1 - Does effect data.