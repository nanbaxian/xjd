<!-- $Id: group_buy_info.htm 14216 2015-02-10 02:27:21Z  -->
<?php echo $this->fetch('pageheader.htm'); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,')); ?>
<script type="text/javascript" src="../js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="../js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./js/validate/jquery.validate.js"></script>
<script type="text/javascript" src="./js/validate/messages_zh.js"></script>
<script type="text/javascript" src="./js/validator.js"></script>
<style type="text/css">
label.error {
	color: red;
	background: url(./images/warning_small.gif) no-repeat;
	padding-left: 18px;
}

label.success {
	background: url(./images/yes.gif) no-repeat;
	padding-left: 18px;
}
</style>
<!-- 搜索用户 -->
<div class="form-div">
	<form action="javascript:searchUsers()" name="searchForm">
		<!-- 入驻商编号 -->
		<input type="hidden" name="supp_id" value="-1" />
		<img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
		<?php echo $this->_var['lang']['label_user_id']; ?>
		<!-- 关键字 -->
		<input type="text" name="keyword" size="20" />
		<input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" />
	</form>
</div>
<!--  onsubmit="return validate()" -->
<form id="form1" method="post" action="customer.php?act=insert_update&XDEBUG_SESSION_START=ECLIPSE_DBGP" name="theForm">
	<input type="hidden" id="cus_id" name="cus_id" value="<?php echo $this->_var['customer']['cus_id']; ?>">
	<div class="main-div">
		<table id="group-table" cellspacing="1" cellpadding="3" width="100%">
			<tr>
				<td class="label"><?php echo $this->_var['lang']['label_user_id']; ?></td>
				<td>
					<select name="user_id" class="required">
						<?php if ($this->_var['customer']['cus_id']): ?>
						<option value="<?php echo $this->_var['customer']['user_id']; ?>"><?php echo $this->_var['customer']['user_name']; ?></option>
						<?php else: ?>
						<option value=""><?php echo $this->_var['lang']['notice_user_name']; ?></option>
						<?php endif; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td class="label">
					<a href="javascript:showNotice('noticOfUsername');" title="<?php echo $this->_var['lang']['form_notice']; ?>">
						<img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>">
					</a>
					<?php echo $this->_var['lang']['label_of_username']; ?>
				</td>
				<td>
					<input type="text" id="of_username" name="of_username" size="22" value="<?php echo $this->_var['customer']['of_username']; ?>" class="required" />
					<br />
					<span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display: block" <?php else: ?> style="display:none" <?php endif; ?> id="noticOfUsername"><?php echo $this->_var['lang']['notice_of_username']; ?></span>
				</td>
			</tr>
			<tr>
				<td class="label">
					<a href="javascript:showNotice('noticCusName');" title="<?php echo $this->_var['lang']['form_notice']; ?>">
						<img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>">
					</a>
					<?php echo $this->_var['lang']['label_cus_name']; ?>
				</td>
				<td>
					<input type="text" id="cus_name" name="cus_name" size="22" value="<?php echo $this->_var['customer']['cus_name']; ?>" class="required" />
					<br />
					<span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display: block" <?php else: ?> style="display:none" <?php endif; ?> id="noticCusName"><?php echo $this->_var['lang']['notice_cus_name']; ?></span>
				</td>
			</tr>
			<tr>
				<td class="label">
					<a href="javascript:showNotice('noticCusPassword');" title="<?php echo $this->_var['lang']['form_notice']; ?>">
						<img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>">
					</a>
					<?php echo $this->_var['lang']['label_cus_password']; ?>
				</td>
				<td>
					<!-- <?php if ($this->_var['customer']['cus_id'] != null): ?> -->
					<input type="password" id="cus_password" name="cus_password" size="22" value="" />
					<!-- <?php else: ?> -->
					<input type="password" id="cus_password" name="cus_password" size="22" value="" class="required" />
					<!-- <?php endif; ?> -->
					<br />
					<span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display: block" <?php else: ?> style="display:none" <?php endif; ?> id="noticCusPassword"><?php echo $this->_var['lang']['notice_cus_password']; ?></span>
				</td>
			</tr>
			<tr>
				<td class="label"><?php echo $this->_var['lang']['label_cus_repassword']; ?></td>
				<td>
					<!-- <?php if ($this->_var['customer']['cus_id'] != null): ?> -->
					<input type="password" id="cus_repassword" name="cus_repassword" size="22" value="" />
					<!-- <?php else: ?> -->
					<input type="password" id="cus_repassword" name="cus_repassword" size="22" value="" class="" />
					<!-- <?php endif; ?> -->
				</td>
			</tr>
			<tr>
				<td class="label">
					<a href="javascript:showNotice('noticCusType');" title="<?php echo $this->_var['lang']['form_notice']; ?>">
						<img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>">
					</a>
					<?php echo $this->_var['lang']['label_cus_type']; ?>
				</td>
				<td>
					<input type="radio" id="cus_type_0" name="cus_type" value="0" size="30" checked="checked" />
					<label for="cus_type_0" style="vertical-align: middle; font: 12px/24px verdana;"><?php echo $this->_var['lang']['CUS_TYPE']['0']; ?></label>
					<input type="radio" id="cus_type_1" name="cus_type" value="1" size="30" />
					<label for="cus_type_1" style="vertical-align: middle; font: 12px/24px verdana;"><?php echo $this->_var['lang']['CUS_TYPE']['1']; ?></label>
					<input type="radio" id="cus_type_2" name="cus_type" value="2" size="30" />
					<label for="cus_type_2" style="vertical-align: middle; font: 12px/24px verdana;"><?php echo $this->_var['lang']['CUS_TYPE']['2']; ?></label>
					<br />
					<span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display: block" <?php else: ?> style="display:none" <?php endif; ?> id="noticCusType"><?php echo $this->_var['lang']['notice_cus_type']; ?></span>
				</td>
			</tr>
			<tr>
				<td class="label"><?php echo $this->_var['lang']['label_cus_enable']; ?></td>
				<td>
					<input type="radio" id="cus_enable_1" name="cus_enable" value="1" size="30" checked="checked" />
					<label for="cus_enable_1" style="vertical-align: middle; font: 12px/24px verdana;"><?php echo $this->_var['lang']['CUS_ENABLE']['1']; ?></label>
					<input type="radio" id="cus_enable_0" name="cus_enable" value="0" size="30" />
					<label for="cus_enable_0" style="vertical-align: middle; font: 12px/24px verdana;"><?php echo $this->_var['lang']['CUS_ENABLE']['0']; ?></label>
				</td>
			</tr>
			<tr>
				<td class="label"><?php echo $this->_var['lang']['label_cus_desc']; ?></td>
				<td>
					<textarea name="act_desc" cols="40" rows="3"><?php echo $this->_var['customer']['act_desc']; ?></textarea>
				</td>
			</tr>
			<tr>
				<td class="label">&nbsp;</td>
				<td>
					<input name="act_id" type="hidden" id="act_id" value="<?php echo $this->_var['customer']['act_id']; ?>">
					<input type="button" id="btn_submit" name="btn_submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
					<input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
					<?php if ($this->_var['customer']['status'] == 1): ?>
					<input type="submit" name="finish" value="<?php echo $this->_var['lang']['button_finish']; ?>" class="button" onclick="return confirm('<?php echo $this->_var['lang']['notice_finish']; ?>')" />
					<?php elseif ($this->_var['customer']['status'] == 2): ?>
					<input type="submit" name="succeed" value="<?php echo $this->_var['lang']['button_succeed']; ?>" class="button" onclick="return confirm(succeed_confirm)" />
					<?php echo $this->_var['lang']['notice_succeed']; ?>
					<br />
					<input type="submit" name="fail" value="<?php echo $this->_var['lang']['button_fail']; ?>" class="button" onclick="return confirm(fail_confirm)" />
					<?php echo $this->_var['lang']['notice_fail']; ?> <?php elseif ($this->_var['customer']['status'] == 3): ?>
					<input type="submit" name="mail" value="<?php echo $this->_var['lang']['button_mail']; ?>" class="button" onclick="return confirm('<?php echo $this->_var['lang']['notice_mail']; ?>')" />
					<?php endif; ?>
				</td>
			</tr>
		</table>
	</div>
