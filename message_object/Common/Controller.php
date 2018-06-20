<?php
	
namespace Common;

	class Controller
	{
		public  $assign;

		public function display($address)
		{
			@extract($this->assign);
			include('./View/'.$address.'.php');
		} 
		public function assign($key, $val)
		{
			$this->assign[$key] = $val;
		}
	}
	