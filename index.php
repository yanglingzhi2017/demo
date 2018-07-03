﻿{template 'header',$module}
<script type="text/javascript">c(4);</script>

{load('profile.js')}
{if $_groupid > 5 && !$_edittime}
	<div class="warn">贵公司尚未完善详细资料！完善的商业信息有助于获得别人的信任，结交潜在的商业伙伴，获取商业机会，请尽快完善</div>
{/if}
{if isset($success)}
	<div class="ok">资料保存成功，您可以：<a href="{$MODULE[2][linkurl]}edit.php" class="t">继续完善</a> &nbsp;|&nbsp; <a href="{$MODULE[2][linkurl]}{$DT[file_my]}" class="t">发布信息</a> &nbsp;|&nbsp; <a href="{$MODULE[2][linkurl]}" class="t">返回商务室首页</a></div>
{/if}
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="Tab0"><a href="javascript:Tab(0);"><span>个人资料</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="Tab1"><a href="javascript:Tab(1);"><span>密码管理</span></a></td>
{if $_groupid > 5}
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="Tab2"><a href="javascript:Tab(2);"><span>公司资料</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="Tab3"><a href="javascript:Tab(3);"><span>公司联系方式</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="Tab4"><a href="javascript:Tab(4);"><span>公司介绍</span></a></td>
{/if}
</tr>
</table>
</div>
<form method="post" action="edit.php" onsubmit="return Dcheck();" id="dform" enctype="multipart/form-data">
<input type="hidden" name="tab" id="tab" value="{$tab}"/>
<table cellpadding="6" cellspacing="1" class="tb">
<tbody id="Tabs0" style="display:;">
<tr>
<td class="tl">会员名</td>
<td class="tr f_b">{$_username}</td>
</tr>
<tr>
<td class="tl">Email</td>
<td class="tr">{$_email}{if $vemail}&nbsp;&nbsp;<img src="image/v_email.gif" title="已认证" align="absmiddle"/>{/if}&nbsp;&nbsp;<a href="send.php?action=email" class="t">[修改]</a></td>
</tr>
{if $vtruename}
<tr>
<td class="tl"><span class="f_red">*</span>真实姓名</td>
<td class="tr"><input type="hidden" name="post[truename]" id="truename" value="{$truename}"/>{$truename}&nbsp;&nbsp;<img src="image/v_truename.gif" title="已认证" align="absmiddle"/></td>
</tr>
{else}
<tr>
<td class="tl"><span class="f_red">*</span>真实姓名</td>
<td class="tr"><input type="text" size="10" name="post[truename]" id="truename" value="{$truename}"/>&nbsp;<span id="dtruename" class="f_red"></span></td>
</tr>
{/if}
<tr>
<td class="tl"><span class="f_red">*</span>性别</td>
<td class="tr">
<input type="radio" name="post[gender]" value="1" {if $gender==1}checked="checked"{/if}/> 先生
<input type="radio" name="post[gender]" value="2" {if $gender==2}checked="checked"{/if}/> 女士
</td>
</tr>
{if $_groupid < 6}
<tr>
<td class="tl"><span class="f_red">*</span>所在地区</td>
<td class="tr">{ajax_area_select('post[areaid]', '请选择', $areaid)}&nbsp;<span id="dareaid" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">联系地址</td>
<td class="tr"><input type="text" size="40" name="post[address]" id="daddress" value="{$address}"/>&nbsp;<span id="ddaddress" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">邮政编码</td>
<td class="tr"><input type="text" size="8" name="post[postcode]" id="postalcode" value="{$postcode}"/></td>
</tr>
<tr>
<td class="tl">联系电话</td>
<td class="tr"><input type="text" size="20" name="post[telephone]" id="telephone" value="{$telephone}"/>&nbsp;<span id="dtelephone" class="f_red"></span></td>
</tr>
{/if}
{if $vmobile}
<tr>
<td class="tl">手机号码</td>
<td class="tr"><input type="hidden" name="post[mobile]" id="mobile" value="{$mobile}"/>{$mobile}&nbsp;&nbsp;<img src="image/v_mobile.gif" title="已认证" align="absmiddle"/>&nbsp;&nbsp;<a href="send.php?action=mobile" class="t">[修改]</a></td>
</tr>
{else}
<tr>
<td class="tl">手机号码</td>
<td class="tr"><input type="text" size="20" name="post[mobile]" id="mobile" value="{$mobile}"/></td>
</tr>
{/if}
<tr>
<td class="tl">部门</td>
<td class="tr"><input type="text" size="20" name="post[department]" id="department" value="{$department}"/></td>
</tr>
<tr>
<td class="tl">职位</td>
<td class="tr"><input type="text" size="20" name="post[career]" id="career" value="{$career}"/></td>
</tr>
{if $DT[im_qq]}
<tr>
<td class="tl">QQ</td>
<td class="tr"><input type="text" size="20" name="post[qq]" id="qq" value="{$qq}"/><span>qq客服开启窗口</span><a href="http://shang.qq.com/" style="color:red"  target="_blank">点击</a><span>下一步->推广工具->立即免费开通</span></td>
</tr>
{/if}
{if $DT[im_ali]}
<tr>
<td class="tl">阿里旺旺</td>
<td class="tr"><input type="text" size="20" name="post[ali]" id="ali" value="{$ali}"/></td>
</tr>
{/if}
<tr>
<td class="tl">微信账号</td>
<td class="tr"><input type="text" size="20" name="post[weichat]" id="ali" value="{$weichat}"/></td>
</tr>
<tr>
<td class="tl">微信公众号</td>
<td class="tr"><input type="text" size="20" name="post[weichat_g]" id="ali" value="{$weichat_g}"/></td>
</tr>
<tr>
<td class="tl">微信二维码</td>
<td>
<input type="file" name="weichat_img"  size="45" onchange="javascript:setImagePreviews();" id="doc" multiple="multiple"  accept="image/*"> <span>最大上传500kb</span>
 <div style="margin-top: 10px;" id="dd"><img src="{$weichat_img}" width="50" height="50" border="0" alt="二维码"></div>
