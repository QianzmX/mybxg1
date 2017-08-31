<?php

//路由：路径的分发、导航、index.php的作用就是根据请求URL的不同导航到不同的页面。
	// var_dump($_SERVER);
//判断数组中是否包含指定的属性
	$dir = 'main';
	$filename = 'index';
	if(array_key_exists('PATH_INFO',$_SERVER)){
		$path = $_SERVER['PATH_INFO'];
		$str = substr($path,1);
		$arr =explode('/',$str);
		if(count($arr)==2){
			$dir = $arr[0];
			$filename = $arr[1];
		}else{
			$filename = 'login';
		}
		
	}
	//把当前页面嵌入一个子页面
	include('./views/'.$dir.'/'.$filename.'.html');

?>