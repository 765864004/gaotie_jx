<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
    <form  class="pageForm required-validate"  action="<?php echo U('admin/admin_manage/addAdmin');?>" onsubmit="return validateCallback(this,dialogAjaxDone)" method="post" >
    <table id="UserListTable" class="list" style="width:100%;">
        <tbody>
            <tr>
                <td align="center" width='100'><label>用户名</label></td>
                <td align="left"><input type='text' name='username'     class="required"/></td>
            </tr>
            <tr>
                <td align="center"><label>用户密码</label></td>
                <td align="left"><input type='password' name='password'  id="password"   class="required"/></td>
            </tr>
            <tr>
                <td align="center"><label>确认密码</label></td>
                <td align="left"><input type='password' name='confirm_password' class="required"  equalTo="#password"/></td>
            </tr>
            <tr>
                <td align="center"><label>真实姓名</label></td>
                <td align="left"><input type='text' name='tname' class="required"  size='40'/></td>
            </tr>
            <tr>
                <td align="center" width='100'>用户角色</td>
                <td align="left">
                <select name="roleId"><?php if(is_array($roleList)): foreach($roleList as $key=>$value): ?><option value="<?php echo ($value['id']); ?>"><?php echo ($value['name']); ?></option><?php endforeach; endif; ?></select>
                </td>
            </tr>
            <tr>
                <td align="center"><label>是否启用</label></td>
                <td align="left">
                    <input type="radio" name="status" value="Y" checked/>是
                    <input type="radio" name="status" value="N"/>否
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td colspan='2' align='right'><input type='submit' value='提交' /><input type='reset' value='重置' /></td>
            </tr>
        </tbody>
    </table>
    </form>
</div><!-- pageContent end -->