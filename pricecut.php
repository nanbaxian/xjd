<?php

/**
 *  降价通知
 * ============================================================================
 * 版权所有 2015-2016 ，并保留所有权利。
 * 网站地址: ；
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: 
 * $Id: message.php 17217  
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

$goods_id = $_POST['goods_id'] ? intval($_POST['goods_id']) : 0;
$price = $_POST['price'] ? $_POST['price'] : 0;
$mobile = $_POST['mobile'] ? $_POST['mobile'] : '';
$email = $_POST['email'] ? $_POST['email'] : '';
$nowtime= gmtime();

$sql = "insert into ".$ecs->table('pricecut')." (goods_id, price, mobile, email, add_time) values('$goods_id', '$price', '$mobile', '$email', '$nowtime')";
$db->query($sql);

$goods_url =  build_uri('goods', array('gid'=>$goods_id), '');
show_message('恭喜，您的降价通知已经成功提交！', '返回上一页', $goods_url);

?>