</td>
</tr>
<tr>
<td  class="tl" >产品权限验证码</td>
	<td class="tr"><input name="post[rule_pwd]" type="text" size="10" value="{$rule_pwd}"/></td>
</tr>

{if $DT[im_msn]}
<tr>
<td class="tl">MSN</td>
<td class="tr"><input type="text" size="30" name="post[msn]" id="msn" value="{$msn}"/></td>
</tr>
{/if}
{if $DT[im_skype]}
<tr>
<td class="tl">Skype</td>
<td class="tr"><input type="text" size="20" name="post[skype]" id="skype" value="{$skype}"/></td>
</tr>
{/if}
<tr>
<td class="tl">站内信提示音</td>
<td class="tr">
<div id="audition"></div>
<input type="radio" name="post[sound]" value="0" {if $sound==0}checked="checked"{/if} id="sound_0"/><label for="sound_0"> 无</label>&nbsp;&nbsp;
<input type="radio" name="post[sound]" value="1" {if $sound==1}checked="checked"{/if} id="sound_1"/> <a href="javascript:Inner('audition', sound('message_1'));Dd('sound_1').checked=true;void(0);" title="点击试听">提示音1</a>&nbsp;&nbsp;
<input type="radio" name="post[sound]" value="2" {if $sound==2}checked="checked"{/if} id="sound_2"/> <a href="javascript:Inner('audition', sound('message_2'));Dd('sound_2').checked=true;void(0);" title="点击试听">提示音2</a>&nbsp;&nbsp;
<input type="radio" name="post[sound]" value="3" {if $sound==3}checked="checked"{/if} id="sound_3"/> <a href="javascript:Inner('audition', sound('message_3'));Dd('sound_3').checked=true;void(0);" title="点击试听">提示音3</a>&nbsp;&nbsp;
</td>
</tr>
{if $MFD}{fields_html('<td class="tl">', '<td class="tr">', $user, $MFD)}{/if}
</tbody>
<tbody id="Tabs1" style="display:none;">
<tr>
<td class="tl">新登录密码</td>
<td class="tr"><input type="password" size="20" name="post[password]" id="password" onblur="validator('password');" autocomplete="off"/>&nbsp;<span class="f_gray">如不更改密码,请留空</span> <span id="dpassword" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">重复新密码</td>
<td class="tr"><input type="password" size="20" name="post[cpassword]" id="cpassword" autocomplete="off"/>&nbsp;<span id="dcpassword" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">现有密码</td>
<td class="tr f_red"><input type="password" size="20" name="post[oldpassword]" id="oldpassword" autocomplete="off"/>&nbsp; 如要更改密码，需输入现有密码 <span id="doldpassword" class="f_red"></span></td>
</tr>

