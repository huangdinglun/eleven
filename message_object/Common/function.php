<?php

	function C($key)
	{
		global $config;
		return $config[$key];
	}

	function __autoload($classname)
	{
		// echo $classname;die;
		include './'.$classname.'.php';
	}
	function url($controller, $action, $arr = [])
	{
		$url =  APP_HOST.'/index.php?c='.$controller.'$a='.$action;

		if(!empty($arr)){
			foreach ($arr as $key => $value) {
				$url .= '&'.$key.'='.$value;
			}
		}

		return $url; 

	}