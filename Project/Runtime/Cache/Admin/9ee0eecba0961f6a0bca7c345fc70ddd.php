<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
    <form  class="pageForm required-validate"  action="<?php echo U('admin/admin_manage/departAdd');?>" onsubmit="return validateCallback(this,dialogAjaxDone)" method="post" >
    <table id="UserListTable" class="list" style="width:100%;">
        <tbody>
            <tr>
                <td align="center" width='100'><label>部门名称</label></td>
                <td align="left"><input type='text' name='name'  class="required"/></td>
            </tr>
			<tr>
                <td align="center" width='100'><label>描述</label></td>
                <td align="left"><textarea name='description' style="width:80%;height:40px;"></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td colspan='2' align='right'><input type='submit' value='提交' /><input type='reset' value='重置' /></td>
            </tr>
        </tbody>
    </table>
    </form>
</div><!-- pageContent end -->