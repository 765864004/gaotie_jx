<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
    <form  class="pageForm required-validate"  action="<?php echo U('admin/dictionary_manage/materialEdit');?>" onsubmit="return validateCallback(this,dialogAjaxDone)" method="post" >
    <table id="UserListTable" class="list" style="width:100%;">
        <tbody>
            <tr>
                <td align="center" width='100'><label>材料ID</label></td>
                <td align="left"><?php echo ($po['id']); ?></td>
            </tr>
            <tr>
                <td align="center" width='100'><label>图片名称</label></td>
                <td align="left"><input type='text' name='picname'  class="required" value="<?php echo ($po['picname']); ?>"/></td>
            </tr>
            <tr>
                <td align="center" width='100'><label>材料名称</label></td>
                <td align="left"><input type='text' name='tipname'  class="required" value="<?php echo ($po['tipname']); ?>"/></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td colspan='2' align='right'><input type='submit' value='提交' /><input type='reset' value='重置' /></td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="id" value="<?php echo ($po['id']); ?>"/>
    </form>
</div><!-- pageContent end -->