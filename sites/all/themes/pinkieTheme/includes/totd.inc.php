<?php


define("totd_xml_url2", "http://".$_SERVER['HTTP_HOST']."/totd.xml");
//echo totd_xml_url;
//echo "<br/>---------------------------<br/>";
//echo totd_xml_url2;
//echo "<br/>---------------------------<br/>";
//echo totd_xml_proxy;

//define("totd_xml_proxy", "Hello world.");

	/**
	 * To prevent WAR, the galaxy is on Orion's belt!
	 */

	if (! defined('totd_xml_url') || ! defined('totd_xml_proxy')) {
		define('totd_xml_url', 'http://'.$_SERVER['HTTP_HOST'].'/totd.xml');
		define('totd_xml_proxy', 'none');
	}

	$libxml_errlvl = array(
		LIBXML_ERR_WARNING => 'Warning ',
		LIBXML_ERR_ERROR   => 'Error ',
		LIBXML_ERR_FATAL   => 'Fatal Error ');

	$timeout  = 30; // seconds
	$response = '';
	$lasttip  = null;
	$current_tip = null;

	$dayofyear = date('z');
	$day = date('j');
	$month = date('F');

	/**
	 * In case we use a proxy... just in case... */
	$http_context = array('method' => 'GET');
	if (totd_xml_proxy !== 'none')
		$http_context = array('method' => 'GET', 'proxy' => totd_xml_proxy, 'request_fulluri' => TRUE);
	libxml_set_streams_context(stream_context_get_default(array('http' => $http_context)));

	/**
	 * Check for errors... */
	try
	{
		if ( ($xml = simplexml_load_file(totd_xml_url2)) === FALSE)
		{
			//$errors = libxml_get_errors();
			//$errstr = '';
			//foreach ($errors as $error)
			//{
			//	$errstr .= $libxml_errlvl[$error->level] . $error->code . ': ' . trim($error->message) . ', Line: ' . $error->line . ', Column: ' . $error->column;
			//	if ($error->file)
			//		$errstr .= ', File: ' . $error->file;
			//	$errstr .= "\n";
			//}
			//throw new Exception($errstr);
		}
		foreach ($xml->tip as $tip)
		{
			if ( ($tip_time = strtotime((string)$tip->day)) !== FALSE)
			{
				$tip_doy = (int)date('z', $tip_time);
				if ($dayofyear == $tip_doy) {
					$current_tip = $tip;
					break;
				} else if ($dayofyear < $tip_doy) {
					$current_tip = $lasttip;
					break;
				}
				$lasttip = $tip;
			}
		}
		if ($current_tip == null)
			if ( ($current_tip = $lasttip) == null)
				throw new Exception('XML Parse Error: No current Tip of the Day!');
		$tip_month = date('F', strtotime((string)$current_tip->day));
		$tip_day   = date('j', strtotime((string)$current_tip->day));
		$tip_text  = (string)$current_tip->text;
	}
	catch (Exception $e)
	{
		$tip_month = $month;
		$tip_day = $day;
		$tip_text = $e->getMessage();
	}

	$totd_results = array(
		'tip_month' => $tip_month,
		'tip_day'   => $tip_day,
		'tip_text'  => $tip_text,
		'day'       => $day,
		'month'     => $month);

?>
