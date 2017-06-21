<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
    <form  class="pageForm required-validate"  action="<?php echo U('admin/dictionary_manage/toolAdd');?>" onsubmit="return validateCallback(this,dialogAjaxDone)" method="post" >
    <table id="UserListTable" class="list" style="width:100%;">
        <tbody>
            <tr>
                <td align="center" width='100'><label>工具ID</label></td>
                <td align="left"><input type='text' name='id'  class="required"/></td>
            </tr>
            <tr>
                <td align="center" width='100'><label>图片名称</label></td>
                <td align="left"><input type='text' name='picname'  class="required"/></td>
            </tr>
            <tr>
                <td align="center" width='100'><label>鼠标名称</label></td>
                <td align="left"><input type='text' name='mousename'  class="required"/></td>
            </tr>
            <tr>
                <td align="center"><label>工具名称(汉字)</label></td>
                <td align="left"><input type='text' name='tipname'/></td>
            </tr>
            <tr>
                <td align="center"><label>检修类别</label></td>
                <td align="left">
                    <?php if(is_array($JXTypeArr)): $i = 0; $__LIST__ = $JXTypeArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Jxvo): $mod = ($i % 2 );++$i;?><input type="checkbox" name="uselev[]" value="<?php echo ($key); ?>" checked><?php echo ($Jxvo); endforeach; endif; else: echo "" ;endif; ?>
                </td>
            </tr>
            <tr>
                <td align="center"><label>工具用途</label></td>
                <td align="left">
                     <?php if(is_array($TOOLUseTypeArr)): $i = 0; $__LIST__ = $TOOLUseTypeArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ToolUsevo): $mod = ($i % 2 );++$i;?><input type="radio" name="usetype" value="<?php echo ($key); ?>"><?php echo ($ToolUsevo); endforeach; endif; else: echo "" ;endif; ?>
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