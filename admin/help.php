<?php
/**
 *  帮助信息接口
 * ============================================================================
 * 版权所有 2015-2016 ，并保留所有权利。
 * 网站地址: ；
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: 
 * $Id: respond.php 16220 2009-06-12 02:08:59Z 
 */

define('IN_ECS', true);
require(dirname(__FILE__) . '/includes/init.php');

$get_keyword = trim($_GET['al']); // 获取关键字
header("location:http://help./do.php?k=".$get_keyword."&v=".$_CFG['ecs_version']."&l=".$_CFG['lang']."&c=".EC_CHARSET);
?>