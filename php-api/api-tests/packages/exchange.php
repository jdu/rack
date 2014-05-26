<?php
$api_request_arr['Exchange'] = array(
	array(
		'identifier' => 'database_index_put',
		'description' => 'Add/update database indexes',
		'url' => 'exchange/database_index/his',
		'verb' => 'PUT',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		// SELECT * FROM siv_data.locations WHERE cast(alternate_ids as text) IN ('{"UNHCR":"112DJ10000100000"}', '{"UNHCR":"112ET40300800000"}', '{"UNHCR":"112ET10301600000"}', '{"UNHCR":"112ET30055400000"}', '{"UNHCR":"112ET20301000000"}');
		'identifier' => 'exchange_report_batch_post',
		'description' => 'Batch save reports',
		'url' => 'exchange/report/batch/40',
		'verb' => 'POST',
		'content-type' => 'application/json',
		'params' => '[
			{"locationsuuid":"cb0b935e-acb9-4179-aca5-95b78d6e12ba","timelevel":3,"reportdate":"2013-01-01","creationdate":"2013-03-05","version":3,"source":"siv","userid":102,"REGION":"Africa","COUNTRY":"Djibouti","LOCATION":"Holl Holl","YEAR_NUM":2012,"MONTH":1,"CONTEXT":"protracted","POPTYPE":null,"TOT_REF":1050,"TOT_U5":160,"WASTE_WHO_GAMN":140,"WASTE_WHO_GAM":0.135,"WASTE_WHO_LOWGAM":null,"WASTE_WHO_UPGAM":null,"WASTE_WHO_SAM":0.23,"WASTE_WHO_LOWSAM":null,"WASTE_WHO_UPSAM":null,"WASTE_NCHS_GAM":null,"WASTE_NCHS_LOWGAM":null,"WASTE_NCHS_UPGAM":null,"WASTE_NCHS_SAM":null,"WASTE_NCHS_LOWSAM":null,"WASTE_NCHS_UPSAM":null,"STUNT_WHO_HAZ2":0.508,"STUNT_WHO_LOWHAZ2":null,"STUNT_WHO_UPHAZ2":null,"STUNT_WHO_HAZ3":0.2,"STUNT_WHO_LOWHAZ3":0,"STUNT_WHO_UPHAZ3":0,"STUNT_NCHS_HAZ2":null,"STUNT_NCHS_LOWHAZ2":null,"STUNT_NCHS_UPHAZ2":null,"STUNT_NCHS_HAZ3":null,"STUNT_NCHS_LOWHAZ3":null,"STUNT_NCHS_UPHAZ3":null,"ANAE_659_N":140,"ANAE_659":0.391,"ANAE_659_LOWCI":null,"ANAE_659_UPCI":null,"ANAE_659_MILD":0.278,"ANAE_659_MOD":0.113,"ANAE_659_SEV":0,"ANAE_659_SEV_LOWCI":null,"ANAE_659_SEV_UPCI":null,"ANAE_WRA":null,"ANAE_WRA_LOWCI":null,"ANAE_WRA_UPCI":null,"ANAE_WRA_MILD":null,"ANAE_WRA_MOD":null,"ANAE_WRA_SEV":null,"ANAE_WRA_SEV_LOWCI":null,"ANAE_WRA_SEV_UPCI":null,"ANAE_WRA_PW":null,"ANAE_WRA_LW":null,"CMR":null,"CMR_LOWCI":null,"CMR_UPCI":null,"U5MR":null,"U5MR_LOWCI":null,"U5MR_UPCI":null,"VITA659":0.669,"MEASLES_CARD":0.566,"MEASLES_HIS":0.38,"MEASLES_HISCARD":0.946,"IYCF":"no","FDSEC":"no","MORB":"mp","VACC":"no","WASH_IND":"no","BEDNET":"no","MUAC_CHILD":"yes","MUAC_WOM":"no","BMI_WOM":"no","SURVEY_DATE":"2012","LOC_REPORT":"DJIBOUTI 2012 NUTRITION SURVEY PRELIMINARY REPORT.doc","SURV_PART":"","FNL_RPT":null,"DATA_REC":null,"COMMENTS":""},
			{"locationsuuid":"c8b53b43-794b-4030-abd0-d6b38431bf1e","timelevel":3,"reportdate":"2012-09-01","creationdate":"2013-03-05","version":3,"source":"siv","userid":102,"REGION":"Africa","COUNTRY":"Ethiopia","LOCATION":"Awbarre","YEAR_NUM":2012,"MONTH":9,"CONTEXT":"protracted","POPTYPE":null,"TOT_REF":null,"TOT_U5":null,"WASTE_WHO_GAMN":327,"WASTE_WHO_GAM":0.104,"WASTE_WHO_LOWGAM":0.08,"WASTE_WHO_UPGAM":0.134,"WASTE_WHO_SAM":0.009,"WASTE_WHO_LOWSAM":0.003,"WASTE_WHO_UPSAM":0.025,"WASTE_NCHS_GAM":null,"WASTE_NCHS_LOWGAM":null,"WASTE_NCHS_UPGAM":null,"WASTE_NCHS_SAM":null,"WASTE_NCHS_LOWSAM":null,"WASTE_NCHS_UPSAM":null,"STUNT_WHO_HAZ2":0.233,"STUNT_WHO_LOWHAZ2":0.186,"STUNT_WHO_UPHAZ2":0.288,"STUNT_WHO_HAZ3":0.071,"STUNT_WHO_LOWHAZ3":0.051,"STUNT_WHO_UPHAZ3":0.096,"STUNT_NCHS_HAZ2":null,"STUNT_NCHS_LOWHAZ2":null,"STUNT_NCHS_UPHAZ2":null,"STUNT_NCHS_HAZ3":null,"STUNT_NCHS_LOWHAZ3":null,"STUNT_NCHS_UPHAZ3":null,"ANAE_659_N":329,"ANAE_659":0.31,"ANAE_659_LOWCI":0.261,"ANAE_659_UPCI":0.364,"ANAE_659_MILD":0.182,"ANAE_659_MOD":0.128,"ANAE_659_SEV":0,"ANAE_659_SEV_LOWCI":0,"ANAE_659_SEV_UPCI":0,"ANAE_WRA":0.136,"ANAE_WRA_LOWCI":0.093,"ANAE_WRA_UPCI":0.19,"ANAE_WRA_MILD":0.094,"ANAE_WRA_MOD":0.042,"ANAE_WRA_SEV":0,"ANAE_WRA_SEV_LOWCI":0,"ANAE_WRA_SEV_UPCI":0,"ANAE_WRA_PW":"no","ANAE_WRA_LW":"yes","CMR":0.24,"CMR_LOWCI":0.04,"CMR_UPCI":1.51,"U5MR":0.93,"U5MR_LOWCI":0.1,"U5MR_UPCI":8.29,"VITA659":0.96,"MEASLES_CARD":null,"MEASLES_HIS":null,"MEASLES_HISCARD":0.942,"IYCF":"no","FDSEC":"no","MORB":"yes","VACC":"yes","WASH_IND":"no","BEDNET":"no","MUAC_CHILD":"yes","MUAC_WOM":"no","BMI_WOM":"no","SURVEY_DATE":"2012","LOC_REPORT":"ETHIOPIA_1208_Kebre Beyah, Awbarre, Sheder Health and nutrition assessment.pdf","SURV_PART":"UNHCR, ARRA, WFP","FNL_RPT":"yes","DATA_REC":"yes","COMMENTS":""},
			{"locationsuuid":"5913c04b-6461-4c7d-8b79-bbc2f366c554","timelevel":3,"reportdate":"2012-06-01","creationdate":"2013-03-05","version":3,"source":"siv","userid":102,"REGION":"Africa","COUNTRY":"Ethiopia","LOCATION":"Aysayta","YEAR_NUM":2012,"MONTH":6,"CONTEXT":"protracted","POPTYPE":null,"TOT_REF":1855,"TOT_U5":350,"WASTE_WHO_GAMN":284,"WASTE_WHO_GAM":0.285,"WASTE_WHO_LOWGAM":null,"WASTE_WHO_UPGAM":null,"WASTE_WHO_SAM":0.067,"WASTE_WHO_LOWSAM":null,"WASTE_WHO_UPSAM":null,"WASTE_NCHS_GAM":null,"WASTE_NCHS_LOWGAM":null,"WASTE_NCHS_UPGAM":null,"WASTE_NCHS_SAM":null,"WASTE_NCHS_LOWSAM":null,"WASTE_NCHS_UPSAM":null,"STUNT_WHO_HAZ2":0.413,"STUNT_WHO_LOWHAZ2":null,"STUNT_WHO_UPHAZ2":null,"STUNT_WHO_HAZ3":0.178,"STUNT_WHO_LOWHAZ3":null,"STUNT_WHO_UPHAZ3":null,"STUNT_NCHS_HAZ2":null,"STUNT_NCHS_LOWHAZ2":null,"STUNT_NCHS_UPHAZ2":null,"STUNT_NCHS_HAZ3":null,"STUNT_NCHS_LOWHAZ3":null,"STUNT_NCHS_UPHAZ3":null,"ANAE_659_N":287,"ANAE_659":0.402,"ANAE_659_LOWCI":null,"ANAE_659_UPCI":null,"ANAE_659_MILD":0.206,"ANAE_659_MOD":0.192,"ANAE_659_SEV":0.007,"ANAE_659_SEV_LOWCI":null,"ANAE_659_SEV_UPCI":null,"ANAE_WRA":0.28,"ANAE_WRA_LOWCI":null,"ANAE_WRA_UPCI":null,"ANAE_WRA_MILD":0.167,"ANAE_WRA_MOD":0.113,"ANAE_WRA_SEV":0,"ANAE_WRA_SEV_LOWCI":null,"ANAE_WRA_SEV_UPCI":null,"ANAE_WRA_PW":"no","ANAE_WRA_LW":"yes","CMR":0.36,"CMR_LOWCI":null,"CMR_UPCI":null,"U5MR":0.92,"U5MR_LOWCI":null,"U5MR_UPCI":null,"VITA659":0.889,"MEASLES_CARD":0.359,"MEASLES_HIS":0.351,"MEASLES_HISCARD":0.71,"IYCF":"no","FDSEC":"no","MORB":"yes","VACC":"yes","WASH_IND":"no","BEDNET":"no","MUAC_CHILD":"yes","MUAC_WOM":"no","BMI_WOM":"no","SURVEY_DATE":"2012","LOC_REPORT":"ETHIOPIA_1206_Aysayta_Nutrition survey Preliminary report 2012","SURV_PART":"UNHCR, ARRA, MSF-Spain","FNL_RPT":"yes","DATA_REC":"yes","COMMENTS":"exhaustive methodology means no Cis"},
			{"locationsuuid":"b57d9bcb-4643-497e-8503-2b39e509172d","timelevel":3,"reportdate":"2012-12-01","creationdate":"2013-03-05","version":3,"source":"siv","userid":102,"REGION":"Africa","COUNTRY":"Ethiopia","LOCATION":"Bambasi","YEAR_NUM":2012,"MONTH":12,"CONTEXT":"protracted","POPTYPE":null,"TOT_REF":null,"TOT_U5":null,"WASTE_WHO_GAMN":null,"WASTE_WHO_GAM":0.097,"WASTE_WHO_LOWGAM":0.075,"WASTE_WHO_UPGAM":0.126,"WASTE_WHO_SAM":0.017,"WASTE_WHO_LOWSAM":0.008,"WASTE_WHO_UPSAM":0.037,"WASTE_NCHS_GAM":null,"WASTE_NCHS_LOWGAM":null,"WASTE_NCHS_UPGAM":null,"WASTE_NCHS_SAM":null,"WASTE_NCHS_LOWSAM":null,"WASTE_NCHS_UPSAM":null,"STUNT_WHO_HAZ2":null,"STUNT_WHO_LOWHAZ2":null,"STUNT_WHO_UPHAZ2":null,"STUNT_WHO_HAZ3":null,"STUNT_WHO_LOWHAZ3":null,"STUNT_WHO_UPHAZ3":null,"STUNT_NCHS_HAZ2":null,"STUNT_NCHS_LOWHAZ2":null,"STUNT_NCHS_UPHAZ2":null,"STUNT_NCHS_HAZ3":null,"STUNT_NCHS_LOWHAZ3":null,"STUNT_NCHS_UPHAZ3":null,"ANAE_659_N":null,"ANAE_659":0.288,"ANAE_659_LOWCI":0.246,"ANAE_659_UPCI":0.334,"ANAE_659_MILD":0.18,"ANAE_659_MOD":0.108,"ANAE_659_SEV":0,"ANAE_659_SEV_LOWCI":0,"ANAE_659_SEV_UPCI":0,"ANAE_WRA":0.11,"ANAE_WRA_LOWCI":0.068,"ANAE_WRA_UPCI":0.165,"ANAE_WRA_MILD":0.082,"ANAE_WRA_MOD":0.027,"ANAE_WRA_SEV":0,"ANAE_WRA_SEV_LOWCI":0,"ANAE_WRA_SEV_UPCI":0,"ANAE_WRA_PW":null,"ANAE_WRA_LW":null,"CMR":1.23,"CMR_LOWCI":0.07,"CMR_UPCI":19.06,"U5MR":0.95,"U5MR_LOWCI":0.11,"U5MR_UPCI":7.74,"VITA659":0.874,"MEASLES_CARD":null,"MEASLES_HIS":null,"MEASLES_HISCARD":0.837,"IYCF":"no","FDSEC":"no","MORB":"yes","VACC":"yes","WASH_IND":"no","BEDNET":"no","MUAC_CHILD":"yes","MUAC_WOM":"no","BMI_WOM":"no","SURVEY_DATE":"2012","LOC_REPORT":"ETHIOPIA_Bambasi_1212_Nutrition survey preliminary report","SURV_PART":"UNHCR, WFP, ARRA and MSF-F","FNL_RPT":"no","DATA_REC":"yes","COMMENTS":"preliminary report need to complete entry in data base"},
			{"locationsuuid":"1cc75467-aaaa-4b62-9dca-5c6ccde09176","timelevel":3,"reportdate":"2012-03-01","creationdate":"2013-03-05","version":3,"source":"siv","userid":102,"REGION":"Africa","COUNTRY":"Ethiopia","LOCATION":"Bokolomayo","YEAR_NUM":2012,"MONTH":3,"CONTEXT":"protracted","POPTYPE":null,"TOT_REF":null,"TOT_U5":null,"WASTE_WHO_GAMN":976,"WASTE_WHO_GAM":0.123,"WASTE_WHO_LOWGAM":0.104,"WASTE_WHO_UPGAM":0.145,"WASTE_WHO_SAM":0.019,"WASTE_WHO_LOWSAM":0.012,"WASTE_WHO_UPSAM":0.03,"WASTE_NCHS_GAM":0.123,"WASTE_NCHS_LOWGAM":0.103,"WASTE_NCHS_UPGAM":0.145,"WASTE_NCHS_SAM":0.006,"WASTE_NCHS_LOWSAM":0.003,"WASTE_NCHS_UPSAM":0.013,"STUNT_WHO_HAZ2":0.221,"STUNT_WHO_LOWHAZ2":0.196,"STUNT_WHO_UPHAZ2":0.248,"STUNT_WHO_HAZ3":0.053,"STUNT_WHO_LOWHAZ3":0.04,"STUNT_WHO_UPHAZ3":0.069,"STUNT_NCHS_HAZ2":0.171,"STUNT_NCHS_LOWHAZ2":0.149,"STUNT_NCHS_UPHAZ2":0.196,"STUNT_NCHS_HAZ3":0.032,"STUNT_NCHS_LOWHAZ3":0.023,"STUNT_NCHS_UPHAZ3":0.045,"ANAE_659_N":978,"ANAE_659":0.502,"ANAE_659_LOWCI":0.466,"ANAE_659_UPCI":0.53,"ANAE_659_MILD":0.255,"ANAE_659_MOD":0.233,"ANAE_659_SEV":0.01,"ANAE_659_SEV_LOWCI":0.005,"ANAE_659_SEV_UPCI":0.019,"ANAE_WRA":0.28,"ANAE_WRA_LOWCI":0.223,"ANAE_WRA_UPCI":0.342,"ANAE_WRA_MILD":0.153,"ANAE_WRA_MOD":0.119,"ANAE_WRA_SEV":0.008,"ANAE_WRA_SEV_LOWCI":0.001,"ANAE_WRA_SEV_UPCI":0.09,"ANAE_WRA_PW":"no","ANAE_WRA_LW":"yes","CMR":0.69,"CMR_LOWCI":0.45,"CMR_UPCI":0.99,"U5MR":1.42,"U5MR_LOWCI":0.83,"U5MR_UPCI":2.42,"VITA659":0.473,"MEASLES_CARD":0.181,"MEASLES_HIS":0.619,"MEASLES_HISCARD":0.8,"IYCF":null,"FDSEC":null,"MORB":"yes","VACC":"yes","WASH_IND":"no","BEDNET":"no","MUAC_CHILD":"yes","MUAC_WOM":"no","BMI_WOM":"no","SURVEY_DATE":"2012","LOC_REPORT":"ETHIOPIA_1203_Bokolmayo-Melkadida-Bur Amino_Nutrition survey","SURV_PART":"UNHCR, ARRA, WFP, Unicef and Goal","FNL_RPT":"yes","DATA_REC":"yes","COMMENTS":""}
		]',
		'expected-response' => 'JSON',
		'level' => 1
	),
	array(
		'identifier' => 'locations_get',
		'description' => 'Get a list of locations a user has permissions for depending on de form',
		'url' => 'exchange/locations/102/43',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'route_status' => 'stable',
		'level' => 0
	),
	array(
		// SELECT * FROM siv_data.locations WHERE cast(alternate_ids as text) = '{"UNHCR":"1000000000000000"}';
		'identifier' => 'permissions_get',
		'description' => 'Get a user&#39;s reporting permissions for a de form/location',
		'url' => 'exchange/permissions/102/40/b5ac2325-c8e9-45d5-bd74-58533c8a62bb',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => NULL,
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		// SELECT * FROM siv_data.locations WHERE cast(alternate_ids as text) = '{"UNHCR":"112SS10056300000"}';
		'identifier' => 'report_info_get',
		'description' => 'Get report information',
		'url' => 'exchange/report/40/info',
		'verb' => 'GET',
		'content-type' => 'application/x-www-form-urlencoded',
		'params' => array(
			'locationuuid' => '61922cee-f859-4a4d-bb73-3800ae504239',
			'timelevel' => 2,
			'reportdate' => '2013-01-05',
			'user' => 'mark',
			'password' => 'dev',
			'version' => 3
		),
		'expected-response' => 'JSON',
		'level' => 0
	),
	array(
		// SELECT * FROM siv_data.locations WHERE cast(alternate_ids as text) = '{"UNHCR":"112SS10056300000"}';
		'identifier' => 'exchange_report_post',
		'description' => 'Save a report',
		'url' => 'exchange/report/40',
		'verb' => 'POST',
		'content-type' => 'application/json',
		'params' => '{"locationsuuid":"61922cee-f859-4a4d-bb73-3800ae504239","timelevel":2,"reportdate":"2012-12-01","creationdate":"2013-03-06","version":3,"source":"siv","userid":102,"REGION":"Africa","COUNTRY":"Djibouti","LOCATION":"Ali Addeh camps","YEAR_NUM":2012,"MONTH":12,"CONTEXT":"protracted","POPTYPE":null,"TOT_REF":16000,"TOT_U5":2400,"WASTE_WHO_GAMN":344,"WASTE_WHO_GAM":0.099,"WASTE_WHO_LOWGAM":0.071,"WASTE_WHO_UPGAM":0.135,"WASTE_WHO_SAM":0.006,"WASTE_WHO_LOWSAM":0.002,"WASTE_WHO_UPSAM":0.022,"WASTE_NCHS_GAM":null,"WASTE_NCHS_LOWGAM":null,"WASTE_NCHS_UPGAM":null,"WASTE_NCHS_SAM":null,"WASTE_NCHS_LOWSAM":null,"WASTE_NCHS_UPSAM":null,"STUNT_WHO_HAZ2":0.397,"STUNT_WHO_LOWHAZ2":0.346,"STUNT_WHO_UPHAZ2":0.451,"STUNT_WHO_HAZ3":0.133,"STUNT_WHO_LOWHAZ3":0.102,"STUNT_WHO_UPHAZ3":0.174,"STUNT_NCHS_HAZ2":null,"STUNT_NCHS_LOWHAZ2":null,"STUNT_NCHS_UPHAZ2":null,"STUNT_NCHS_HAZ3":null,"STUNT_NCHS_LOWHAZ3":null,"STUNT_NCHS_UPHAZ3":null,"ANAE_659_N":344,"ANAE_659":0.355,"ANAE_659_LOWCI":0.305,"ANAE_659_UPCI":0.408,"ANAE_659_MILD":0.198,"ANAE_659_MOD":0.154,"ANAE_659_SEV":0.003,"ANAE_659_SEV_LOWCI":0,"ANAE_659_SEV_UPCI":0.019,"ANAE_WRA":0.29,"ANAE_WRA_LOWCI":0.225,"ANAE_WRA_UPCI":0.361,"ANAE_WRA_MILD":0.186,"ANAE_WRA_MOD":0.104,"ANAE_WRA_SEV":0,"ANAE_WRA_SEV_LOWCI":null,"ANAE_WRA_SEV_UPCI":null,"ANAE_WRA_PW":"no","ANAE_WRA_LW":"yes","CMR":null,"CMR_LOWCI":null,"CMR_UPCI":null,"U5MR":null,"U5MR_LOWCI":null,"U5MR_UPCI":null,"VITA659":0.82,"MEASLES_CARD":0.782,"MEASLES_HIS":0.138,"MEASLES_HISCARD":0.92,"IYCF":"no","FDSEC":"no","MORB":"no","VACC":"no","WASH_IND":"no","BEDNET":"no","MUAC_CHILD":"yes","MUAC_WOM":"no","BMI_WOM":"no","SURVEY_DATE":"2012","LOC_REPORT":"DJIBOUTI 2012 NUTRITION SURVEY PRELIMINARY REPORT.doc","SURV_PART":"","FNL_RPT":null,"DATA_REC":null,"COMMENTS":""}',
		'expected-response' => 'JSON',
		'level' => 1
	)
);