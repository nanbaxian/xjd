<?php/** * ECSHOP 管理中心公用文件 * ============================================================================ *  版权所有 2015-2016 鸿宇科技有限公司，并保留所有权利。 * 网站地址: http://bbs.hongyuvip.com; * ---------------------------------------------------------------------------- * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。 * 踏踏实实做事，堂堂正正做人。 * ============================================================================ * $Author: derek $ * $Id: init.php 17217 2011-01-19 06:29:08Z derek $*/if (!defined('IN_ECS')){    die('Hacking attempt');}define('ECS_ADMIN', true);error_reporting(E_ALL);if (__FILE__ == ''){    die('Fatal error code: 0');}/* 初始化设置 */@ini_set('memory_limit',          '64M');@ini_set('session.cache_expire',  180);@ini_set('session.use_trans_sid', 0);@ini_set('session.use_cookies',   1);@ini_set('session.auto_start',    0);@ini_set('display_errors',        1);if (DIRECTORY_SEPARATOR == '\\'){    @ini_set('include_path',      '.;' . ROOT_PATH);}else{    @ini_set('include_path',      '.:' . ROOT_PATH);}if (file_exists('../../data/config.php')){    include('../../data/config.php');}else{    include('../../includes/config.php');}/* 取得当前ecshop所在的根目录 */if(!defined('ADMIN_PATH_M')){    define('ADMIN_PATH_M','json');}define('ROOT_PATH', str_replace(ADMIN_PATH_M . '/includes/init.php', '', str_replace('\\', '/', __FILE__)));if (defined('DEBUG_MODE') == false){    define('DEBUG_MODE', 0);}if (PHP_VERSION >= '5.1' && !empty($timezone)){    date_default_timezone_set($timezone);}if (isset($_SERVER['PHP_SELF'])){    define('PHP_SELF', $_SERVER['PHP_SELF']);}else{    define('PHP_SELF', $_SERVER['SCRIPT_NAME']);}require( '../includes/inc_constant.php');require('../includes/cls_ecshop.php');require('../includes/cls_error.php');require('../includes/lib_time.php');require('../includes/lib_base.php');require('../includes/lib_common.php');require('./includes/lib_main.php');require('./includes/cls_exchange.php');/* 创建 ECSHOP 对象 */$ecs = new ECS($db_name, $prefix);define('DATA_DIR', $ecs->data_dir());define('IMAGE_DIR', $ecs->image_dir());/* 初始化数据库类 */require('../includes/cls_mysql.php');$db = new cls_mysql($db_host, $db_user, $db_pass, $db_name);$db_host = $db_user = $db_pass = $db_name = NULL;?>