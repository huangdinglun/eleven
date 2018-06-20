<?php 
namespace Controllers\Home;
use Common\Controller;
use Model\DB;
class Index extends Controller
{
	public function index()
	{
		$this->display('Home/Index/index');
	}
	//段子
	public function episode()
	{
		$this->display('Home/Index/episode');
	}
	//版本跳转
	public function jumplist()
	{
		$this->display('Home/Index/jumplist');
	}
	//干货
	public function Drygoods()
	{
		$this->display('Home/Index/Drygoods');
	}
	//关于
	public function about()
	{
		$this->display('Home/Index/about');
	}
}