<tr>
<td class="tl">新支付密码</td>
<td class="tr"><input type="password" size="20" name="post[payword]" id="payword" onblur="validator('payword');" autocomplete="off"/>&nbsp;<span class="f_gray">如不更改支付密码，请留空</span> <span id="dpayword" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">重复新支付密码</td>
<td class="tr"><input type="password" size="20" name="post[cpayword]" id="cpayword" autocomplete="off"/>&nbsp;<span id="dcpayword" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">现有支付密码</td>
<td class="tr f_red"><input type="password" size="20" name="post[oldpayword]" id="oldpayword" autocomplete="off"/>&nbsp; 支付密码默认和注册设置密码相同&nbsp;&nbsp;<a href="send.php?action=payword"  class="t">找回支付密码</a><span id="doldpayword" class="f_red"></span></td>
</tr>

</tbody>
{if $_groupid > 5}
<tbody id="Tabs2" style="display:none;">
<tr>
<td class="tl">公司名</td>
<td class="tr f_b">{$_company}</td>
</tr>
<tr>
<td class="tl">公司名(英文)</td>
<td class="tr f_b"><input type="text" size="80" name="post[company_en]" id="company_en" value="{$en_company[company_en]}" maxlength="250"/></td>
</tr>
<tr>
<td class="tl">公司名(拉伯文)</td>
<td class="tr f_b"><input type="text" size="80" name="post[company_lb]" id="company_lb" value="{$en_company[company_lb]}" maxlength="250"/></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span>公司类型</td>
<td class="tr">{dselect($COM_TYPE, 'post[type]', '请选择', $type, 'id="type"', 0)}&nbsp;<span id="dtype" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">形象图片</td>
<td class="tr"><input name="post[thumb]" type="text" size="60" id="thumb" value="{$thumb}" readonly/>&nbsp;&nbsp;<span onclick="Dthumb({$moduleid},{$MOD[thumb_width]},{$MOD[thumb_height]}, Dd('thumb').value, true);" class="jt">[上传]</span>&nbsp;&nbsp;<span onclick="_preview(Dd('thumb').value);" class="jt">[预览]</span>&nbsp;&nbsp;<span onclick="Dd('thumb').value='';" class="jt">[删除]</span><br/>
<span class="f_gray">建议使用LOGO、办公环境等标志性图片，最佳大小为{$MOD[thumb_width]}px*{$MOD[thumb_height]}px</span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span>所在地区</td>
<td class="tr">{ajax_area_select('post[areaid]', '请选择', $areaid)}&nbsp;<span id="dareaid" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span>主营行业</td>
<td class="tr">
<div id="catesch"></div><div id="cate">{ajax_category_select('', '', 0, 4, 'size="2" style="height:80px;width:160px;"')}</div>
<input type="button" value=" 添加↓ " class="btn" onclick="addcate({$MOD[cate_max]});"/>
<input type="button" value=" ×删除 " class="btn" onclick="delcate();"/>
{if $DT[schcate_limit]}<input type="button" value=" 搜索 " class="btn" onclick="schcate(4);"/>{/if}
&nbsp;最多可添加 <strong class="f_red">{$MOD[cate_max]}</strong> 个主营行业
<br/><select name="cates" id="cates" size="2" style="height:100px;width:380px;margin-top:5px;">
{loop $cates $c}
<option value="{$c}">{strip_tags(cat_pos(get_cat($c), '/'))}</option>
{/loop}
</select>
<input type="hidden" name="post[catid]" value="{$catid}" id="catid"/><br/>
<span id="dcatid" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span>主要经营范围</td>
<td class="tr"><input type="text" size="80" name="post[business]" id="business" value="{$business}" maxlength="250"/>&nbsp;<span id="dbusiness" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span>公司成立年份</td>
<td class="tr"><input type="text" size="15" name="post[regyear]" id="regyear" value="{$regyear}" maxlength="4"/>&nbsp;<span id="dregyear" class="f_red"></span> <span class="f_gray">(年份，如：2004)</span></td>
</tr>
<tr>
<td class="tl">经营模式</td>
<td class="tr">
<span id="com_mode">{$mode_check}</span> <span class="f_gray">(最多可选{$MOD[mode_max]}种)</span></td>
</tr>
<tr>
<td class="tl">公司规模</td>
<td class="tr">{dselect($COM_SIZE, 'post[size]', '请选择规模', $size, '', 0)}</td>
</tr>
<tr>
<td class="tl">注册资本</td>
<td class="tr">{dselect($MONEY_UNIT, 'post[regunit]', '', $regunit, '', 0)} <input type="text" size="6" name="post[capital]" id="capital" value="{$capital}"/> 万</td>
</tr>
<tr>
<td class="tl">销售的产品<br/>(提供的服务)</td>
<td class="tr"><input type="text" size="50" name="post[sell]" id="sell" value="{$sell}" maxlength="200"/> <span class="f_gray">多个产品或服务请用'|'号隔开</span></td>
</tr>
<tr>
<td class="tl">采购的产品<br/>(需要的服务)</td>
<td class="tr"><input type="text" size="50" name="post[buy]" id="buy" value="{$buy}" maxlength="200"/> <span class="f_gray">多个产品或服务请用'|'号隔开</span></td>
</tr>
{if $CFD}{fields_html('<td class="tl">', '<td class="tr">', $user, $CFD)}{/if}
</tbody>
<tbody id="Tabs3" style="display:none;">

