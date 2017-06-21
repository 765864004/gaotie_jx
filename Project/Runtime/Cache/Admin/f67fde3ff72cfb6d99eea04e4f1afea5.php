<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
    <form  class="pageForm required-validate"  action="<?php echo U('admin/admin_manage/userEdit');?>" onsubmit="return validateCallback(this,dialogAjaxDone)" method="post" >
    <table id="UserListTable" class="list" style="width:100%;">
        <tbody>
            <tr>
                <td align="center" width='100'><label>用户名</label></td>
                <td align="left"><input type='text' name='uname'  value="<?php echo ($stuInfo['uname']); ?>" readonly style="border:none;background:#c0c0c0;"/>不可更改</td>
            </tr>
            <tr>
                <td align="center" width='100'><label>真实姓名</label></td>
                <td align="left"><input type='text' name='truename'  class="required" value="<?php echo ($stuInfo['truename']); ?>"/></td>
            </tr>
            <tr>
                <td align="center"><label>性别</label></td>
                <td align="left">
                    <input type="checkbox" name="usex" value="0" <?php if(($stuInfo[usex]) == "0"): ?>checked<?php endif; ?>>男&nbsp;
                    <input type="checkbox" name="usex" value="1" <?php if(($stuInfo[usex]) == "1"): ?>checked<?php endif; ?>>女
                </td>
            </tr>
            <tr>
                <td align="center" width='100'><label>身份证号</label></td>
                <td align="left"><input type='text' name='card'  value="<?php echo ($stuInfo['card']); ?>" readonly style="border:none;background:#c0c0c0;"/>不可更改</td>
            </tr>
            <tr>
                <td align="center" width='100'><label>密码</label></td>
                <td align="left"><input type='text' name='password' />不修改密码则不填此项</td>
            </tr>
            <tr>
                <td align="center" width='100'><label>确认密码</label></td>
                <td align="left"><input type='text' name='confirm_password' />不修改密码则不填此项</td>
            </tr>
            <tr>
                <td align="center"><label>部门</label></td>
                <td align="left">
                    <select name="departid" class="required">
                    <?php if(is_array($departList)): $i = 0; $__LIST__ = $departList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>" <?php if(($stuInfo[departid]) == $vo['id']): ?>selected<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td colspan='2' align='right'><input type='submit' value='提交' /><input type='reset' value='重置' /></td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="id" value="<?php echo ($stuInfo['uid']); ?>"/>
    </form>
</div><!-- pageContent end -->