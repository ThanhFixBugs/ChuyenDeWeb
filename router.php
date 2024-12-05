<?php
$controllers =array(
 'home'=>['index','error'],
 'sach'=>['error','themsach','xuly_themsach','dss','Suathongtinsach','xuly_suasach', 'xulytimkiem'],
 'muontra'=>['themmuontra','xuly_themmuontra','dsmt','error'],
 'docgia'=>['themdocgia','dsdg','xuly_themdocgia','error'],
);
if(!array_key_exists($controller,$controllers)|| !in_array($action,$controllers[$controller])){
    $controller='home';
    $action='error';
}
include_once('controllers/' . $controller . '_controller.php');
$tenClass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $tenClass;
$controller->$action();