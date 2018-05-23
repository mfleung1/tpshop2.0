<?php
	namespace app\home\widget;
	use think\Controller;
	class Cates extends Controller
	{	
		//公共头部
		public function header(){
			return $this->fetch("public/header");
		}
		//公共菜单
		public function footer(){
			return $this->fetch('public:footer');
		}
	}