<tr>
<td class="tl"><span class="f_red">*</span>公司地址</td>
<td class="tr"><input type="text" size="60" name="post[address]" id="daddress" value="{$address}" maxlength="200"/>&nbsp;<span id="ddaddress" class="f_red"></span></td>
</tr>

<tr>
<td class="tl">邮政编码</td>
<td class="tr"><input type="text" size="8" name="post[postcode]" id="postalcode" value="{$postcode}"/></td>
</tr>

<tr>
<td class="tl"><span class="f_red">*</span>公司电话</td>
<td class="tr"><input type="text" size="20" name="post[telephone]" id="telephone" value="{$telephone}"/>&nbsp;<span id="dtelephone" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">公司传真</td>
<td class="tr"><input type="text" size="20" name="post[fax]" id="fax" value="{$fax}"/></td>
</tr>
<tr>
<td class="tl">公司Email</td>
<td class="tr"><input type="text" size="30" name="post[mail]" id="mail" value="{$mail}"/> <span class="f_gray">[公开]</span></td>
</tr>
<tr>
<td class="tl">公司网址</td>
<td class="tr"><input type="text" size="30" name="post[homepage]" id="homepage" value="{$homepage}"/></td>
</tr>
</tbody>
<tbody id="Tabs4" style="display:none;">
<tr>
<td class="tl"><span class="f_red">*</span>公司介绍</td>
<td class="tr"><textarea name="post[introduce]" id="introduce" class="dsn">{$introduce}</textarea>

{deditor_muilt($moduleid, 'introduce', $group_editor, '95%', 300 ,'introduce1','introduce2')}<br/><span id="dintroduce" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span>公司介绍(英文)</td>
<td class="tr">
<textarea name="post[introduce_en]" id="introduce1" class="dsn">{$introduce_en}</textarea>

<br/><span id="dintroduce" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span>公司介绍(阿拉伯文)</td>
<td class="tr">
<textarea name="post[introduce_lb]" id="introduce2" class="dsn">{$introduce_lb}</textarea>
<br/><span id="dintroduce" class="f_red"></span></td>
</tr>
</tbody>