</form>
<script language="JavaScript">

/**
 * 搜索商品
 */
function searchUsers() {
	var filter = new Object;
	filter.keyword = document.forms['searchForm'].elements['keyword'].value;

	$.get('customer.php?is_ajax=1&act=search_users', {
		keyword: $("#keyword").val(),
		suppliers_id: 0
	}, searchUsersResponse, 'text');
}

function searchUsersResponse(result) {

	result = $.parseJSON(result);

	if (result.error == '1' && result.message != '') {
		alert(result.message);
		return;
	}

	var sel = document.forms['theForm'].elements['user_id'];

	sel.length = 0;

	/* 创建 options */
	var users = result.content;
	if (users) {
		for (i = 0; i < users.length; i++) {
			var opt = document.createElement("OPTION");
			opt.value = users[i].user_id;
			opt.text = users[i].user_name;
			sel.options.add(opt);
		}
	} else {
		var opt = document.createElement("OPTION");
		opt.value = 0;
		opt.text = search_is_null;
		sel.options.add(opt);
	}

	return;
}

var of_username_enable = false;

if ("<?php echo $this->_var['customer']['cus_id']; ?>".length > 0) {
	of_username_enable = true;
}

var of_username = $("#of_username").val();
function check_of_username(success, error) {

	$("#of_username-error").remove();
	$("#of_username-success").remove();

	var value = $("#of_username").val();
	if (value.length > 0 && of_username != value) {

		of_username = value;

		var url = "customer.php?is_ajax=1&act=check_of_username="+of_username;
		url = "customer.php?is_ajax=1&XDEBUG_SESSION_START=ECLIPSE_DBGP&act=check_of_username&of_username=" + of_username;

		$.get(url, {}, function(data) {
			if (data != null && data.length > 0) {
				data = $.parseJSON(data);
				var exist = data.content;

				if (exist) {
					setError($("#of_username"), "用户名已存在");
					of_username_enable = false;
					if ($.isFunction(error)) {
						error();
					}
				} else {
					setSuccess($("#of_username"), "可以使用");
					of_username_enable = true;
					if ($.isFunction(success)) {
						success();
					}
				}
			}
		}, "text");

	} else if (value.length == 0) {
		setError($("#of_username"), "必须填写");
	} else if (!of_username_enable) {
		setError($("#of_username"), "用户名已存在");
	} else if (of_username_enable) {
		setSuccess($("#of_username"), "可以使用");
	}
}

