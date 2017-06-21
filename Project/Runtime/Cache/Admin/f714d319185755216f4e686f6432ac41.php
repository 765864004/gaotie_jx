<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
    <form  class="pageForm required-validate"  action="<?php echo U('admin/dictionary_manage/unitAdd');?>" onsubmit="return validateCallback(this,dialogAjaxDone)" method="post" >
    <table id="UserListTable" class="list" style="width:100%;">
        <tbody>
            <tr>
                <td align="center" width='100'><label>部件ID</label></td>
                <td align="left"><input type='text' name='id'  class="required"/></td>
            </tr>
            <tr>
                <td align="center" width='100'><label>部件名称</label></td>
                <td align="left"><input type='text' name='unitname'  class="required"/></td>
            </tr>
            <tr>
                <td align="center"><label>车型</label></td>
                <td align="left">
                    <select name="CRH" class="required">
                    <?php if(is_array($crh)): $i = 0; $__LIST__ = $crh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>"><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="center"><label>检修类别</label></td>
                <td align="left">
                    <?php if(is_array($JXTypeArr)): $i = 0; $__LIST__ = $JXTypeArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Jxvo): $mod = ($i % 2 );++$i;?><input type="checkbox" name="level[]" value="<?php echo ($key); ?>"><?php echo ($Jxvo); endforeach; endif; else: echo "" ;endif; ?>
                </td>
            </tr>
            <tr>
                <td align="center"><label>该部件所属部位</label></td>
                <td align="left">
                    <?php if(is_array($BWTypeArr)): $i = 0; $__LIST__ = $BWTypeArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Bwvo): $mod = ($i % 2 );++$i; if(($vo['area']& $key) == $key): echo ($Bwvo); ?>&nbsp;&nbsp;&nbsp;<?php endif;?>
                        <input name="area[]" value="<?php echo ($key); ?>" type="checkbox"><?php echo ($Bwvo); endforeach; endif; else: echo "" ;endif; ?>
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