{/if}
<tr>
<td class="tl">&nbsp;</td>
<td class="tr" height="30"><input type="submit" name="submit" value=" 保 存 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value=" 返 回 " class="btn" onclick="history.back(-1);"/></td>
</tr>
</table>
</form>
{load('clear.js')}
<script type="text/javascript">
var vid = '';
function validator(id) {
	if(!Dd(id).value) return false;
	vid = id;
	makeRequest('moduleid={$moduleid}&action=member&job='+id+'&value='+Dd(id).value+'&userid={$userid}', AJPath, '_validator');
}
function _validator() {
	if(xmlHttp.readyState==4 && xmlHttp.status==200) {
		Dd('d'+vid).innerHTML = xmlHttp.responseText ? xmlHttp.responseText : '';
	}
}
function Dcheck() {
	if(Dd('truename').value == '') {
		Tab(0);
		Dmsg('请填写真实姓名', 'truename');
		return false;
	}
	if(Dd('password').value != '') {
		if(Dd('cpassword').value == '') {
			Tab(1);
			Dmsg('请重复输入密码', 'cpassword');
			return false;
		}
		if(Dd('password').value != Dd('cpassword').value) {
			Tab(1);
			Dmsg('两次输入的密码不一致', 'password');
			return false;
		}
		if(Dd('oldpassword').value == '') {
			Tab(1);
			Dmsg('请输入密码', 'oldpassword');
			return false;
		}
	}
	if(Dd('payword').value != '') {
		if(Dd('cpayword').value == '') {
			Tab(1);
			Dmsg('请重复输入支付密码', 'cpayword');
			return false;
		}
		if(Dd('payword').value != Dd('cpayword').value) {
			Tab(1);
			Dmsg('两次输入的支付密码不一致', 'payword');
			return false;
		}
		if(Dd('oldpayword').value == '') {
			Tab(1);
			Dmsg('请输入支付密码', 'oldpayword');
			return false;
		}
	}

{if $_groupid < 6}	
	if(Dd('areaid_1').value == 0) {
		Tab(0);
		Dmsg('请选择所在地', 'areaid');
		return false;
	}
{/if}

	{if $MFD}{fields_js($MFD)}{/if}
	{if $_groupid > 5}
	{if $CFD}{fields_js($CFD)}{/if}
	if(Dd('type').value == '') {
		Tab(2);
		Dmsg('请选择公司类型', 'type');
		return false;
	}
	if(Dd('areaid_1').value == 0) {
		Tab(2);
		Dmsg('请选择公司所在地', 'areaid');
		return false;
	}
	if(Dd('catid').value.length < 2) {
		Tab(2);
		Dmsg('请选择公司主营行业', 'catid');
		return false;
	}
	if(Dd('business').value.length < 10) {
		Tab(2);
		Dmsg('主要经营范围最少10字', 'business');
		return false;
	}
	if(Dd('regyear').value.length < 4) {
		Tab(2);
		Dmsg('请填写公司成立年份', 'regyear');
		return false;
	}
	if(Dd('daddress').value.length < 5) {
		Tab(3);
		Dmsg('请填写公司地址', 'daddress');
		return false;
	}
	if(Dd('telephone').value.length < 6) {
		Tab(3);
		Dmsg('请填写公司电话', 'telephone');
		return false;
	}
	if(FCKLen('introduce') < 10) {
		Tab(4);
		Dmsg('公司介绍不能少于10字，当前已经输入'+FCKLen('introduce')+'字', 'introduce');
		return false;
	}
	{/if}
	return true;
}
</script>
<script type="text/javascript">
s('edit');
{if $tab}
Tab({$tab});
{else}
m('Tab0');
{/if}
</script>
<script  type="text/javascript">
  
    //下面用于多图片上传预览功能
    function setImagePreviews(avalue) {
        //获取选择图片的对象
        var docObj = document.getElementById("doc");
        //后期显示图片区域的对象
        var dd = document.getElementById("dd");
        dd.innerHTML = "";
        //得到所有的图片文件
        var fileList = docObj.files;
        //循环遍历
        for (var i = 0; i < fileList.length; i++) {    
            //动态添加html元素        
            dd.innerHTML += "<div style='float:left' > <img id='img" + i + "'  /> </div>";
            //获取图片imgi的对象
            var imgObjPreview = document.getElementById("img"+i); 
            
            if (docObj.files && docObj.files[i]) {
                //火狐下，直接设img属性
                imgObjPreview.style.display = 'block';
                imgObjPreview.style.width = '50px';
                imgObjPreview.style.height = '50px';
                //imgObjPreview.src = docObj.files[0].getAsDataURL();
                //火狐7以上版本不能用上面的getAsDataURL()方式获取，需要以下方式
                imgObjPreview.src = window.URL.createObjectURL(docObj.files[i]);   //获取上传图片文件的物理路径
            }
            else {
                //IE下，使用滤镜
                docObj.select();
                var imgSrc = document.selection.createRange().text;
                //alert(imgSrc)
                var localImagId = document.getElementById("img" + i);
               //必须设置初始大小
                localImagId.style.width = "200px";
                localImagId.style.height = "180px";
                //图片异常的捕捉，防止用户修改后缀来伪造图片
                try {
                    localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
                    localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
                }
                catch (e) {
                    alert("您上传的图片格式不正确，请重新选择!");
                    return false;
                }
                imgObjPreview.style.display = 'none';
                document.selection.empty();
            }
        }  
        return true;
    }

    						UE.getEditor('sub_goods_name', {
											"initialFrameWidth" : "100%",
											"initialFrameHeight" : 500,
											"maximumWords" : 10000
										});
    							UE.getEditor('sub_goods_name1', {
											"initialFrameWidth" : "100%",
											"initialFrameHeight" : 500,
											"maximumWords" : 10000
										});
</script>
{template 'footer',$module}