function setError(target, message) {
	$("#" + target.attr("id") + "-error").remove();
	$("#" + target.attr("id") + "-success").remove();
	$("#of_username-success").remove();
	$(target).after("<label id='of_username-error' class='error' for='of_username'>" + message + "</label>");
	$(target).focus();
}
function setSuccess(target, message) {
	$("#" + target.attr("id") + "-error").remove();
	$("#" + target.attr("id") + "-success").remove();
	$(target).after("<label id='of_username-success' class='success' for='of_username'>" + message + "</label>");
}

$().ready(function() {

	var validator = $("#form1").validate();
	
	$("#btn_submit").click(function() {
		if(!validator.form()){
	        return;
	    }
		if (of_username_enable) {
			$("#form1").submit();
		} else {
			if ($("#of_username").val().length == 0) {
				setError($("#of_username"), "必须填写")
			} else {
				setError($("#of_username"), "用户名已存在")
			}
		}
		return false;
	});

	$.validator.messages["pnumber"] = "请输入大于或等于0的有效数字";

	if ("<?php echo $this->_var['customer']['cus_id']; ?>".length == 0) {
		$("#form1").validate({
			rules: {
				cus_repassword: {
					required: true,
					equalTo: '#cus_password'
				}
			},
			messages: {
				cus_repassword: {
					equalTo: "两次输入的密码不相同！"
				}
			}
		});
	}

	$("#of_username").blur(function() {
		check_of_username();
	});

	$("#of_username").keyup(function() {
		var value = $(this).val();
		if (value.length == 0 || value != of_username) {
			// alert(value + "-"+ of_username)
			$("#of_username-success").remove();
		}
	});

	$("#cus_type_<?php echo $this->_var['customer']['cus_type']; ?>").attr("checked", "checked");
	$("#cus_enable_<?php echo $this->_var['customer']['cus_enable']; ?>").attr("checked", "checked");
});

//-->

</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
